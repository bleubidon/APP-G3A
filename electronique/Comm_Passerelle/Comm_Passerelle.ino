//------------------------------------------------------------------------
// Comm passerelle - G3A - version du 27/03/20
//------------------------------------------------------------------------

template <class T>
inline Print &operator<<(Print &obj, T arg)
{
  obj.print((String)arg);
  return obj;
}

#define SIZE_BUF_SEND 19
#define SIZE_BUF_RECEP 15
#define endl "\n"
// #define ENABLE_LOG

char bufEnvoi[SIZE_BUF_SEND + 1]; // Le dernier octet est reserve pour '\0'
char bufRecep[SIZE_BUF_RECEP + 1];
unsigned int valeurCapteur;
String valeurCapteurString;
String checksumBufEnvoi;
bool timeout;
unsigned long debutAttenteReponse;

// Parametres pour la construction de la trame
String idObj = "G3A4";
char typeCapteur = '3';      // Type du capteur (arbitraire)
String numeroCapteur = "01"; // Numero du capteur (arbitraire)
#define SERIAL1_TIMEOUT 1000 // Timeout en ms pour la communication avec le module bluetooth
#define LOOP_TEMPO 1000      // Delai en ms entre chaque sequence d'actions

// Ci-dessous les prototypes des fonctions (sauf setup et loop qui sont déjà répertoriées par la plupart des outils de compilation) afin d'assurer la compatibilité avec la plupart des outils de compilation
void sendTrame();
void recepTrame();
void parseTrameReponse();
String completionAGauche(int valeur, int taille_mot, int base);
String calculChecksum(char Buffer[], int number_of_bytes);

void setup()
{
  Serial.begin(9600);  // port serie du terminal Energia
  Serial1.begin(9600); // port serie du module blueTooth
  Serial1.setTimeout(SERIAL1_TIMEOUT);

  // Initilisation des champs fixes de la trame d'envoi
  bufEnvoi[0] = '1';      // type trame = trame courante
  bufEnvoi[1] = idObj[0]; // identifiant d'objet
  bufEnvoi[2] = idObj[1];
  bufEnvoi[3] = idObj[2];
  bufEnvoi[4] = idObj[3];
  bufEnvoi[5] = '1'; // Requete en ecriture
  bufEnvoi[6] = typeCapteur;
  bufEnvoi[7] = numeroCapteur[0]; // numero du capteur
  bufEnvoi[8] = numeroCapteur[1];
  // Timestamp (non utilise dans le protocole de communication)
  bufEnvoi[13] = '0';
  bufEnvoi[14] = '0';
  bufEnvoi[15] = '0';
  bufEnvoi[16] = '0';
  bufEnvoi[19] = '\0';

  // Initilisation des champs fixes de la trame de reponse
  bufRecep[15] = '\0';
}

void loop()
{
  // Reinitialisation du buffer accueillant la trame de reponse
  for (int i = 0; i <= SIZE_BUF_RECEP; i++)
  {
    bufRecep[i] = NULL;
  }

  // Lecture et formatage de la valeur issue du capteur
  valeurCapteur = 42; // Valeur arbitraire
  valeurCapteurString = completionAGauche(valeurCapteur, 4, HEX);

  // Insertion du payload dans la trame d'envoi
  bufEnvoi[9] = valeurCapteurString[0];
  bufEnvoi[10] = valeurCapteurString[1];
  bufEnvoi[11] = valeurCapteurString[2];
  bufEnvoi[12] = valeurCapteurString[3];

  // Calcul et insertion du checksum
  checksumBufEnvoi = calculChecksum(bufEnvoi, SIZE_BUF_SEND - 2); // Le checksum est calculé sur les 17 premiers octets de la trame
  bufEnvoi[17] = checksumBufEnvoi[0];
  bufEnvoi[18] = checksumBufEnvoi[1];

  // Envoi de la trame
  Serial << "Sending: ";
  sendTrame();

  // Lecture de la trame de reponse
  recepTrame();
  if (timeout)
    Serial << "[TIMEOUT]";
  else
    parseTrameReponse();
  Serial << endl
         << endl;
  delay(LOOP_TEMPO);
}

void sendTrame()
{
  // lire les octets de Buf_Envoi un par un et envoyer sur les deux lignes serie
  for (int i = 0; i < SIZE_BUF_SEND; i++)
  {
    Serial << bufEnvoi[i];
    Serial1 << bufEnvoi[i];
  }
}

void recepTrame()
{
  timeout = false;
  Serial << endl
         << "Receiving: ";
  debutAttenteReponse = millis();
  int nombreOctetsLus = 0;
  while (nombreOctetsLus < SIZE_BUF_RECEP && millis() - debutAttenteReponse <= SERIAL1_TIMEOUT)
  {
    if (Serial1.available())
    {
      bufRecep[nombreOctetsLus] = Serial1.read();
      Serial << bufRecep[nombreOctetsLus];
      nombreOctetsLus++;
    }
  }
  if (millis() - debutAttenteReponse > SERIAL1_TIMEOUT)
    timeout = true;
}

void parseTrameReponse()
{
  String ok_message = " [OK]";
  String ko_message = " [Trame incorrecte]";

  // Les 9 premiers octets de la reponse doivent toujours etre identiques a ceux de la requete
  for (int i = 0; i <= 8; i++)
  {
    if (bufEnvoi[0] != bufRecep[0])
    {
      Serial << ko_message;
      return;
    }
  }

  // Verifier que le checksum de la reponse est correct
  String checksum_Buf_Recep_theorical = calculChecksum(bufRecep, SIZE_BUF_RECEP - 2);
#ifdef ENABLE_LOG
  Serial << " checksum_th: " << checksum_Buf_Recep_theorical << " ";
#endif
  if (checksum_Buf_Recep_theorical[0] != bufRecep[13] || checksum_Buf_Recep_theorical[1] != bufRecep[14])
  {
    Serial << ko_message;
    return;
  }

  switch (bufRecep[5])
  {
  case '1':
  {
    // S'il s'agit d'une reponse a une requete en ecriture, on verifie que les autres octets sont conformes a ce qu'on attendait
    for (int i = 9; i <= 12; i++)
    {
      if (bufEnvoi[0] != bufRecep[0])
      {
        Serial << ko_message;
        return;
      }
    }

    Serial << ok_message;
    break;
  }

  case '2':
    // S'il s'agit d'une reponse a une requete en lecture, on affiche le payload
    Serial << " Payload: ";
    for (int i = 9; i <= 12; i++)
      Serial << bufRecep[i];
    break;
  }
}

// Fonctions utilitaires
String completionAGauche(int valeur, int taille_mot, int base)
{
  String valeur_String = String(valeur, base);
  int nbr_ite = taille_mot - valeur_String.length();
  for (int i = 0; i < nbr_ite; i++)
  {
    valeur_String = '0' + valeur_String;
  }
  return valeur_String;
}

String calculChecksum(char Buffer[], int number_of_bytes)
{
  int checksum = 0;
  for (int i = 0; i < number_of_bytes; i++)
    checksum += Buffer[i];
  checksum %= 256;
  return completionAGauche(checksum, 2, HEX);
}

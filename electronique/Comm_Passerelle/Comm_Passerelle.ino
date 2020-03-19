//------------------------------------------------------------------------
// Comm passerelle
//------------------------------------------------------------------------

#define TAILLE_TRAME 19
#define CAPTEUR_TEMPERATURE '3'

char Buf_Envoi[TAILLE_TRAME];
char Buf_Recep[TAILLE_TRAME];
int valeur_Temp;
char incomingByte;

// Parametres pour la construction de la trame
String id_obj = "G3A4";
char type_capteur = CAPTEUR_TEMPERATURE;
String num_capteur = "01";

void Send_Trame();
void Recep_Trame();

void setup()
//------------------------------------------------------------------------
//------------------------------------------------------------------------
{
  // initialize both serial ports:
  Serial.begin(9600);  // portie serie  terminal Energia
  Serial1.begin(9600); // portie serie  BlueTooth APP
  Serial1.setTimeout(1000);

  Buf_Envoi[0] = '1'; // type trame = trame courante
  // initiliser tous les autres champs fixes de la trame
  Buf_Envoi[1] = id_obj[0];
  Buf_Envoi[2] = id_obj[1];
  Buf_Envoi[3] = id_obj[2];
  Buf_Envoi[4] = id_obj[3];
  Buf_Envoi[5] = '1'; // Requete en ecriture
  Buf_Envoi[6] = type_capteur;
  Buf_Envoi[7] = num_capteur[0];
  Buf_Envoi[8] = num_capteur[1];
}

void loop()
//------------------------------------------------------------------------
//------------------------------------------------------------------------
{
  // lire le capteur de temperature
  valeur_Temp = 42;
  String valeur_Temp_String = completion_a_gauche(valeur_Temp, 4, HEX);
  
  // ajouter dans la trame "Buf_Envoi"
  // Payload
  Buf_Envoi[9] = valeur_Temp_String[0];
  Buf_Envoi[10] = valeur_Temp_String[1];
  Buf_Envoi[11] = valeur_Temp_String[2];
  Buf_Envoi[12] = valeur_Temp_String[3];

  // Timestamp
  unsigned int seconds_total = round((float)millis() / 1000);
  unsigned int minutes = seconds_total / 60;
  unsigned int seconds_remainder = seconds_total % 60;
  String timestamp = completion_a_gauche(minutes, 2, DEC);
  timestamp += completion_a_gauche(seconds_remainder, 2, DEC);

  Buf_Envoi[13] = timestamp[0];
  Buf_Envoi[14] = timestamp[1];
  Buf_Envoi[15] = timestamp[2];
  Buf_Envoi[16] = timestamp[3];

  // Checksum
  int checksum = 0;
  for (int i = 0; i < sizeof(Buf_Envoi); i++)
  {
    checksum += Buf_Envoi[i];
  }
  checksum %= 256;
  String checksum_string = completion_a_gauche(checksum, 2, HEX);

  Buf_Envoi[17] = checksum_string[0];
  Buf_Envoi[18] = checksum_string[1];

  // Envoyer la trame
  Serial.print("Sending: ");
  Send_Trame();
  // Lire la trame de réponse
  Recep_Trame();
  // afficher la trame reçue sur le terminal de Energia
  // Temporisation de 1 à 5 secondes
  Serial.println();
  delay(1000);
}

void Send_Trame()
//------------------------------------------------------------------------
//------------------------------------------------------------------------
{
  // lire les octets de Buf_Envoi un par un et envoyer sur les deux lignes serie
  for (int i = 0; i < sizeof(Buf_Envoi); i++)
  {
    Serial.print(Buf_Envoi[i]);
    Serial1.print(Buf_Envoi[i]);
  }
}

void Recep_Trame()
//------------------------------------------------------------------------
//------------------------------------------------------------------------
{
  // repeter autant de fois que necessaire
  // tester si un octet est dans le buffer de reception de Serial1 (BlueTooth)
  // si oui, lire l'octet et le mettre dans Buf_Recep
  int nombreOctetsDispos = Serial1.available();
  if (nombreOctetsDispos)
  {
    Serial.print("\nReceiving: ");
    for (int i = 0; i < nombreOctetsDispos; i++)
    {
      incomingByte = Serial1.read();
      Buf_Recep[i] = incomingByte;
    }

    for (int i = 0; i < sizeof(Buf_Envoi); i++)
    {
      Serial.print(Buf_Recep[i]);
    }
    Serial.println();
  }
}

// Fonctions utilitaires
char decimal_to_ascii(int decimal_value)
{
  char ascii_value = decimal_value;
  return ascii_value;
}
String completion_a_gauche(int valeur, int taille_mot, int base)
{
  String valeur_String = String(valeur, base);
  int nbr_ite = taille_mot - valeur_String.length();
  for (int i = 0; i < nbr_ite; i++)
  {
    valeur_String = '0' + valeur_String;
  }
  return valeur_String;
}

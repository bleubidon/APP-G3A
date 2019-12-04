<?php
class Email
{
    private $mail;
    private $adresse_email_destinataire;
    private $sujet;
    private $message;

    // Paramètres SMTP
    private $host = "smtp.live.com";
    private $adresse_email_emetteur = "bleubidon@hotmail.com";
    private $email_mdp = "Secretpass";
    private $port = 587;
    private $nom_emetteur = "Support Captest";


    function __construct($email_destinataire, $sujet, $message) {
        require_once( '../include/class.phpmailer.php');

        $this->adresse_email_destinataire = $email_destinataire;
        $this->sujet = $sujet;
        $this->message = $message;

        $this->mail = new PHPMailer;
//        $this->mail->SMTPDebug = 3;  // Enable SMTP debugging
        $this->mail->IsSMTP();  // Set PHPMailer to use SMTP
        $this->mail->CharSet = 'UTF-8';
        $this->mail->Host = $this->host;
        $this->mail->SMTPAuth = true;  // Set this to true if SMTP host requires authentication to send email
        $this->mail->Username = $this->adresse_email_emetteur;
        $this->mail->From = $this->adresse_email_emetteur;
        $this->mail->Password = $this->email_mdp;
        $this->mail->SMTPSecure = "tls";  // If SMTP requires TLS encryption then set it
        $this->mail->Port = $this->port;  // Set TCP port to connect to
        $this->mail->FromName = $this->nom_emetteur;
        $this->mail->AddAddress($this->adresse_email_destinataire, "Recipient Name");
        $this->mail->IsHTML(true);

        $this->mail->Subject = $this->sujet;
//        $this->mail->Subject = "Subject Text";
        $this->mail->Body = $this->message;
    }

    function envoyerEmail() {
        $this->mail->send();
    }
}

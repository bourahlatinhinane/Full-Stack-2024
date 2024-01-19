<?php
session_start();


include_once "../M/User.class.php";
include_once "../M/Penality.class.php";
include_once "../M/Debt.class.php";
include_once "../M/DB_Manager.class.php";

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    echo "Vous devez être connecté pour dénoncer une dette.";
    exit();
}

// Récupérez l'expéditeur (utilisateur connecté) depuis la session
$userGiverId = $_SESSION['user_id'];
$userGiver = DB_Manager::readUserById($userGiverId);

// Récupérer l'ID de l'utilisateur destinataire depuis le formulaire
$idReceiver = isset($_POST['idReceiver']) ? intval($_POST['idReceiver']) : 0;

// Récupérer l'objet User correspondant à l'ID de l'utilisateur destinataire
$userReceiver = DB_Manager::readUserById($idReceiver);

// Vérifier si l'utilisateur destinataire a été correctement récupéré
if (!$userReceiver) {
    echo "Erreur lors de la récupération de l'utilisateur destinataire.";
    exit();
}

$emailReceiver = $userReceiver->getMailUser();

// Récupérer le reste des données du formulaire


$libelle = $_POST['Libelle'];
$penality = DB_Manager::readPenality($libelle);


// Vérifier que la pénalité a été correctement récupérée
if (!$penality) {
    echo "Erreur lors de la récupération de la pénalité.";
    
    exit();
}

$date = date("Y-m-d H:i:s");
$status = true; // Par défaut, vous pouvez ajuster cela en fonction de votre logique
$detail = $_POST['Detail'];

// Créer un objet Debt en utilisant les objets User et Penality récupérés
$debt = new Debt(
    null, // ou l'ID de la dette s'il est disponible, sinon null
    $userGiver,
    $userReceiver,
    $penality,
    $date,
    $status,
    $detail,
    $libelle,
 
);

require '../Composer/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Paramètres SMTP de Gmail
$smtpHost = "smtp.gmail.com";
$smtpUsername = "lorosimonpro@gmail.com";
$smtpPassword = "umtp tals sewj vixh";
$smtpPort = 587; // Utilisez le port 465 avec SSL si cela ne fonctionne pas avec le port 587

// Destinataire
$toEmail = $emailReceiver;
$subject = 'Amende';
$body = "Tu t'es pris une amende";

// Créez une instance de PHPMailer
$mail = new PHPMailer(true);

    // Paramètres SMTP
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = 'tls'; // Utilisez 'ssl' si vous utilisez le port 465 avec SSL
    $mail->Port = $smtpPort;

    // Destinataire
    $mail->setFrom($smtpUsername, 'Simon');
    $mail->addAddress($toEmail);

    // Contenu de l'e-mail
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Envoyer l'e-mail
    $mail->send();


// Enregistrer la dette dans la base de données
DB_Manager::createDebt($debt);

DB_Manager::addCptDenounce($userGiverId);

$_SESSION["debt"] = DB_Manager::readDebts();
header("Location:../V/debtHistorique.php");
?>
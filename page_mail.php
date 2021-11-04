<?php
session_start();
if(isset($_SESSION['mdp'])) {
    if ($_SESSION['mdp'] != 'ok') {
        header('Location: mdp.php');
    }
}
else{
    header('Location: mdp.php');
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";
$mail = new PHPMailer(true);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet tutoré : Mail</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/article.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/page_mail.css" rel="stylesheet">

    <?php include('css/css.php') ?>
</head>
<body>
<?php
if (isset($_SESSION['langage'])) {
    $langue = $_SESSION['langage'];
    $header = 'header/header_' . $langue . '.php';
    include($header);
} else {
    include('header/header_fr.php');
} ?>
<!--formulaire pour rentrer toutes les infos pour le mail-->
<section>
    <div class="container-fluid">
        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12 col-xs-12">
    <form action="page_mail.php" method="POST">
        <fieldset>
            <legend>Pour nous contactez par mail : / Conctact us by mail :</legend>
            <div>
                <label for="nom">Nom Prénom : / Last Name First Name : </label><br>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div>
                <label for="mail">Votre adresse mail : / Your E-mail :</label><br>
                <input type="email" name="mail" id="mail" required>
            </div>
            <div>
                <label for="objet">Objet : / Subject : </label><br>
                <input type="text" name="objet" id="objet" required>
            </div>
            <label for="body"></label><br>
            <textarea id="body" name="body" rows="5" cols="50" required></textarea>
            <input type="submit" value="envoyer" name="envoyer" id="envoyer">
        </fieldset>
    </form>
    <a href="page_principale.php">Retourner à l'acceuil</a>
        </div>
    </div>
</section>
<?php   //envoie le mail
if (isset($_POST['envoyer'])) {
    if ($_POST['envoyer'] == "envoyer") {
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "tt0849627@gmail.com";
        $mail->Password = "t3Hxax,2>|#2F|fA75QAY3>c9~caL-?X.~8qRP_yE7N52_-Wa#6dUH97n9Ab!8AtanH62KC=(svm2+6";
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->addReplyTo($_POST['mail']);
        $mail->From = "tt0849627@gmail.com";
        $mail->FromName = $_POST['nom'];
        $mail->addAddress("iut.projet.moteur@gmail.com", "TangWhite");
        $mail->isHTML(true);
        $mail->Subject = $_POST['objet'];
        $mail->Body = $_POST['body'];
        try {
            $mail->send();
            echo "<p>Le message à bien été envoyé</p>";
        } catch (Exception $e) {
            echo "<p>Nous sommes au regret de vous informer qu'une erreur à eu lieu.<br>Nous vous conseillons de vérifier vos informations ou de réessayer plus tard</p>";
        }
    }
}
?>
<?php
if (isset($_SESSION['langage'])) {
    $footer = 'footer/footer_' . $langue . '.php';
    include($footer);
} else {
    include('footer/footer_fr.php');
}
?>
</body>
</html>
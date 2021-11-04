<?php session_start();
$error = 0;
if(isset($_POST['mdp']))
{
    if($_POST['mdp'] == 'S1_B1_Gagne_Moteur')
    {
        $_SESSION['mdp'] = 'ok';        //necessaire pour ne pas etre renvoyé ici sur les autres pages
        header('Location: page_principale.php');
    }
    else{
        $error = 1;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet tutoré</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/article.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <?php include('css/css.php') ?>
</head>
<body>
<?php
if(isset($_SESSION['langage'])) {
    $langue = $_SESSION['langage'];
    $header = 'header/header_' . $langue . '.php';
    include($header);
}
else {
    include('header/header_fr.php');
}?>
<!--demande un mdp-->
<form method="post" action="mdp.php">
<label for="mdp">Bonjour, veuillez rentrer le mot de passe :</label>
<textarea id="mdp" name="mdp" rows="1" cols="20" required></textarea>
    <?php if($error == 1){
        echo 'Wrong password';
    }?>
    <input type="submit" value="envoyer" name="envoyer" id="envoyer">
</form>



</body>
</html>
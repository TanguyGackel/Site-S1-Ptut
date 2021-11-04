<?php session_start();
if(isset($_SESSION['mdp'])) {
    if ($_SESSION['mdp'] != 'ok') {
        header('Location: mdp.php');
    }
}
else{
    header('Location: mdp.php');
}
if(isset($_POST['langage']))                    //variable de session pour le langage
{
    $_SESSION['langage'] = $_POST['langage'];
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet tutoré : Paramètre</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/parametre.css" rel="stylesheet">
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
}
?>
<h2>Choisissez votre langue ainsi que le thème : / Choose your language and theme:</h2>
<form method="post" action="page_parametre.php">
    <fieldset>
        <select name="langage" id="lang">
                <option value="void" disabled selected>Choisissez une langue</option>
                <option value="fr"> Français / French</option>
                <option value="en"> English / Anglais</option>
        </select>
        <select name="color" id="color">
            <option value="void" disabled selected>Choisissez une couleur</option>
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
            <option value="pink">pink</option>
            <option value="purple">purple</option>
            <option value="dark">dark</option>
            <option value="dark_red">dark_red</option>
        </select>
        <input type="submit" value="valider" name="soumettre">
    </fieldset>
</form>
<a href="page_principale.php">Retourner à l'acceuil</a>
<?php
if(isset($_SESSION['langage'])) {
    $langue = $_SESSION['langage'];
    $footer = 'footer/footer_' . $langue . '.php';
    include($footer);
}
else {
    include('footer/footer_fr.php');
}
?>
</body>
</html>
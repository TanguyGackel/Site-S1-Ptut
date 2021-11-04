<?php session_start();
if(isset($_SESSION['mdp'])) {
    if ($_SESSION['mdp'] != 'ok') {
        header('Location: mdp.php');
    }
}
else{
    header('Location: mdp.php');
}?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet tutoré: Copyright</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/article.css" rel="stylesheet">
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
<section>
<article>
    <h2>Copyright :</h2>
    <p>Ce site web a été créé par GAGNE Maxens, AUBERT Emmanuel, GACKEL Tanguy et GROSJEAN Florian, dans le cadre du projet tuteuré
    du semestre 1 à l'IUT de Belfort, au département informatique.<br><br>
        Les images [Create a Forest in UE4 in 1 Hour by Wiktor Öhman] (page principale), [Orgrimmar Recreation Unreal Engine 4 by Wiktor Öhman]
        (Histoire et origine des moteurs de jeu) et [CS:GO map Dust II Recreation Unreal Engine 4 by Wiktor Öhman] (Histoire et origine des moteurs de jeu)
        appartiennent à Quixel, et nous les remercions de nous avoir autorisé à les utiliser.<br><br>
        Les quatres images de la page "Exemple d'un moteur de jeu, l'Unreal Engine" et "Présentation de jeux et projets avec l'Unreal Engine"
        sont des captures d'écrans faites par GACKEL Tanguy.
    </p>
</article>
<article>
    <h2>Copyright :</h2>
    <p>This website was created by GAGNE Maxens, AUBERT Emmanuel, GACKEL Tanguy and GROSJEAN Florian, in the context of the tutored project
        of semester 1 at the IUT of Belfort, in the IT department.<br><br>
        The pictures [Create a Forest in UE4 in 1 Hour by Wiktor Öhman] (main page), [Orgrimmar Recreation Unreal Engine 4 by Wiktor Öhman].
        (History of game engines) and [CS:GO map Dust II Recreation Unreal Engine 4 by Wiktor Öhman] (History of game engines)
        belong to Quixel, and we thank them for allowing us to use them.<br><br>
        The four images of the page "Example of a game engine, the Unreal Engine" and "Presentation of games and projects with the Unreal Engine".
        are screenshots made by GACKEL Tanguy.
</article>
</section>
<a href="page_principale.php">Retourner à l'acceuil</a>
<?php
if(isset($_SESSION['langage'])){
    $footer = 'footer/footer_' . $langue . '.php';
    include($footer);
}
else {
    include('footer/footer_fr.php');
}
?>
</body>
</html>
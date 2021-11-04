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
    <title>Projet tutoré : Interview</title>
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
    $article_interview = 'article/article_interview_' . $langue . '.php';
    include($article_interview);
    $nav = 'nav/nav_' . $langue . '.php';
    include($nav);
}
else {
    include('header/header_fr.php');
    include('article/article_interview_fr.php');
    include('nav/nav_fr.php');

}?>
<div class="container d-block d-md-none ">
    <div class="row">
        <div class="col-4">
            <a href="page_droit.php">Précédent / Previous</a>
        </div>
        <div class="col-4">
            <a href="page_principale.php">Retourner à l'acceuil</a>
        </div>
        <div class="col-4">

        </div>
    </div>
</div>
<?php
if(isset($_SESSION['langage'])) {
    $footer = 'footer/footer_' . $langue . '.php';
    include($footer);
}
else {
    include('footer/footer_fr.php');
}
?>
</body>
</html>
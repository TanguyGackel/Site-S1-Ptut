<?php session_start();
if(isset($_SESSION['mdp'])) {
    if ($_SESSION['mdp'] != 'ok') {
        header('Location: mdp.php');            //verifie que c'est le bon mdp
    }
}
else{
    header('Location: mdp.php');
}?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Projet tutoré</title>
<!--    tous les css nécessaire-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/article.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
<!--    php qui gère les css pour changer les couleurs-->
    <?php include('css/css.php') ?>
</head>
<body>
<?php
    if(isset($_SESSION['langage'])) {
        $langue = $_SESSION['langage'];
        $header = 'header/header_' . $langue . '.php';      //include tout ce qui est nécessaire : header, article, nav, footer
        include($header);
        $article_principale = 'article/article_principale_' . $langue . '.php';
        include($article_principale);
        $nav = 'nav/nav_' . $langue . '.php';
        include($nav);
        $footer = 'footer/footer_' . $langue . '.php';
        include($footer);
    }
    else {
        include('header/header_fr.php');
        include('article/article_principale_fr.php');       //si n'a pas trouvé de langue sélectionné
        include('nav/nav_fr.php');
        include('footer/footer_fr.php');
    }
    ?>
</body>
</html>
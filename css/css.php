<?php
if(isset($_POST['color'])){     //quand une couleur viens d'etre choisis dans les paramètres
        $_SESSION['color'] = $_POST['color']; //definit la couleur pour toutes les pages
}
if(isset($_SESSION['color'])) {
    if ($_SESSION['color'] == 'purple') {   //couleur de base
    } else {
        $couleur = 'css/color/' . $_SESSION['color'] . '.css';
        echo '<link href="' . $couleur . '" rel="stylesheet">'; //appelle le css
    }
}
<?php
session_start();
require './admin/lib/php/admin_liste_include.php';
?>

<!doctype html>
<html>

<head>
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./lib/css/style.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<header class="image_header"><br>

</header>

<section id="container">
    <?php
    if(file_exists('./lib/php/menu_public.php')) {
        include ('./lib/php/menu_public.php');
    }
    ?>

</section>

<br><br>

<section id="contenu">
    <div id="main">
        <?php

        if(!isset($_SESSION['pages'])){ //on vient d'arriver sur le site
            $_SESSION['pages']="accueil.php";
        }
        if(isset($_GET['pages'])) {
            $_SESSION ['pages'] = $_GET['pages'];
        }
        $path = './pages/'.$_SESSION['pages'];
        if(file_exists($path)){
            include $path;
        } else {
            //include ('./pages/page404.php');
        }
        ?>
    </div>
</section>

<footer>

</footer>
</body>
</html>
<?php
//nous sommes dans index admin
if(file_exists('./lib/php/pgConnect.php')){
    require 'lib/php/pqConnect.php';
    require 'lib/php/class/Autoloader.class.php';
    AutoLoader::register();
    $cnx = Connexion::getInstance($dsn,$user,$password);

}else{
    if(file_exists('./admin/lib/php/pgConnect.php')){
        require 'admin/lib/php/pgConnect.php';
        require 'admin/lib/php/class/Autoloader.class.php';
        AutoLoader::register();
        $cnx = Connexion::getInstance($dsn,$user,$password);
    }
}


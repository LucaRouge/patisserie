<?php
class AutoLoader{
    //Fonction qui appelle la methode de chargement automatique des classes
    static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));

    }
    //methode appelée par register()
    static function autoload($classname){
        require $classname.".class.php";
    }
}
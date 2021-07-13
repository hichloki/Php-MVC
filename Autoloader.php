<?php

namespace App;

class Autoloader
{
    static function register()
    {
        //a chaque fois que use ou new est utilisé on appelle la fonction autoload
        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class)
    {
        // On récupère dans $class la totalité du namespace de la classe concernée (App\Client\Compte)
        // On retire App\ (Client\Compte)
        //le but de cette méthode est d'inclure le fichier correspondant à la classe ex: via l instruction use Model\Utilisateur cette instruction sera appelée : 
        //require_once (./Model/Utilisateur.php)

        //si jamais il y a un nom de domaine avant les 2 \\ on les remplace par "" -> du vide, car il est superflu pour le chemin du domaine
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        // On remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        //on récupère le chemin a la racine de autoloader. __DIR__ contient l'arborescence du fichier Autoloader.php
        $fichier = __DIR__ . '/' . $class . '.php';
        // On vérifie si le fichier existe
        if (file_exists($fichier)) {
            require_once $fichier;
        }
    }
}

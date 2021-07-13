<?php

class Connexion extends PDO
{
    public function __construct()
    {
        parent::__construct("mysql:dbname=backFranck;host=localhost","root","");
    }
}

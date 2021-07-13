<?php

namespace Model;
//On stocke uniquement dans model les class qui stocke des infos/données.

class Client extends Utilisateur
{
    private $numero;


    public function __construct($prenom, $nom, $numero, $id = null)
    {
        /*$this->prenom = $prenom;
        $this->nom = $nom;*/
        parent::__construct($prenom, $nom, $id);
        $this->numero = $numero;
    }



    public function code()
    {
        return $this->nom . $this->numero;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     *
     * @return  self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
}

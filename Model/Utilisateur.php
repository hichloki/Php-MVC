<?php

namespace Model;

class Utilisateur
{
    protected $id;
    protected $prenom;
    protected $nom;

    public function __construct($prenom = "", $nom = "", $id = null)
    {
        
        $this->prenom = $prenom;
        $this->nom = strtoupper($nom);
        $this->id = $id;
    }

    public function nomComplet()
    {
        return $this->getNom() . " " . $this->prenom;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return strtoupper($this->nom);
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

<?php

namespace Controller;

use Connexion;
use dao\ProduitDao;
use dao\UtilisateurDao;
use Model\Utilisateur;
use Model\Client;

class AccueilController extends BaseController
{

    //url : localhost/.../accueil/index ou localhost/.../accueil
    public function index()
    {
       /* $connexion = new Connexion();

        $resultat = $connexion->query("SELECT * FROM utilisateur");

        $listeUtilisateur = $resultat->fetchAll();

        var_dump($listeUtilisateur);*/

      /*  $dao = new UtilisateurDao();
        
        $listeUtilisateur = $dao->findAll();*/

       // $listeUtilisateur[0]->nomComplet();

    

        $dao = new ProduitDao();
        
        $listeProduit = $dao->findAll();

        $dao = new UtilisateurDao();

        $listeUtilisateur = $dao->findAll();

        $donnees = compact('listeProduit','listeUtilisateur');/* -> équivaut à :

        $donnees = [
            'listeProduit' =>$listeProduit,
            'listeUtilisateur' => $listeUtilisateur
        ];*/

        echo $donnees['listeProduit'][1]->getNom();

        $this->afficherVue('index', $donnees);

       /* echo "<ul>";
       foreach($listeProduit as $produit)
       {
           echo "<li>".$produit->getNom() . "</li>";
       }

       echo "</ul>";*/
       $this->afficherVue();




        /*$utilisateur = new Utilisateur("franck", "bansept", "1236");
        echo $utilisateur->nomComplet();*/

        $client = new Client("franck", "bansept", "1236");
        echo $client->code();

        $this->afficherVue();
    }

    public function nonTrouve()
    {
        $this->afficherVue("404");

        //$this correspond a l'objet qui l'a appelé
    }
}

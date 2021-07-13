<?php
namespace dao;
use Connexion;


class BaseDao {
    
    public function findAll()
    {
        $connexion = new Connexion();
        //ex si la classe s appelle "dao\UtilisateurDao, $table contiendra "utilisateur"

        $table = strtolower(substr(get_class($this), 4, -3));



        $resultat = $connexion->query("SELECT * FROM ". $table);

        $listeUtilisateur = [];

        $nomClasseModel = "Model\\" .ucfirst($table);

        //ucfirst veux dire on passe la première lettre en majuscule

        //Pour chaque ligne de la table

        foreach($resultat->fetchAll() as $ligneResultat) {

            //on crée une instance (objet crée grâce a une classe) de la classe(ex: new Utilisateur())
            $model = new $nomClasseModel();

            //Pour chaque index du tableau $ligneResultat(cad chaque cologne)

            foreach ($ligneResultat as $key => $valeur) {

            //echo $key. "->". $valeur." - ";
            //echo "set" . ucfirst($key). "(" . $valeur . ")";


            //On en déduit le setter(ex: setPrenom)
                $nomSetter = "set" . ucfirst($key);

                //ucfirst -> première lettre en majuscule


                //si le setter existe bien (pour éviter les colonnes numeroté)
                //le tableau de fetchAll nous retourne id, prenom, nom mais aussi 0,1,2 on ontrouvera pour 0 la valeur de l id pour le 1 la valeur du nom ...
                if(method_exists($nomClasseModel, $nomSetter)) {

                    //on appelle le setter avec la valeur en paramètre ex: setPrenom("franck")
                    $model->$nomSetter($valeur);
                }
               
                
            }
            $listeUtilisateur[] = $model;

          /*  $listeUtilisateur[] = new Utilisateur(
                $ligneResultat["nom"],
                $ligneResultat["prenom"],
                $ligneResultat["id"]
            );*/
        }

        return $listeUtilisateur;


}
}
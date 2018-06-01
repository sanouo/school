<?php


class ManagerStudent{

  protected $bdd;

  public function __construct($bdd)
  {
    $this->setBdd($bdd);
  }
  // setters for bdd
  public function setBdd(PDO $bdd)
  {
    $this->bdd = $bdd;
  }



public function donneesstudent($product)
// $refproduit : recuperer un objet a partir de $product
    {
      $req = $this->bdd->prepare('SELECT  name, firstname
         FROM student WHERE refproduit = :product');
      $req->bindValue(':product', $product , PDO::PARAM_INT);
      $req->execute();
      $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
     //  $reponse = $bdd->query("SELECT refproduit, idcommande, transporteur, `statut commande`, `date commande`, `quantite produit`, `Nom produit`
 		 // FROM v_commande WHERE refproduit = $reference ");
 		 // $donnees = $reponse->fetch();
      foreach ($donnees as $key => $value)
      {
        $donnees[$key] = new Student($value);

      }
      return $donnees;

    }




}

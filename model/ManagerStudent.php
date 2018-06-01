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



// public function donneesstudent()
//
//  {
//
//    $nom = $_SESSION['user'];
//
//
//    $q = $this->bdd->prepare('SELECT id, name, firstname, age, address FROM student WHERE name = '.$nom);
//
//    $donnees = $q->fetch(PDO::FETCH_ASSOC);
//
//
//    return new Student($donnees);
//
//  }
// Execute a SELECT request database
    public function etudiant()
    {
         $nom = $_SESSION["user"];

      $req = $this->bdd->prepare('SELECT * FROM student where name = "'.$nom.'"');
      $req->execute();
      $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
      foreach ($donnees as $key => $value) {
      $donnees[$key] = new Student($value);
     }
      return $donnees;
    }



}

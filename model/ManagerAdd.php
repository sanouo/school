<?php


class ManagerAdd{

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


public function addStudent($namestudent)
// $refproduit : recuperer un objet a partir de $refprduit
    {
      $req = $this->bdd->prepare('SELECT * FROM student WHERE name = :namestudent');
      $req->bindValue(':namestudent', $namestudent , PDO::PARAM_INT);
      $req->execute();
      $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
      foreach ($donnees as $key => $value)
      {
        $donnees[$key] = new Student($value);


      }
      return $donnees;

    }



    public function addStudentLogin()
    // $refproduit : recuperer un objet a partir de $refprduit
        {
          $q = $this->bdd->prepare('INSERT INTO login(user, city)');
 $q->bindValue(':name', $book->getName());
 $q->bindValue(':city', $book->getCity());
 $q->execute();

        }


}
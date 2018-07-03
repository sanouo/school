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




public function all()
{


  $req = $this->bdd->prepare('SELECT * FROM student ');
  $req->execute();
  $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
  foreach ($donnees as $key => $value) {
  $donnees[$key] = new Student($value);
 }
  return $donnees;
}

// test function avec pagination
public function allstudent()
{

  if(isset($_GET['page'])){
    $page = $_GET['page'];

  }

  else {
    $page = 1;

  }
  $start = ($page - 1) * 5;

$req = $this->bdd->prepare(" SELECT name, firstname,
    section
   FROM student

   order by name
   limit  5
   offset $start
   ");
   $req->execute(array(
   'start' => $start,
     ));
   // $resultat = $req->fetch();
 }
// fin test


}

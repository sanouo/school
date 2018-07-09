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



    public function addStudentLogin($test)
    // $refproduit : recuperer un objet a partir de $refprduit
        {

  $q = $this->bdd->prepare('INSERT INTO student(name, firstname, age, phone, email, address, city, section, study, mathematical, french, history, english, physical, observation)
  VALUES(:name, :firstname, :age, :phone, :email, :address, :city, :section, :study, :mathematical, :french, :history, :english, :physical, :observation)');
  $q->bindValue(':name', $test->getName());
  $q->bindValue(':firstname', $test->getFirstname());
  $q->bindValue(':age', $test->getAge());
  $q->bindValue(':phone', $test->getPhone());
  $q->bindValue(':email', $test->getEmail());
  $q->bindValue(':address', $test->getAddress());
  $q->bindValue(':city', $test->getCity());
  $q->bindValue(':section', $test->getSection());
  $q->bindValue(':study', $test->getStudy());
  $q->bindValue(':mathematical', $test->getMathematical());
  $q->bindValue(':french', $test->getFrench());
  $q->bindValue(':history', $test->getHistory());
  $q->bindValue(':english', $test->getEnglish());
  $q->bindValue(':physical', $test->getPhysical());
  $q->bindValue(':observation', $test->getObservation());
  $q->execute();
}



public function addconnect($essai)
// $refproduit : recuperer un objet a partir de $refprduit
    {

      

$q = $this->bdd->prepare('INSERT INTO login(user, pass, city)
VALUES(:user, :pass, :city)');
$q->bindValue(':user', $essai->getUser());
$q->bindValue(':pass', $essai->getPassword());
$q->bindValue(':city', $essai->getBirthcity());
$q->execute();
}


}

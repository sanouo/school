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



// Execute a SELECT request in database where id
 public function gettest()
 {
   if(isset($_GET['id'])){
   // $id = (int) $id;
   $id = $_GET['id'];
   $q = $this->bdd->query('SELECT * FROM student WHERE id = '.$id);
   $donnees = $q->fetch(PDO::FETCH_ASSOC);
   return new Student($donnees);
  //  $id = (int) $id;
  //  $req = $this->bdd->prepare('SELECT * FROM student WHERE id = '.$id);
  //  $req->execute();
  //  $donnees = $req->fetchAll(PDO::FETCH_ASSOC);
  //  foreach ($donnees as $key => $value) {
  //  $donnees[$key] = new ManagerStudent($value);
  // }
  //  return $donnees;
  // echo $_GET['id'];

}
 }

 public function removeaccount()
 {
if(isset($_GET['remove'])){

 $remove = $_GET['remove'];
 $req = $this->bdd->exec('DELETE FROM student WHERE id = '.$remove);

   // header('Location: homeadmin.php');

}
}

public function removelogin()
{
if(isset($_GET['removelog'])){

$removelog = $_GET['removelog'];
$req = $this->bdd->exec('DELETE FROM login WHERE = '.$removelog);

}
}



// Execute a UPDATE request database
  public function getUpdate($update)
    {
      $id = $_GET['id'];

      $q=$this->bdd->prepare('UPDATE student SET observation = :observation WHERE id = '.$id);
      // $q->bindValue(':id', $update->getId());
      $q->bindValue(':observation', $update->getObservation());
      $q->execute();
     }

     public function getUpdateNote($update)
       {
         $id = $_GET['id'];

         $q=$this->bdd->prepare('UPDATE student SET mathematical = :mathematical , french = :french ,history = :history ,english = :english , physical = :physical  WHERE id = '.$id);
         // $q->bindValue(':id', $update->getId());
         $q->bindValue(':mathematical', $update->getMathematical());
         $q->bindValue(':french', $update->getFrench());
         $q->bindValue(':history', $update->getHistory());
         $q->bindValue(':english', $update->getEnglish());
         $q->bindValue(':physical', $update->getPhysical());

         $q->execute();
        }

        public function getUpdatestatus($update)
          {
            $id = $_GET['id'];

            $q=$this->bdd->prepare('UPDATE student SET phone = :phone , email = :email , address = :address , city = :city  WHERE id = '.$id);
            // $q->bindValue(':id', $update->getId());
            $q->bindValue(':phone', $update->getPhone());
            $q->bindValue(':email', $update->getEmail());
            $q->bindValue(':address', $update->getAddress());
            $q->bindValue(':city', $update->getCity());

            $q->execute();
           }

           public function getUpdatestatus2($update)
             {
               $id = $_GET['id'];

               $q=$this->bdd->prepare('UPDATE student SET name = :name , firstname = :firstname , age = :age , section = :section, study = :study  WHERE id = '.$id);
               // $q->bindValue(':id', $update->getId());
               $q->bindValue(':name', $update->getName());
               $q->bindValue(':firstname', $update->getFirstname());
               $q->bindValue(':age', $update->getAge());
               $q->bindValue(':section', $update->getSection());
               $q->bindValue(':study', $update->getStudy());

               $q->execute();
              }

}

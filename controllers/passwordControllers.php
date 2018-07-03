<?php
  require("model/calldatabase.php");

// CONDITION FOR UPDATE PASSWORD
  if(!empty($_POST['user']) AND !empty($_POST['pass']) AND !empty($_POST['city'])){


    $req = $bdd->prepare('SELECT * FROM login WHERE user = :user AND city = :city');
    $req->execute(array(
    'user' => $_POST['user'],
    'city' => md5($_POST['city'])
      ));
    $resultat = $req->fetch();



    if ($_POST['user'] != $resultat['user'] or md5($_POST['city']) != $resultat['city'])
    {
    $message = "user or the city of birth does not match";
    }


  else {
    $user = $_POST['user'];
    $req=$bdd->prepare("UPDATE login SET pass = :pass WHERE user = '".$user."' ");
    $req->execute(array(
    'pass'=> md5($_POST['pass'])
    ));
  header('location: changepass.php');
  }

}
// END CONDITION FOR UPDATE PASSWORD

require("views/passwordView.php");

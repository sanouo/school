<?php

session_start ();

$_SESSION['connect']=0;

require("model/calldatabase.php");


      // CONDITION OF VERIFICATION CORRECT CONNECTION DATA


        if((!empty($_POST['user'])) AND (!empty($_POST['pass'])))
        {

        // create password hache
        $pass_hache = md5($_POST['pass']);

        $req = $bdd->prepare('SELECT * FROM login WHERE user = :user AND pass = :pass');
        $req->execute(array(
        'user' => $_POST['user'],
        'pass' => $pass_hache
          ));
        $resultat = $req->fetch();




        if ($_POST['user'] != $resultat['user'] or $pass_hache != $resultat['pass'] )
        {
          $message = "Error user or password!";
        }

        else
        {
          $_SESSION['user'] = $_POST['user'];
          $_SESSION['connect']=1;
          header('location:startsession.php');
        }

        }
       // END CONDITION OF VERIFICATION CORRECT CONNECTION DATA


require("views/indexView.php");

<?php
session_start();



require("model/calldatabase.php");
require("model/ManagerSearch.php");
// load all class
function loadClass($class)
{
  require("entities/" . $class . ".php");

}
spl_autoload_register("loadClass");


// create instanciation object $manager
$manager = new ManagerSearch($bdd);

if (empty($_POST['namestudent'])) {
   $message = "You have not entered anything !";
 }

else{

        	if (isset($_POST['namestudent'])){

            $donnees = $manager->searchstudent($_POST['namestudent']);

        			if(!empty($donnees) == false){
                $message = "The name does not correspond to any student !";

        			}
        			else{

                  $_SESSION['namestudent']= $_POST['namestudent'];

        			    }

        		} }


        if ($_SESSION['connect'] == 1) {
          require("views/searchView.php");
        }

        else {
           header("location:warning.php");
        }

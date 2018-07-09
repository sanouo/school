<?php
session_start();

require("model/calldatabase.php");
require("model/ManagerAdd.php");

// load all class
function loadClass($class)
{
require("entities/" . $class . ".php");

}
spl_autoload_register("loadClass");


// create instanciation object $manager
$manager = new ManagerAdd($bdd);


// $donnees= $manager->addStudent();

if (isset($_POST['createaccount'])) {

$donnees = new Student($_POST);

$manager->addconnect($donnees);

header('location:homeadmin.php');


}








if ($_SESSION['connect'] == 1) {

require("views/addloginView.php");
}

else {
 header("location:warning.php");
}

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
// $donnees= $manager->addStudentLogin();







if ($_SESSION['connect'] == 1) {

require("views/addView.php");
}

else {
 header("location:warning.php");
}

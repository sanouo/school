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

if (isset($_POST['newstudent'])) {

  $donnees = new Student($_POST);

$manager->addStudentLogin($donnees);

$_SESSION['newuser'] = $_POST['name'];

header('location:addlogin.php');


}








if ($_SESSION['connect'] == 1) {

require("views/addView.php");
}

else {
 header("location:warning.php");
}

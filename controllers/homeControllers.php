<?php
session_start();



require("model/calldatabase.php");
require("model/ManagerStudent.php");
// load all class
function loadClass($class)
{
require("entities/" . $class . ".php");

}
spl_autoload_register("loadClass");


// create instanciation object $manager
$manager = new ManagerStudent($bdd);

$donnees = $manager->donneesstudent($_POST['product']);






// if ($_SESSION['connect'] == 1) {

require("views/homeView.php");
// }

// else {
//  header("location:warning.php");
// }

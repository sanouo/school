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
// test
$manager = new ManagerStudent($bdd);

$donnees= $manager->gettest();


// $donnees= $manager->gettest();
// call function get for select elements where id
// $detail = $manager->gettest($_GET['id']);
// fin test



// if(isset($_GET['page'])){
//   $page = $_GET['page'];
//
// }
//
// else {
//   $page = 1;
//
// }
// $start = ($page - 1) * 5;


// test
    // $req = $bdd->prepare(" SELECT name, firstname,
    //     section
    //    FROM student
    //
    //    order by name
    //    limit  5
    //    offset $start
    //    ");
    //    $req->execute(array(
    //    'start' => $start,
    //      ));
    // fin test
    //    // $resultat = $req->fetch();




if ($_SESSION['connect'] == 1) {

require("views/descriptionView.php");
}

else {
 header("location:warning.php");
}

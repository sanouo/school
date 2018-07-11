<?php
ini_set('display_errors','off');
// pur redirect fonctionne


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

  $donnees= $manager->removeaccount();

  // header('Location: homeadmin.php');

      ?>

      <script type="text/JavaScript">
              window.location = 'homeadmin.php';
       </script>

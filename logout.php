<?php
ini_set('display_errors','off');
// pur redirect fonctionne

 ?>
<script type="text/JavaScript">



if (confirm("Are you sure to disconnect ?") ==  true) {

  <?php
  session_start();
  $_SESSION = array();
  session_destroy ();
  ?>

     alert("Goodbye");
     window.location = 'index.php';

    }

else {
      window.location = 'home.php';

    }

</script>

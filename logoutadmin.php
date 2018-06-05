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
     window.location = 'admin.php';

    }

else {
      window.location = 'homeadmin.php';

    }

</script>

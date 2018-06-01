<?php

session_start ();

?>

       <script type="text/JavaScript">
               alert("<?php echo "Hello"."  ".$_SESSION["user"]; ?>");
               window.location = 'homeadmin.php';
        </script>

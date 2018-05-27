<?php
  require("template/header.php");
 ?>



 <div class="all" style="min-height:92vh;">
 <!-- start of the header -->
         <header>
           <h1>Follow-School</h1>
         </header>
 <!-- end of the headear -->


 <div class="registre">
 <a href="index.php" class="linkRedirect btn btn-primary">Back</a>
 </div>


 <!-- start of the formulaire -->
         <form class="connect connectadmin" action="" method="post">
             <img class="account" src="assets/img/logo.png" alt="icon account">
             <input type="text" name="user" placeholder="user">
             <input  type="password" name="pass" placeholder="password">
             <input class="buttonConnect buttonConnectAdmin" type="submit" name="update" value="connection">
         </form>
<!-- end of the formulaire -->

<p style="margin-left: 31%;color:#FF5545;"><?php if (isset($message)) {
  echo $message;
}  ?>
</p>

</div>



 <?php
   require("template/footer.php");

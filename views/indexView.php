<?php
  require("template/header.php")
 ?>


 <div class="all" style="min-height:95vh;">


  <!-- start of the header -->
          <header>
            <h1>Follow-School</h1>
          </header>
  <!-- end of the headear -->

  <div class="registre">
  <a href="admin.php" class="linkRedirect btn btn-primary">Admin</a>
  </div>

   <!-- start of the formulaire -->
           <form class="connect" action="" method="post">
               <img class="account" src="assets/img/account.png" alt="icon account">
               <input type="text" name="user" placeholder="user">
               <input  type="password" name="pass" placeholder="password">
               <input class="buttonConnect" type="submit" name="connection" value="connection">
               <p style="margin-left: 18%; margin-top: 2em; color:#FF5545;"><?php if (isset($message)) { echo $message; } ?></p>
           </form>
   <!-- end of the formulaire -->



   <!-- link redirect page password -->
           <a href="password.php" class="mdp" >Forgot password ?</a>

 </div>

 <?php
   require("template/footer.php")
  ?>

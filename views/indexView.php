<?php
  require("template/header.php")
 ?>


 <div class="all" style="min-height:95vh;">


  <!-- start of the header -->
          <header>
            <h1>مرحبا بكم</h1>
          </header>
  <!-- end of the headear -->


   <!-- start of the formulaire -->
           <form class="connect" action="" method="post">
               <img class="account" src="assets/img/account.png" alt="icon account">
               <input type="text" name="user" placeholder="user">
               <input  type="password" name="pass" placeholder="password">
               <input class="buttonConnect" type="submit" name="connexion" value="connexion">
               <p style="margin-left: 18%; margin-top: 2em; color:#FF5545;"><?php if (isset($message)) { echo $message; } ?></p>
           </form>
   <!-- end of the formulaire -->



   <!-- link redirect page password -->
           <a href="password.php" class="mdp" >Mot de passe oublie ?</a>

 </div>

 <?php
   require("template/footer.php")
  ?>

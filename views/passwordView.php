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
         <form class="connect" action="" method="post">
             <img class="account" src="assets/img/account.png" alt="icon account">
             <input type="text" name="user" placeholder="user">
             <input type="password" name="city" placeholder="birth city">
             <input  type="password" name="pass" placeholder="new password">
             <input class="buttonConnect" type="submit" name="update" value="update">
         </form>
<!-- end of the formulaire -->

<p style="margin-left: 31%;color:#FF5545;"><?php if (isset($message)) {
  echo $message;
}  ?>
</p>

</div>

 <?php
   require("template/footer.php");

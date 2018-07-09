<?php

  require("template/header.php");
 ?>


 <div class="all" style="min-height:92vh;">

   <?php
     require("template/nav.php");
   ?>

 <!-- <div class="registre">
   <a href="homeadmin.php" class="linkRedirect btn btn-primary">Back</a>
 </div> -->





<!-- Default form contact -->
<form class="formadd" action="" method="post">
    <p class="h4 text-center mb-4">Create an account</p>

    <!-- Default input name -->
    <label for="defaultFormContactNameEx" class="grey-text">Name</label>
    <input type="text" id="defaultFormContactNameEx" name="user" class="form-control" value="<?php echo $_SESSION['newuser'] ?>">

    <br>

    <!-- Default input email -->
    <label for="defaultFormContactEmailEx" class="grey-text">Password</label>
    <input type="password" id="defaultFormContactNameEx" name="password" class="form-control">

    <br>

    <!-- Default input subject -->
    <label for="defaultFormContactSubjectEx" class="grey-text">Confirm Password</label>
    <input type="password" id="defaultFormContactNameEx" name="confirmpass" class="form-control">

    <br>

    <!-- Default input subject -->
    <label for="defaultFormContactSubjectEx" class="grey-text">Birth City</label>
    <input type="text" id="defaultFormContactSubjectEx" name="birthcity" class="form-control">

    <div class="text-center mt-4">
        <button class="btn btn-outline-warning" type="submit" name="createaccount">Create<i class="material-icons">reply</i></button>
    </div>
</form>
<!-- Default form contact -->


    <?php
    require("template/footer.php");

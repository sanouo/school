<?php

  require("template/header.php");
 ?>


 <div class="all" style="min-height:92vh;">

   <?php
     require("template/nav.php");
   ?>

 <div class="registre">
   <a href="homeadmin.php" class="linkRedirect btn btn-primary">Back</a>
 </div>








<!-- Default form contact -->
<form class="formadd" action="" method="post">
  <!--Header-->
            <div class="modal-header primary-color white-text card">
                <h4 class="title">
                  <i class="material-icons">assignment</i>   Add-Student</h4>
            </div>





   <!--  input  -->
   <label for="defaultFormContactNameEx" class="grey-text">Name</label>
   <input type="text" name="name" id="defaultFormContactNameEx" class="form-control">

   <br>

   <!-- input -->
   <label for="defaultFormContactEmailEx" class="grey-text">First Name</label>
   <input type="text" name="firstname" id="defaultFormContactEmailEx" class="form-control">

   <br>

<!-- pour page creer login -->
   <!-- input -->
   <!-- <label for="defaultFormContactEmailEx" class="grey-text">Password</label>
   <input type="password" name="password" id="defaultFormContactEmailEx" class="form-control">

   <br> -->

   <!-- input -->
   <!-- <label for="defaultFormContactEmailEx" class="grey-text">Confirm Password</label>
   <input type="password" name="confirmpassword" id="defaultFormContactEmailEx" class="form-control">

   <br> -->

   <!-- input -->
   <!-- <label for="defaultFormContactEmailEx" class="grey-text">Birth city</label>
   <input type="password" name="birthcity" id="defaultFormContactEmailEx" class="form-control">

   <br> -->
   <!-- ///////////////////////////////////// -->

   <!-- input -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Age</label>
   <input type="number" name="age" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Phone</label>
   <input type="number" name="phone" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">E-mail</label>
   <input type="text" name="email" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Address</label>
   <input type="text" name="address" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">City</label>
   <input type="text" name="city" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Section</label>
   <input type="text" name="section" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Other</label>
   <input type="text" name="other" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Mathematical</label>
   <input type="number" name="mathematical" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">French</label>
   <input type="number" name="french" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">History</label>
   <input type="number" name="history" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">English</label>
   <input type="number" name="english" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  input  -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Physical</label>
   <input type="number" name="physical" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!--  textarea  -->
   <label for="defaultFormContactMessageEx" class="grey-text">Observation</label>
   <textarea type="text" name="observation" id="defaultFormContactMessageEx" class="form-control" rows="5"></textarea>

   <div class="text-center mt-4">
       <button class="btn btn-outline-warning" name="newstudent" type="submit">Send  <i class="material-icons">reply</i></button>
   </div>



</form>
<!-- Default form contact -->






    <?php
    require("template/footer.php");

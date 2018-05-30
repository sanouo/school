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
<form class="formadd">
  <!--Header-->
            <div class="modal-header primary-color white-text card">
                <h4 class="title">
                  <i class="material-icons">assignment</i>   Add-Student</h4>
            </div>





   <!-- Default input name -->
   <label for="defaultFormContactNameEx" class="grey-text">Name</label>
   <input type="text" id="defaultFormContactNameEx" class="form-control">

   <br>

   <!-- Default input email -->
   <label for="defaultFormContactEmailEx" class="grey-text">First Name</label>
   <input type="email" id="defaultFormContactEmailEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Age</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Phone</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">E-mail</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Address</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">City</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Section</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Other</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Mathematical</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">French</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">History</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">English</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Physical</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default textarea message -->
   <label for="defaultFormContactMessageEx" class="grey-text">Observation</label>
   <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>

   <div class="text-center mt-4">
       <button class="btn btn-outline-warning" type="submit">Send  <i class="material-icons">reply</i></button>
   </div>



</form>
<!-- Default form contact -->






    <?php
    require("template/footer.php");

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
<form style="margin-top:4em; width:80%;">
  <!--Header-->
            <div class="modal-header primary-color white-text card" style="background-color:#f0ad4e;width:60%;margin-left:20%;">
                <h4 class="title">
                  <i class="material-icons">assignment</i>   Add Student</h4>
            </div>




   <!-- Default input name -->
   <label for="defaultFormContactNameEx" class="grey-text">Your name</label>
   <input type="text" id="defaultFormContactNameEx" class="form-control">

   <br>

   <!-- Default input email -->
   <label for="defaultFormContactEmailEx" class="grey-text">Your email</label>
   <input type="email" id="defaultFormContactEmailEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default input subject -->
   <label for="defaultFormContactSubjectEx" class="grey-text">Subject</label>
   <input type="text" id="defaultFormContactSubjectEx" class="form-control">

   <br>

   <!-- Default textarea message -->
   <label for="defaultFormContactMessageEx" class="grey-text">Your message</label>
   <textarea type="text" id="defaultFormContactMessageEx" class="form-control" rows="3"></textarea>

   <div class="text-center mt-4">
       <button class="btn btn-outline-warning" type="submit">Send  <i class="material-icons">reply</i></button>
   </div>



</form>
<!-- Default form contact -->






    <?php
    require("template/footer.php");

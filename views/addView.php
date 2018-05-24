<?php

  require("template/header.php");
 ?>


 <div class="all" style="min-height:92vh;">

   <?php
     require("template/nav.php");
   ?>

 <div class="registre">
   <a href="home.php" class="linkRedirect btn btn-primary">Back</a>
 </div>







  <!-- start of the formulaire -->
  <form class="formpiece" action="" method="post">

    <div class="instruction">
      <h4>Information Civil:</h4>
    </div>


   <div class="form-group">
     <label for="formGroupExampleInput">nom</label>
     <input type="text" class="form-control" style="border:none; border-bottom:2px solid black;"name="product" id="formGroupExampleInput">
   </div>
   <div class="form-group">
     <label for="formGroupExampleInput2">prenom</label>
     <input type="text" class="form-control"  name="order" id="formGroupExampleInput2">
   </div>
   <div class="form-group">
     <label for="formGroupExampleInput2">section</label>
     <input type="text" class="form-control"  name="order" id="formGroupExampleInput2">
   </div>
   <div class="form-group">
     <label for="formGroupExampleInput2">telephone</label>
     <input type="text" class="form-control"  name="order" id="formGroupExampleInput2">
   </div>


   <div class="instruction">
     <h4>note:</h4>
   </div>


  <div class="form-group">
    <label for="formGroupExampleInput">fr</label>
    <input type="text" class="form-control" style="border:none; border-bottom:2px solid black;"name="product" id="formGroupExampleInput">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">phy</label>
    <input type="text" class="form-control"  name="order" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">math</label>
    <input type="text" class="form-control"  name="order" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">anglais</label>
    <input type="text" class="form-control"  name="order" id="formGroupExampleInput2">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">eps</label>
    <input type="text" class="form-control"  name="order" id="formGroupExampleInput2">
  </div>


  <div class="instruction">
    <h4>Observations:</h4>
  </div>

  <div class="md-form">
      <textarea type="text" id="textareaBasic" class="form-control md-textarea" rows="3"></textarea>
      <label for="textareaBasic"></label>
  </div>



   <button type="submit" class="buttonpiece btn btn-primary mb-2">Search</button>
  </form>
  <!-- end of the formulaire -->
  <p style="color:red; margin-left:5%; font-size:12px;">  <?php if (isset($message)) {
   echo $message; } ?>  </p>






    <?php
    require("template/footer.php");

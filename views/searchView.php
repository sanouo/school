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

<!-- start of the formulaire -->
<form class="formstudent" action="" method="post">
 <div class="form-group">
   <input type="text" class="form-control" name="namestudent" id="formGroupExampleInput" placeholder="Enter the name of student">
 </div>
 <button type="submit" class="buttonstudent btn btn-primary mb-2">Submit</button>
</form>
<!-- end of the formulaire -->
 <p style="color:red; margin-left:5%; font-size:12px;">  <?php if (isset($message)) {
   echo $message;
 }  ?>  </p>


<table class='table table-inverse table-responsive array tableau'>
  <thead>
    <tr>
      <th style="color:#B22222;">Name</th>
      <th>First Name</th>
      <th>Section</th>
      <th>Profile</th>
    </tr>
  </thead>

  <tbody>
  <tr>
    <td style="color:#B22222;">teranga</td>
    <td>senegal</td>
    <td>lycee</td>
    <td><a class="plus" href="description.php"><i class="material-icons">add_circle</i></a></td>
  </tr>
</tbody>

   </table>

 </div>


   <?php

   require("template/footer.php");

   ?>

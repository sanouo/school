<?php

require("template/header.php");
?>

<div class="all" style="min-height:92vh;">

<?php
  require("template/nav.php");

ini_set('display_errors','off');  // pour cacher warning.
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


 <table class="table table-dark tableau" style="background-color:#292b2c;color:white;">
   <thead>
     <tr>
       <th scope="col" style="color:#B22222;">Name</th>
       <th scope="col">FirstName</th>
       <!-- <th class="catergorysection" scope="col">Section</th> -->
       <th class="catergoryage" scope="col">Age</th>
       <th scope="col">Profile</th>
     </tr>
   </thead>
   <?php foreach ($donnees as $key => $value)
   {
     ?>
   <tbody>
     <tr>
       <th scope="row" style="color:#B22222;"><?php echo $value->getName(); ?></th>
       <td><?php echo $value->getFirstname(); ?></td>
       <!-- <td class="catergorysection"><?php echo $value->getSection(); ?></td> -->
       <td class="catergoryage"><?php echo $value->getAge(); ?></td>
       <td><a class="plus" href="description.php"><i class="material-icons">add_circle</i></a></td>
     </tr>
   </tbody>
   <?php
  }
  ?>
 </table>

 </div>

   <?php
   require("template/footer.php");
   ?>

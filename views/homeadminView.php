<?php
   require("template/header.php");
?>

<div class="all" style="min-height:92vh;">

<?php
   require("template/nav.php");
?>



   <!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="homeadmin.php?page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="homeadmin.php?page=2">2</a></li>
    </li>
  </ul>
</nav> -->


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


   <div class="consultation">
    <a href="search.php" class="box card text-white">Search student</a>
    <a href="add.php" class="box card text-white" >Add student</a>
   </div>


</div>

<?php
   require("template/footer.php");
?>

<?php
   require("template/header.php");
?>

 <div class="all" style="min-height:92vh;">

<?php
   require("template/nav.php");
?>


<table class='table table-inverse table-responsive array tableau'>
  <thead>
    <tr>
      <th style="color:#B22222;">Name</th>
      <th>First Name</th>
      <th>Section</th>
      <th>Profile</th>
    </tr>
  </thead>

<!-- test -->

  <!-- while ($donnees = $req->fetch())
     { -->

       <!-- fin test  -->
       <?php foreach ($donnees as $key => $value)
       {
         ?>

       <tbody>
         <tr>
           <td style="color:#B22222;"><?php echo $value->getName(); ?></td>
           <td><?php echo $value->getFirstname(); ?></td>
           <td><?php echo $value->getSection(); ?></td>
           <td><a class="plus" href="description.php"><i class="material-icons">add_circle</i></a></td>

         </tr>
       </tbody>

   <?php
  }
  ?>

   </table>

   <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="homeadmin.php?page=1">1</a></li>
    <li class="page-item"><a class="page-link" href="homeadmin.php?page=2">2</a></li>
    </li>
  </ul>
</nav>


   <div class="consultation">
    <a href="search.php" class="box card text-white">Search student</a>
    <a href="add.php" class="box card text-white" >Add student</a>
   </div>


</div>

   <?php

   require("template/footer.php");

   ?>

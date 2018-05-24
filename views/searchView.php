<?php

require("template/header.php");

?>


<div class="instruction">
  <p>Enter the name :</p>
</div>

<form  action="" method="post">
 <div class="input-group inputsearch">
   <input type="text" name="reference" class="form-control" aria-label="" aria-describedby="basic-addon1">
   <div class="input-group-append">
     <button class="btn btn-success buttonpiece" type="submit">Search</button>
   </div>
 </div>
</form>
<p style="color:red; margin-left:5%; font-size:12px;">  <?php if (isset($message)) {
  echo $message;
}  ?>  </p>


<table class='table table-inverse table-responsive array'>
  <thead>
    <tr>
      <th style="color:#B22222;">Statut</th>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Section</th>
      <th>Voir</th>


    </tr>
  </thead>


   </table>


   <?php

   require("template/footer.php");

   ?>

<?php
   require("template/header.php");
?>

 <div class="all" style="min-height:92vh;">

   <nav style="background-color:#373737;padding:8px;padding-left:5%;color:white;">
     <p>connected <i style="color:green;margin-left:2%;" class="fas fa-check-circle"></i>
     <a href="logout.php"><i style="color:#B22222;float:right;margin-right:5%;margin-top:3px;" class="material-icons">exit_to_app</i></p></a>
   </nav>


<?php foreach ($donnees as $key => $value){
  ?>

<!-- start card rota -->
<div class="cardrota">



   <!--Rotating card-->
   <div class="card card-wrapper carterotation">
       <div  class="card-rotating effect__click text-center h-100 w-100">

           <!--Front Side-->
           <div class="face front" id="Id">

               <!-- Image-->
               <div class="card-up" style="height:130px;background-color:#2e2e2e;">
                 <img src="assets/img/iconsaccount1.png" style="margin-top:30px;" alt="icon account">
               </div>

               <!--Content-->
               <div class="card-body">


                   <h4 style="margin-top:10px;"><?php echo $value->getName(); ?></h4>
                   <p><?php echo $value->getFirstname(); ?></p>
                   <p><i class="material-icons" style="color:#CC0000;">thumb_up</i>  <?php echo $value->getSection(); ?></p>
                   <p><i class="material-icons" style="color:#CC0000;">star_border</i>  <?php echo $value->getOther(); ?></p>
                   <!--Triggering button-->
                   <a class="rotate-btn"  onclick="derriere()"><i class="material-icons" style="color:#007E33;">screen_rotation</i> rotate</a>



               </div>
           </div>
           <!--/.Front Side-->

           <!--Back Side-->
           <div class="face back" id="Id1" style="display:none;">

               <div class="card-body">



                   <!--Content-->
                   <h4>About me</h4>
                   <hr>
                   <ul style="list-style-type: none">

                     <li><i class="material-icons" style="color:#CC0000;">contact_phone</i>  <?php echo $value->getPhone(); ?> </li>
                     <li><i class="material-icons" style="color:#CC0000;">contact_mail</i> <?php echo $value->getEmail(); ?>  </li>
                     <li><i class="material-icons" style="color:#CC0000;">business</i>   <?php echo $value->getAddress(); ?>  </li>
                     <li><i class="material-icons" style="color:#CC0000;">location_on</i>  <?php echo $value->getCity(); ?>  </li>
                   </ul>
                   <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat? -->
                   </p>
                   <hr>
                   <!--Social Icons-->
                   <ul class="list-inline">
                       <li class="list-inline-item"><a class="icons-sm fb-ic">
                       <img src="assets/img/iconsf.png" style="height:25px;" alt="logo">
                       </a></li>
                       <li class="list-inline-item"><a class="icons-sm tw-ic">
                           <img src="assets/img/iconsl.png" style="height:25px;" alt="logo">
                       </a></li>
                       <li class="list-inline-item"><a class="icons-sm gplus-ic">
                         <img src="assets/img/iconsi.png" style="height:25px;" alt="logo">

                       </a></li>
                       <li class="list-inline-item"><a class="icons-sm li-ic">
                         <img src="assets/img/iconst.png" style="height:25px;" alt="logo">

                       </a></li>
                   </ul>
                   <!--Triggering button-->
                   <a class="rotate-btn" onclick="devant()" data-card="card-1"><i class="material-icons" style="color:#007E33;">screen_rotation</i> rotate back</a>




               </div>

           </div>
           <!--/.Back Side-->

       </div>
   </div>
 <!--/.Rotating card-->




</div>
<!-- end card rota -->


<!-- test -->

      <!-- <?php foreach ($donnees as $key => $value){
         ?>
          <p><?php echo $value->getName(); ?></p>
          <p><?php echo $value->getFirstname(); ?></p>
          <p><?php echo $value->getAge(); ?></p>
          <p><?php echo $value->getPhone(); ?></p>



         <?php
        }
      ?> -->





<hr style="width:70%;margin-left:14%;margin-top:1em;">







<div class="wrap">



<h2 style="height:50px;">Notes :</h2>
<div class="barGraph">
  <ul class="graph">
    <span class="graph-barBack">
      <li class="graph-bar graph-bar1" data-value="<?php echo $value->getMathematical(); ?>">
        <span class="graph-legend">Math</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar2" data-value="<?php echo $value->getFrench(); ?>">
        <span class="graph-legend">Fran</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar3" data-value="<?php echo $value->getHistory(); ?>">
        <span class="graph-legend">Hist</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar4" data-value="<?php echo $value->getEnglish(); ?>">
        <span class="graph-legend">Ang</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar5" data-value="<?php echo $value->getPhysical(); ?>">
        <span class="graph-legend">Phy</span>
      </li>
    </spa>
  </ul>
</div>




</div>






<hr style="width:70%;margin-left:14%;margin-top:1em;">


<div class="Observation" style="margin-top:2em;margin-left:3%;margin-bottom:3em;">


<h2 style="height:50px;">Observation :</h2>

<p><?php echo $value->getObservation(); ?></p>
</div>


<?php
}
?>


</div>

<?php

require("template/footer.php");

?>

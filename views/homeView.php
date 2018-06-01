<?php
   require("template/header.php");
?>

 <div class="all" style="min-height:92vh;">

<?php
   require("template/nav.php");
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
                   <h4 style="margin-top:10px;">James Davies</h4>
                   <p>Web developer</p>
                   <p><i class="material-icons" style="color:#CC0000;">thumb_up</i>  Symfony</p>
                   <!-- test -->
                   <p><i class="material-icons" style="color:#CC0000;">thumb_up</i>  Symfony</p>
                   <p><i class="material-icons" style="color:#CC0000;">star_border</i>  Football</p>
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
                     <li><i class="material-icons" style="color:#CC0000;">contact_phone</i>       0600000000</li>
                     <li><i class="material-icons" style="color:#CC0000;">contact_mail</i></li>
                     <li><i class="material-icons" style="color:#CC0000;">business</i></li>
                     <li><i class="material-icons" style="color:#CC0000;">location_on</i></li>
                   </ul>
                   <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime quae, dolores dicta. Blanditiis rem amet repellat, dolores nihil quae in mollitia asperiores ut rerum repellendus, voluptatum eum, officia laudantium quaerat? -->
                   </p>
                   <hr>
                   <!--Social Icons-->
                   <ul class="list-inline">
                       <li class="list-inline-item"><a class="icons-sm fb-ic">
                       <img src="img/ico3.png" style="height:25px;" alt="logo">
                       </a></li>
                       <li class="list-inline-item"><a class="icons-sm tw-ic">
                           <img src="img/ico2.png" style="height:25px;" alt="logo">
                       </a></li>
                       <li class="list-inline-item"><a class="icons-sm gplus-ic">
                         <img src="img/ico1.png" style="height:25px;" alt="logo">

                       </a></li>
                       <li class="list-inline-item"><a class="icons-sm li-ic">
                         <img src="img/ico4.png" style="height:25px;" alt="logo">

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

      <?php foreach ($donnees as $key => $value){
         ?>
          <p><?php echo $value->getName(); ?></p>
          <p><?php echo $value->getFirstname(); ?></p>
          <p><?php echo $value->getAge(); ?></p>
          <p><?php echo $value->getPhone(); ?></p>



         <?php
        }
      ?>





<hr style="width:70%;margin-left:14%;margin-top:1em;">

<!-- <h1>Note :</h1>
<p id="compteur">0</p> -->


<?php $chiffre = 5; ?>


<div class="wrap">
<h2 style="height:50px;">Notes :</h2>
<div class="barGraph">
  <ul class="graph">
    <span class="graph-barBack">
      <li class="graph-bar graph-bar1" data-value="<?php echo $chiffre ?>">
        <span class="graph-legend">Math</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar2" data-value="85">
        <span class="graph-legend">Fran</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar3" data-value="70">
        <span class="graph-legend">Hist</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar4" data-value="50">
        <span class="graph-legend">Ang</span>
      </li>
    </span>

    <span class="graph-barBack">
      <li class="graph-bar graph-bar5" data-value="68">
        <span class="graph-legend">Phy</span>
      </li>
    </spa>
  </ul>
</div>



</div>






<hr style="width:70%;margin-left:14%;margin-top:1em;">


<div class="Observation" style="margin-top:2em;margin-left:3%;margin-bottom:3em;">


<h2 style="height:50px;">Observation :</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>


</div>

<?php

require("template/footer.php");

?>

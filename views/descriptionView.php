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
<?php
if(isset($donnees)){
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
                   <h4 style="margin-top:10px;"><?php echo $donnees->getName(); ?></h4>
                   <p><?php echo $donnees->getFirstname(); ?></p>
                   <p><i class="material-icons" style="color:#CC0000;">today</i> <?php echo $donnees->getAge(); ?> ans</p>
                   <p><i class="material-icons" style="color:#CC0000;">thumb_up</i>  <?php echo $donnees->getSection(); ?></p>
                   <p><i class="material-icons" style="color:#CC0000;">star_border</i> <?php echo $donnees->getStudy(); ?></p>

                  <hr style="width:80%;margin-left:9%;">

                  <!--Triggering button-->
                  <a class="rotate-btn"  onclick="derriere()"><i class="material-icons" style="color:#007E33;">screen_rotation</i> rotate</a>

                  <hr style="width:80%;margin-left:9%;">

                  <a data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo"><i class="material-icons" style="color:#007E33;">update</i> update</a>
              <!-- Modal -->
                  <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="post">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Name:</label>
                              <input type="text" class="form-control" id="recipient-name" name="name" value="<?php echo $donnees->getName(); ?>">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">First Name:</label>
                              <input type="text" class="form-control" id="recipient-name" name="firstname" value="<?php echo $donnees->getFirstname(); ?>">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Age:</label>
                              <input type="text" class="form-control" id="recipient-name" name="age" value="<?php echo $donnees->getAge(); ?>">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Section:</label>
                              <input type="text" class="form-control" id="recipient-name" name="section" value="<?php echo $donnees->getSection(); ?>">
                            </div>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Study:</label>
                              <input type="text" class="form-control" id="recipient-name" name="study" value="<?php echo $donnees->getStudy(); ?>">
                            </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name="updatestatus2" class="btn btn-primary">Submit</button>
                        </div>
                      </form>

                      </div>
                    </div>
                  </div>
                  <!-- END Modal -->


               </div>
           </div>
           <!--/.Front Side-->

           <!--Back Side-->
           <div class="face back" id="Id1" style="display:none;">
               <div class="card-body">
                   <!--Content-->
                   <h4>About student</h4>
                   <hr>
                   <ul style="list-style-type: none">
                     <li><i class="material-icons" style="color:#CC0000;">contact_phone</i>  <?php echo $donnees->getPhone(); ?> </li>
                     <li><i class="material-icons" style="color:#CC0000;">contact_mail</i> <?php echo $donnees->getEmail(); ?>  </li>
                     <li><i class="material-icons" style="color:#CC0000;">business</i>   <?php echo $donnees->getAddress(); ?>  </li>
                     <li><i class="material-icons" style="color:#CC0000;">location_on</i>  <?php echo $donnees->getCity(); ?>  </li>
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

                   <hr style="width:80%;margin-left:9%;">

                   <!--Triggering button-->
                   <a class="rotate-btn" onclick="devant()" data-card="card-1"><i class="material-icons" style="color:#007E33;">screen_rotation</i> rotate back</a>

                   <hr style="width:80%;margin-left:9%;">

                   <a data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="material-icons" style="color:#007E33;">update</i> update</a>
               <!-- Modal -->
                   <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-body">
                           <form action="" method="post">
                             <div class="form-group">
                               <label for="recipient-name" class="col-form-label">Phone:</label>
                               <input type="text" class="form-control" id="recipient-name" name="phone" value="<?php echo $donnees->getPhone(); ?>">
                             </div>
                             <div class="form-group">
                               <label for="recipient-name" class="col-form-label">Email:</label>
                               <input type="text" class="form-control" id="recipient-name" name="email" value="<?php echo $donnees->getEmail(); ?>">
                             </div>
                             <div class="form-group">
                               <label for="recipient-name" class="col-form-label">Address:</label>
                               <input type="text" class="form-control" id="recipient-name" name="address" value="<?php echo $donnees->getAddress(); ?>">
                             </div>
                             <div class="form-group">
                               <label for="recipient-name" class="col-form-label">City:</label>
                               <input type="text" class="form-control" id="recipient-name" name="city" value="<?php echo $donnees->getCity(); ?>">
                             </div>

                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" name="updatestatus"class="btn btn-primary">Submit</button>
                         </div>
                         </form>
                       </div>
                     </div>
                   </div>
                   <!-- END Modal -->

               </div>
           </div>
           <!--/.Back Side-->

       </div>
   </div>
 <!--/.Rotating card-->


</div>
<!-- end card rota -->


<div class="twocard">


<!-- Card -->
<div class="card-cascade wider cardnotes">

  <!-- Card image -->
  <div class="view view-cascade gradient-card-header peach-gradient card cardhead">

    <!-- Title -->
    <h2 class="card-header-title mb-3">Notes</h2>

  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center card cardbody">

    <!-- Text -->
    <p class="card-text">mathematical : <?php echo $donnees->getMathematical(); ?>%</p>
    <p class="card-text">french : <?php echo $donnees->getFrench(); ?> %</p>
    <p class="card-text">history : <?php echo $donnees->getHistory(); ?> %</p>
    <p class="card-text">english : <?php echo $donnees->getEnglish(); ?> %</p>
    <p class="card-text">physical : <?php echo $donnees->getPhysical(); ?> %</p>

    <hr style="width:80%;margin-left:9%;">

    <a data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo"><i class="material-icons" style="color:#007E33;">update</i> update</a>
<!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Mathematical:</label>
                <input type="text" class="form-control" id="recipient-name" name="mathematical" value="<?php echo $donnees->getMathematical(); ?>">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">French:</label>
                <input type="text" class="form-control" id="recipient-name" name="french" value="<?php echo $donnees->getFrench(); ?>">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">History:</label>
                <input type="text" class="form-control" id="recipient-name" name="history" value="<?php echo $donnees->getHistory(); ?>">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">English:</label>
                <input type="text" class="form-control" id="recipient-name" name="english" value="<?php echo $donnees->getEnglish(); ?>">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Physical:</label>
                <input type="text" class="form-control" id="recipient-name" name="physical" value="<?php echo $donnees->getPhysical(); ?>">
              </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button  class="btn btn-primary" name="updatenote" type="submit">Submit</button>
          </div>
        </form>

        </div>
      </div>
    </div>
    <!-- END Modal -->


  </div>
  <!-- Card content -->

</div>
<!-- Card -->



<!-- Card -->
<div class="card-cascade wider cardobservation">

  <!-- Card image -->
  <div class="view view-cascade gradient-card-header peach-gradient card cardhead1">

    <!-- Title -->
    <h2 class="card-header-title mb-3">Observation</h2>

  </div>

  <!-- Card content -->
  <div class="card-body card-body-cascade text-center card cardbody1">

    <!-- Text -->
    <p class="card-text"><?php echo $donnees->getObservation(); ?></p>

    <hr style="width:80%;margin-left:9%;">

    <a data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="material-icons" style="color:#007E33;">update</i> update</a>
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Observation:</label>
                <input type="text" class="form-control" id="recipient-name" name="observation" value="<?php echo $donnees->getObservation(); ?>">
              </div>
            <!-- </form> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button  class="btn btn-primary" name="newsupdate" type="submit">Submit</button>
          </div>
        </form>

        </div>
      </div>
    </div>
    <!-- END Modal -->


  </div>
  <!-- Card content -->

</div>
<!-- Card -->

</div>


 <a href="deleteaccount.php?remove=<?php echo $donnees->getId();?>&removelog=<?php echo $donnees->getName();?>"  onclick="return(confirm('Are you sure you want to delete this account?'));">
 <button type="button" class="btn btn-danger" style="margin-left:8%;margin-top:1em;margin-bottom:2em;">Delete account</button>
 </a>

 <?php
 } ?>




</div>



<?php

   require("template/footer.php");

?>

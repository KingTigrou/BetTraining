<?php
$Title = "contact";
require "header.php";
?>
 

      
<div id="plant" class="contact_us layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <div class="titlepage">
               <h2><strong class="black"> Contacter</strong> Nous</h2>
               <span style="text-align: center;">Des questions ? Problèmes technique ? N'hésiter pas nous répondrant dans les plus bref délai.</span>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="contact_us_2 layout_padding paddind_bottom_0">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="soc_text">:)</div>
         </div>
         <div class="col-md-6">
            <div class="email_btn">
               <form action="/action_page.php">
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Nom" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Mail" name="Email">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Numéro de téléphone" name="Phone">
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control form-control-sm" placeholder="Message" name="text3">
                  </div>
                  <div class="submit_btn">
                     <button type="submit" class="btn btn-primary" style="background: #081b30; color: #fff; padding: 11px;">Envoyer</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="contact_us_3 layout_padding">
            <div class="row">
               <div class="col-md-4">
                  <h1 style="color: #ffffff; ">Newsletter</h1>
                  <p class="long_text">Tout ne fait que commencer ! Abonnée vous pour avoir des informations sur l'avancement du projet </p>
               </div>
               <div class="col-md-8">
                  <div class="email_text">
                     <div class="input-group mb-3">
                        <input style="border-bottom-left-radius: 20px !important; border-top-left-radius: 20px !important;" type="text" class="form-control" placeholder="Entre ton mail">
                        <div class="input-group-append">
                           <button style="border-top-right-radius: 20px !important; border-bottom-right-radius: 20px !important; color: #fff; padding-bottom: 10px; padding-top: 10px;" class="btn btn-primary" type="Subscribe">S'inscrire</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

      <!-- end Contact Us-->
      <?php require "footer.php" ?>
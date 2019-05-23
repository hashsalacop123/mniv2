<?php
session_start();  
if(isset($_SESSION['loggedIN'])) {
    $_SESSION['loggedIN'] = $_COOKIE['tokken']; 
            if($_COOKIE['role'] == 2)
            {
              header("location: database-view");
            }
} else {
            header("location: login.php");
        } 
        ?>
 <!doctype html>
<html lang="en">
<?php include('header.php'); ?>


<!-- particles.js container -->
<!-- <div id="particles-js">
  


</div> -->
      <div  id="particles-js" class = "particles-js-canvas-el data-compiling">
                <div class = "mni-system">
                         <div class = "container"> 
                              <div class = "row">
                                <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 mnisystem" >
                                       <img src="img/mni-logo.png" alt="mni" class="img-fluid" />
                                 </div>
                                   <div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 openlooklogo">
                                            <img src="img/open-look-logo-white.png" alt="logo" class = "imageRotateHorizontal img-fluid"/>

   						<a href = "#" id = "logout" >Logout <i class="fas fa-sign-out-alt"></i></a>
                                   </div>
                              </div>
                         
                        </div>
                     </div>
        	 <div class = "container data-container">
            		<div class = "row">
            			<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 data-space">
	            			<div class = "agent-name"> </div>
	            			<div class = "agent-id"></div>
                    <input type="hidden" id="userid" name="userid" value="">
       
	            			<div class = "agent"><b>Date:</b> <?php echo  date("Y/m/d") ?> </div>
            		</div>
            			<div class = "col-xs-12 col-sm-12 col-md-6 col-lg-6 data-space"></div>
            			<div class = "startcall">
                   <div class="col-xs-12 button-holder">
                      <div class="ajax-button">
                        <div class="fa fa-check done"></div>
                        <div class="fa fa-close failed"></div>
                        <input id="startcall" class="submit" type="button" value="Start Call" />
                      </div>
                    </div>
                    <!--   <a href = "#" id = "startcall"></a> -->
             			<img src = "img/call.gif" class = "gifcall"/>
             			</div>
               		</div>
            	</div>
         </div>
     
      <?php include('footer.php'); ?>
        <footer class="footer-content">
      <p>Allrights reserved © <?php echo date('Y'); ?> - <a href = "https://open-look.com/">open-look.com</a></p>
   </footer>
</html>
<?php 
session_start();  
$dataID = $_COOKIE['idcalling'];
if(isset($_SESSION['loggedIN'])) {  
    $_SESSION['loggedIN'] = $_COOKIE['tokken']; 
            if($_COOKIE['role'] == 2)
            {
              header("location: database-view");
            }else if($_COOKIE['startcall'] == ''){
              header("location: startcall");
            }
            }else {
              header("location: login");
             }
       ?>
<!doctype html>
<html lang="en">
<?php include('header.php'); ?>
     <div class="mask-color">
             <div id="preview-area">
                <div class="spinner">
                   <div class="dot1"></div>
                   <div class="dot2"></div>
                </div>
             </div>
          </div>
      <div class = "data-compiling" id = "dataload">
                <div class = "mni-system">
                         <div class = "container"> 
                              <div class = "row">
                                <div class = "col-xs-12 col-sm-12 col-md-4 col-lg-4 mnisystem" >
                                       <img src="img/mni-logo.png" alt="mni" class="img-fluid" />
                                 </div>
                                 <div class = "col-xs-12 col-sm-12 col-md-4 number-call">
                                    <input id="testid"  class="form-control" value="" type="text">
                                    <div class="thenumber"></div>

                                 </div>
                                   <div class = "col-xs-12 col-sm-12 col-md-4 col-lg-4 openlooklogo" >
                                            <img src="img/open-look-logo-white.png" alt="logo" class = "imageRotateHorizontal img-fluid"/>

                                   </div>
                              </div>
                         
                        </div>
                     </div>
         <div class = "container data-container">
            <div class = "row">
                 <input type="hidden"  id="lead_id" data-aos="fade-up" value = "<?php echo $dataID; ?>" class="form-control" name="lead_id" placeholder="Search for ID"  aria-label="Data" aria-describedby="basic-addon1"/>
                  <form id = "formleft" class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class = "row height-comments">
                      <div id = "iccomments1" class = "col-md-12" >
                        <div class = "row">
                           <label class="col-sm-2 control-label">ocommetns</label>
                             <div class="col-sm-10 inputGroupContainer " >
                                <div class="input-group">
                                   <input id="ocommetns" name="ocommetns" disabled="disabled" class="form-control ocommetns"  value="" type="text" >
                                </div>
                             </div>
                        </div>
                      </div>
                      <div id = "tccomments1"  class = "col-md-12">
                        <div class = "row">
                        <label class="col-sm-2 control-label">tcomments</label>
                         <div class="col-sm-10 inputGroupContainer " >
                            <div class="input-group">
                                 <input id="tcomments" name="tcomments"  disabled="disabled" class="form-control tcomments"  value="" type="text" >
                            </div>
                         </div>
                          
                        </div>
                      </div>
                      <div id = "fccomments1" class = "col-md-12">
                        <div class = "row">
                          <label class="col-sm-2 control-label">fcomments</label>
                             <div class="col-sm-10 inputGroupContainer " >
                                <div class="input-group">
                                       <input id="fcomments" name="fcomments"  disabled="disabled" class="form-control fcomments"  value="" type="text" >
                                </div>
                             </div>                          
                        </div>
                      </div>
                    </div>
                     <div class = " wrapper-left data-same-css">
                       <div class = "row">
                          <?php include('form-left-nr.php'); ?>
                       </div>
                       </div>
                  </form>
             
               <!-- RIGHT DATA -->
             
                  <form id = "dataform" class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="height-given">
                         <p class="agtnotes ">Agent Notes</p>
                            <textarea id="agentsnotes" class="agentsnotes"  name="agentsnotes"></textarea>
                    </div>
                      <div class = " wrapper-right data-same-css">
                        <div class = "row" >

                          <?php  include('form-right-nr.php') ?>
                        </div>
                          </div>
                  </form>
               <div class = "col-sm-12 col-md-12 col-lg-12">
                  <div class = "bootstrap-btn-alignment">
                     <input type="hidden" id="id" name="dataId" value="">
                     <button type="button" id = "update-btn"  class="btn btn-success"><i class="fas fa-save"></i> Process</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
       

      <?php include('footer.php'); ?>
    
    
            <script  src="js/getdataapi.js" type="text/javascript"></script>
       

</html>
<?php 
session_start();    
if(isset($_SESSION['loggedIN'])) {
        $_SESSION['loggedIN'] = $_COOKIE['tokken']; 
          if($_COOKIE['role'] == 1){
            header("location: /startcall");
          }
}else {
   header("location: login.php");
}

?>
<!doctype html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<?php include('header.php'); ?>

<body style="background-image: url(img/database.jpg);">
        <div class="mask-color">
             <div id="preview-area">
                <div class="spinner">
                   <div class="dot1"></div>
                   <div class="dot2"></div>
                </div>
             </div>
          </div>
<div class = "header-database">

  <ul class = "data-view">
    <li><img src="img/mni-logo.png"  class = "img-fluid" alt = "logo" /></li>
    <li> <h1 class = "database"> DATABASE <i class="fas fa-database"></i></h1></li>
  </ul>

   <a href = "#" id = "logout" >Logout <i class="fas fa-sign-out-alt"></i></a>
  </div>

  <?php 
  $bearer = $_COOKIE['tokken'];
      $curl = curl_init();
          curl_setopt_array($curl, array(
          CURLOPT_PORT => "8000",
          //CURLOPT_URL => "https://mniapi.openlookeasydata.com/api/auth/nrdata",
          CURLOPT_URL => "http://127.0.0.1:8000/api/auth/nrdata/",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
          "authorization: Bearer  ".$bearer.""
        ),
      ));
      $response = curl_exec($curl);
      $err = curl_error($curl);
      curl_close($curl);

   ?>
    
        <div class = "container">
              <div class = "row">
                <div class = "col-md-4">
                       <table  class = "date-filters" border="0" cellspacing="5" cellpadding="5">
                        <tbody>
                              <tr>
                                  <td>FROM DATE:</td>
                                  <td><input name="min" id="min" class="form-control" type="text"></td>
                              </tr>
                              <tr>
                                  <td>TO DATE:</td>
                                  <td><input name="max" id="max" class="form-control" type="text"></td>
                              </tr>
                          </tbody>
                          </table>
                       </div>
                       <div class="col-xs-12 col-md-8 col-lg-8 col-xl-8">
                          <div class = "data-features date-filters">
                            <ul>
                                <li>
                                  <h5>REFRESH</h5>
                                  <a href = "#" id="refreshdata"  class="btn btn-primary"><i class="fa fa-sync"></i></a>
                                </li>
                                <li>
                                  <h5>UPLOADED</h5>
                                   <a  data-fancybox data-src="#dataids" href="javascript:;" id = "needtocall" class="btn btn-primary"><i class="fa fa-building"></i></a>
                                </li>
                                  <li>
                                  <h5>ADD USER</h5>
                                   <a data-fancybox  data-options='{"src": "#addusers", "touch": false, "smallBtn" : false}'   href="javascript:;" class="btn btn-primary"><i class="fa fa-users-cog"></i></a>
                                </li>
                                  <li>
                                  <h5>AGENT INFO</h5>
                                   <a data-fancybox  data-options='{"src": "#data-user", "touch": false, "smallBtn" : false}' class="btn btn-primary"><i class="fa fa-users"></i></a>
                                </li>
                                <li>
                                  <h5>UPLOAD DATA</h5>
                                  <a data-fancybox  data-options='{"src": "#upload-csv", "touch": false, "smallBtn" : false}' class="btn btn-primary"><i class="fa fa-file-upload"></i></a>
                                </li>
                                <li>
                                  <h5>DELIVERED</h5>
                                  <a data-fancybox  data-options='{"src": "#files-delivered", "touch": false, "smallBtn" : false}' class="btn btn-primary"><i class="fa fa-trash-alt"></i></i></a>
                                </li>
                               <li>
                                  <h5>HISTORY</h5>
                                  <a data-fancybox  data-options='{"src": "#historycalls", "touch": false, "smallBtn" : false}' class="btn btn-primary"><i class="fas fa-history"></i></a>
                                </li>
                            </ul>
                          </div>
                          <div class = "data-search-query">
                            <div class = "container">
                             <div class = "row">
                                <div class = "col-md-2">
                                    <h2>Disposition</h2>
                                </div>
                                <div class = "col-md-4">
                                   <select class="form-control" id="fdisp" name="fdisp">
                              <option value="01-Good update">01-Good Update</option>
                                      <option value="03">03-Incomplete Update</option>
                                      <option value="05">05-Already Answered</option>
                                      <option value="06">06-No Manufacturing</option>
                                      <option value="07">07-Out of Business</option>
                                      <option value="08">08-Send Information</option>
                                      <option value="09">09-Refusal/Unworkable</option>
                                      <option value="10">10-Wrong Number</option>
                                      <option value="11">11-Answering Machine</option>
                                      <option value="12">12-Callback</option>
                                      <option value="13">13-Other</option>
                                      <option value="17">17-No Answer</option>
                                      <option value="18">18-Busy</option>
                                      <option value="96">96-1st Pass Unworkable</option>
                                      <option value="97">97-Callback requested</option>
                                      <option value="98">98-2x No Answer (priority 7/8/9)</option>
                                      <option value="99">99-AM 3x</option>
                                   </select>
                                </div>
                                <div class = "col-md-2">
                                    <h2>QA Status</h2>
                                </div>
                                <div class = "col-md-4">
                                    <select class="form-control" id="qastatus" name="qastatus">
                                        <option></option>
                                        <option value="Pass">Pass</option>
                                        <option value="Draft">Draft</option>
                                        <option value="Kill">Kill</option>
                                    </select>
                                </div>
                             </div>
                           </div>
                          </div>
                       </div>

      <?php include('table-files.php'); ?>
           
      <?php include('user-registration.php'); ?>

      <div class = "data-user-info" id=""> 
          <div style="display: none; width: 800px;" id="data-user">
          <?php
              $curl = curl_init();
              curl_setopt_array($curl, array(
                CURLOPT_PORT => "8000",
                // CURLOPT_URL => "https://mniapi.openlookeasydata.com/api/auth/alluser",
                CURLOPT_URL => "http://127.0.0.1:8000/api/auth/alluser",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => array(
                   "authorization: Bearer  ".$bearer.""
                ),
              ));
              $responsedata = curl_exec($curl);
              $errors = curl_error($curl);
              curl_close($curl);
              if ($errors) {
                echo "cURL Error #:" . $errors;
              } else {
              //  echo $responsedata;
                $datauser = json_decode($responsedata, true);

              } ?>

        <div class = "data-usertable" id = "">
            <table id="userdata" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Added</th>
                        <th>Role</th>
                      </tr>
                     </thead>
                     <?php foreach ($datauser as $key => $datausers) {
                      $dataRole = $datausers['role'];

                          if($dataRole == '1'){
                               $dataRole = 'Agent';
                          }

                           $dateformatCreated  = new DateTime($datausers['created_at']);

                             echo '<tr>';
                                echo '<td>'.$datausers['name'].'</td>';
                                echo '<td>'.$datausers['email'].'</td>';
                                echo '<td>'.$dateformatCreated->format('Y/m/d').'</td>';
                                echo '<td>'.$dataRole.'</td>';
                             echo '</tr>';
                          }      
                     ?>
            </table>

        </div>
        
        </div>
      </div>


        <?php include('files-upload.php'); ?>
        <?php include('files-delivered.php'); ?>
        <?php include('history-view.php'); ?>

      <?php include('footer.php'); ?>
   <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
   <script src="js/database.js"></script>>
     
<!--    <div class = "copyright"> Copyright 2019. All Rights By Open Look. Reserved.</div> -->

</html>


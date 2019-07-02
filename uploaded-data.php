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
<link rel="stylesheet" type="text/css" href="css/duplicate.css">

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
	<a href = "database-view">
		  <ul class = "data-view">
		    <li><img src="img/mni-logo.png"  class = "img-fluid" alt = "logo" /></li>
		    <li> <h1 class = "database"> DATABASE <i class="fas fa-database"></i></h1></li>
		  </ul>
	</a>

   <a href = "#" id = "logout" >Logout <i class="fas fa-sign-out-alt"></i></a>
  </div>

  <?php 
  $bearer = $_COOKIE['tokken'];
      $curl = curl_init();
          curl_setopt_array($curl, array(
          CURLOPT_PORT => "8000",
          //CURLOPT_URL => "https://mniapi.openlookeasydata.com/api/auth/nrdata",
          CURLOPT_URL => "http://172.16.11.80:8000/api/auth/nrdata",
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
              		<div class = "data-dropdown">
              			    <div class = "all_query">
                       <h4>GROUP FILE NAME</h4>
	                        <select class="form-control" id="group-id" name="group-id">
	                            <option ></option>
	                            <option value = "1561740155">1561740155</option>
	                            <option value = "1561388137">1561388137</option>
	                            <option value = "1561565003">1561565003</option>
	                        </select>
	                    </div>
              		</div>
              	</div>
              	<div class = "col-md-4"></div>
              	<div class = "col-md-4"></div>
                 <div class = "col-md-12">
                     <div  id="dataids">
                      <h3 class="data-title">Uploaded Data and Activity</h3>
                        <table id="datauploaded" class="ids-excel display compact" style="width:100%">
                            <thead>
                                <tr>
                                  <th>ID's</th>
                                   <th>Agent</th>
                                  <th>Compname</th>
                                  <th>vnumber</th>
                                  <th>Status</th>
                                  <th>Group ID</th>
                                  <th>Number</th>
                                   <th>File Name</th>
                                   <th>FDISP</th>
                                  <th>Reset</th>
                                </tr>
                              </thead>
                               <tbody>
                          <?php 
                                 $dataUploaded = json_decode($response, true);

                                 	// echo '<pre>';

                                 	// print_r($response);

                                  $dataId = $dataUploaded;

                                    if (is_array($dataId) || is_object($dataId))
                                      {
                                              foreach ($dataId as $key => $dataIds) {

                                    $callStatus = $dataIds['status_call'];
                                    $numberCalls = $dataIds['callPriority'];
                                    $filesGroup = $dataIds['filesName'];
                                    $idrow = $dataIds['id'];
                                    $userID = $dataIds['user_id'];

                                      echo '<tr>';
                                       echo '<td>'.$idrow.'</td>';


                                        echo '<td>'.$dataIds['user']['name'].'</td>';
                                        echo '<td>'.$dataIds['compname'].'</td>';
                                         echo '<td>'.$dataIds['vnumber'].'</td>';
                                        echo '<td>'; 
                                          if($callStatus == '2'){
                                           echo  '<p class = "on-call">On-Call</p>';
                                          }else {
                                            echo '<p class = "free-to-class">Free</p>';
                                          }
                                        echo '</td>';
                                        echo '<td class = "different"><input type = "text"   value = "'.rtrim($filesGroup,".csv").'" ></td>';
                                        echo '<td>'.$numberCalls.'</td>';
                                        echo '<td>'.$dataIds['filesNamePath'].'</td>';
                                          echo '<td>'.$dataIds['fdisp'].'</td>';
                                        echo '<td>';
                                          if($callStatus == '2') {
                                            echo   '<button id = '.$idrow.' class = "btn btn-danger resetStatus">Reset Status <i class="fa fa-phone" aria-hidden="true"></i></button>';
                                          }

                                       echo '</td>';
                                   
                                      echo "</tr>";
                                  }

                                      }
                                
                            ?>
                           </tbody>
                        </table>
                       </div>
                

              
              </div>
        </div>

           


    		</div>
  	</div>
     



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
window.jQuery || document.write('<script src="http://localhost/mniv2/js/jquery.min.js"><\/script>')
</script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="js/duplicate.js"></script>
<!--    <div class = "copyright"> Copyright 2019. All Rights By Open Look. Reserved.</div> -->

</html>



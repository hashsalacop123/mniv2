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

  $bearer = $_COOKIE['tokken'];
      $curl = curl_init();
          curl_setopt_array($curl, array(
          CURLOPT_PORT => "8000",
          //CURLOPT_URL => "https://mniapi.openlookeasydata.com/api/auth/nrdata",
          CURLOPT_URL => "http://172.16.11.120:8000/api/auth/nrdata",
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


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
        <title> Datatable Realtime </title>
    </head>
    <body>
    	<div class = "container">
    		<div class = "row">
    			<div id = "realtimedata">
                      <h3 class="data-title">Uploaded Data and Activity</h3>
                       <table id="realtime" class="display" style="width:100%">
                       	<?php echo '<pre>';
                       			 $dataarrayDats = json_decode($response, true);
                       		// print_r($dataarrayDats); 

                       	

                       		echo  exec( 'touch http://172.16.11.120/mniv2/realtimecall.php');
                       	?>

                      	 <thead>
						        <tr>
						            <th>ID</th>
						            <th>Agent</th>
						            <th>Compname</th>
						            <th>Status Call</th>
						             <th>Uploaded Date</th>
						            <th>Group ID</th>
						        </tr>
						    </thead>
                        </table>
                       </div>

    		</div>
    	</div>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>



    </body>
    </html>

    <script type="text/javascript">
    	
    	jQuery(document).ready(function($) { 


 });



   
    </script>
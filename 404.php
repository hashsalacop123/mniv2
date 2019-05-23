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

?>
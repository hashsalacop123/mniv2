<?php 
session_start();

		 if(isset($_COOKIE['tokken'])){
		      	$_SESSION['loggedIN'] = $_COOKIE['tokken']; 
		      		if($_COOKIE['role'] == 1){
		      			header("location: /mniv2");
		      		}else{
		      			header("location: database-view");
	      			}
		      }
		   else {
		        header("location: login.php");
		   }
		   ?>
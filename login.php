<?php   
session_start();
if(isset($_SESSION['loggedIN'])) {
     if(isset($_COOKIE['tokken']))
         {
            $_SESSION['loggedIN'] = $_COOKIE['tokken'];

              if($_COOKIE['role'] == 2){
                   header("location: database-view");
                }else {
                  header("location: startcall");
                }
          }
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
<link rel="stylesheet" type="text/css" href="css/login.css">
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="img/mni-logo.png" class="w-75" alt="Logo"> </span><br/>
           <span class="logo_title mt-5"> Login </span>
        </div>
        <div class="card-body">
          <form method="POST" class = "login-form">
                 <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-user"></i></span>
                      </div>
                    
                      <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                  </div>

                  <div class="input-group form-group">
                      <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-key"></i></span>
                      </div>
                      <input type="password" name="password" id = "password" class="form-control" placeholder="Password">
                  </div>

                  <div class="form-group">
                      <input type="button" name="submit" id="submit" value="Login" class="btn btn-outline-danger float-right login_btn">
                  </div>

          </form>
           

                
           
            
        </div>
    </div>
</div>
 <?php include('footer.php'); ?>
</html>
<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" 
      type="image/png" 
      href="images/peertech.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <!--link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <title>Approval System</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <!--h1>Vali</h1-->
        <h1>Approval System</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="login.php" method="POST" autocomplete="off">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>

 <?php
//if(isset($_POST['btnLogin'])){
              // if ($_SESSION['pokea'] == 2){
 // if(isset($_SESSION['pokea']) && $_SESSION['pokea'] != ''){
 if(isset($_SESSION['pokea'])){
      if ($_SESSION['pokea'] == 2) {    
                unset($_SESSION['pokea']);
               echo "<div class='alert1'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo " Incorrect Username or Password.";   
               echo "</div>";
              } 
     }      
      if(isset($_SESSION['pokea'])){
      if ($_SESSION['pokea'] == 3) {    
                unset($_SESSION['pokea']);
               echo "<div class='alert1'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo " Email Not Sent Check Your email and try again";   
               echo "</div>";
              } 
     } 
           if(isset($_SESSION['pokea'])){
      if ($_SESSION['pokea'] == 5) {    
                unset($_SESSION['pokea']);
               echo "<div class='alert1'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo " Email Not found try again";   
               echo "</div>";
              } 
     } 
           if(isset($_SESSION['pokea'])){
      if ($_SESSION['pokea'] == 4) {    
                unset($_SESSION['pokea']);
               echo "<div class='alert'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo " Password sent to your email, please login";   
               echo "</div>";
              } 
     }  
//}
?>


              <style>
                .alert1 {
                  padding: 5px;
                  background-color: red;
                  color: white;
                  width: 270px;
                  height: 50px;
                }
                  .alert {
                  padding: 5px;
                  background-color: green;
                  color: white;
                  width: 270px;
                  height: 50px;
                }

                .closebtn {
                  margin-left: 15px;
                  color: white;
                  font-weight: bold;
                  float: right;
                  font-size: 22px;
                  line-height: 20px;
                  cursor: pointer;
                  transition: 0.3s;
                }

                .closebtn:hover {
                  color: black;
                }
              </style>

          <div class="form-group">
            <span id="login"></span>
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="email" name="email" required="required" placeholder="Email" autofocus autocomplete="off">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" name="passwd" placeholder="Password" required="required">
          </div>
          <div class="form-group">
            <div class="utility">
              <!--div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div-->
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" type="submit" name="signin" id="btnLogin" name="btnLogin"><i class="fa fa-sign-in fa-lg fa-fw" ></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="login.php" method="POST" autocomplete="off">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" required="true" placeholder="Email" name='emailupdate1' />
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block" name="btnreset" type="submit"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET
            </button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
        <footer style="position: relative;">
      <center>&copy 2020 peertech All rights are reserved</center>
    </footer>
  </body>
</html>
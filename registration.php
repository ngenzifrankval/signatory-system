<?php
 session_start();
 if (isset($_SESSION["email"])) {
   
 }else{
  header("location:index.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" 
      type="image/png" 
      href="images/peertech.png" />
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Approval Request</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
      <!--link href="css/sb-admin-2.min.css" rel="stylesheet"-->
  <link href="css/custome.css" rel="stylesheet">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



  </head>
  <body class="app sidebar-mini rtl">

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ready to leavy?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to leave.
 <!--form class="user" action="insertuser.php" method="POST"-->
          <form class="user" action="insertuser.php" method="POST">
            <div class="form-group row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h1>Create an Account!</h1>
                 
                </div>
            </div>   
            
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="control-label">Full  Name</label>
                      <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Full Name" required="true" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control form-control-user" id="email" placeholder="Enter Email Address" required="true" name="email">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="control-label">Password</label>
                      <input type="text" class="form-control form-control-user" id="passwd" placeholder="Enter Password" required="true" name="passwd">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="control-label">Phone Number</label>
                      <input type="Number" maxlength="10" class="form-control form-control-user" id="phoneno" required="true" placeholder="Example 075204326" name="phoneno">
                    </div>
                  </div>
                  
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Logout</button>
      </div>
    </div>
  </div>
</div>

    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">Approval System</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
    

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="setting-PM.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="Logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            <!--li>
              <Button trigger modal>
              <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fa fa-sign-out fa-lg"></i> Logout
              </button>
            </li-->
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/peertech.PNG">
        <div>
          <!--p class="app-sidebar__user-name">Admin</p-->
        </div>
      </div>
      <ul class="app-menu">
       <li><a class="app-menu__item" href="home-PM.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Request</span></a></li>
         <li><a class="app-menu__item active" href="Registration.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">User Registration</span></a></li>
         <li><a class="app-menu__item" href="Project-registration-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Project Registration</span></a></li>
         <li><a class="app-menu__item" href="Approve-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Approve Request</span></a></li>
        <li><a class="app-menu__item" href="Accepted-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Accepted Request</span></a></li>
         <li><a class="app-menu__item" href="Dismissed-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Dismissed Request</span></a></li>
         <li><a class="app-menu__item" href="Payed-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Payed Request</span></a></li>
         <li><a class="app-menu__item" href="report.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Print Report</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> User registration</h1>
          <p>Welcome</p>
        </div>
        <!--ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Registration</a></li>
        </ul-->
      </div>
<div class="container">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">

              <style>
                .alert {
                  padding: 20px;
                  background-color: green;
                  color: white;
                }

                .alert1 {
                  padding: 20px;
                  background-color: red;
                  color: white;
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

      <div class="tile">
        <div class="tile-body">

            <?php
              if ($_SESSION['tayari'] == 2){
                $_SESSION['tayari']=1;
               echo "<div class='alert'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo "<strong>Success!</strong> User created succeessful.";   
               echo "</div>";
              } else if ($_SESSION['tayari'] == 3) {
                $_SESSION['tayari']=1;
                 echo "<div class='alert1'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo "<strong>Error!</strong> Email already used.";   
               echo "</div>";
              }
            ?>


          <!--form class="user" action="insertuser.php" method="POST"-->
          <form class="user" action="insertuser.php" method="POST" autocomplete="off">
            <div class="form-group row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                  <h1>Create an Account!</h1>
                 
                </div>
            </div>   
            
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="control-label">Full  Name</label>
                      <input type="text" class="form-control form-control-user" id="name" placeholder="Enter Full Name" required="true" name="name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control form-control-user" id="email" placeholder="Enter Email Address" required="true" name="email">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="control-label">Password</label>
                      <input type="text" class="form-control form-control-user" id="passwd" placeholder="Enter Password" required="true" name="passwd">
                    </div>
                    <!--div class="col-sm-6">
                      <label class="control-label">Repeate Password</label>
                      <input type="text" class="form-control form-control-user" id="repasswd" required="true" placeholder="Repeat Password" name="repasswd">
                    </div-->
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label class="control-label">Phone Number</label>
                      <input type="text" maxlength="10" class="form-control form-control-user" id="phoneno" required="true" placeholder="Example 075204326" name="phoneno">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="status">
                      <option selected>Choose Status...</option>
                      <option value="Manager Directory">Manager Directory</option>
                      <option value="Project Manager">Project Manager</option>
                      <option value="Assistant Project Manager">Assistant Project Manager</option>
                      <option value="Project Manager">Project Manager</option>
                      <option value="Accountant">Accountant</option>
                      <option value="Engineer">Other Staff</option>
                    </select>
                  </div>
                  <button class="btn btn-primary btn-block btn-lg" name="btnregister1"> 
                    Register Account</button> 
                  </a>
                  <hr>
      </form>
        </div>
      </div>
      </div>
    </div>
      
  </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <!--script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script-->
    <!--script type="text/javascript">

  function loadReg() {
  //window.alert("Tbaba is here");
  var id = document.getElementById("exampleLastName").value;
  var id = document.getElementById("exampleLastName").value;
  var id = document.getElementById("exampleLastName").value;
  var id = document.getElementById("exampleLastName").value;
  var id = document.getElementById("exampleLastName").value;
  var id = document.getElementById("exampleLastName").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("regID").innerHTML = this.responseText;
      
    }
  };
  xhttp.open("POST", "insertuser.php", true);
  xhttp.send();
  window.alert();
}
  </script-->
      <footer style="position: relative;">
      <center>&copy 2020 peertech All rights are reserved</center>
    </footer>
  </body>
</html>
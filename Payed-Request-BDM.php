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
    <title>Approval System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/registrationcss.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
<style type="text/css">
                .setColumnWidth{
                  max-width: 300px;
                }

                .contact div{
                  overflow-wrap: break-word;
                  text-align: justify;
                  word-break: break-word;
                  width: inherit;
                } 
</style>

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
                      <input type="Number" class="form-control form-control-user" id="phoneno" required="true" placeholder="Example 075204326" name="phoneno">
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
            <li><a class="dropdown-item" href="setting-BDM.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>        
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
    </header>s
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/peertech.PNG">
        <div>
          <!--p class="app-sidebar__user-name">Admin</p-->
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="home-BDM.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li><a class="app-menu__item" href="Request-BDM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Request</span></a></li>
         <li><a class="app-menu__item" href="Project-registration-BDM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Project Registration</span></a></li>
         <li><a class="app-menu__item" href="Approve-Request-BDM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Approve Request</span></a></li>
        <li><a class="app-menu__item" href="Accepted-Request-BDM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Accepted Request</span></a></li>
         <li><a class="app-menu__item" href="Dismissed-Request-BDM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Dismissed Request</span></a></li>
         <li><a class="app-menu__item active" href="Payed-Request-BDM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Payed Request</span></a></li>
         <li><a class="app-menu__item" href="report-BDM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Print Report</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>PAYED REQUEST </h1>
          <p>Welcome</p>
        </div>
        <!--ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul-->
      </div>
            <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12col-md-12">
          <div class="tile">
            <h3 class="tile-title">Payed Request</h3>
            <div class="tile-body">
              <?php

include("connection.php");

//$sql="select e.Name,e.Email,p.Project_Name,p.Project_Location,o.Order_Description,o.Order_Amount from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID and o.Order_Status='Not checked' and o.Order_Review='Not accepted' and o.Payed='No'";

$sql="select e.Name,e.Email,p.Project_Name,p.Project_Location,o.Order_Description,o.Order_Amount from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' order by Date_After";

$query = mysqli_query($con,$sql);

echo "<table class='table table-responsive table-striped'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Requestor</th>
      <th scope='col'>Email</th>
      <th scope='col'>Project Name</th>
      <th scope='col'>Project Location</th>
      <th scope='col'>Request Description</th>
      <th scope='col'>Total Cost</th>
    </tr>
  </thead>
";
while($row=mysqli_fetch_array($query)){
  echo "
    <tr>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td>$row[2]</td>
      <td>$row[3]</td>
      <td class='setColumnWidth contact'><div>$row[4]</div></td>
      <td>$row[5]</td>
 


    </tr>";

}
echo "</table>";

?>
            </div>
          </div>
        </div>
        <div class="clearix"></div>
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
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-72504830-1', 'auto');
        ga('send', 'pageview');
      }
    </script>
        <footer style="position: relative;">
      <center>&copy 2020 peertech All rights are reserved</center>
    </footer>
  </body>
</html>
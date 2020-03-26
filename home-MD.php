<?php
 session_start();
 if (isset($_SESSION["email"])) {
   
 }else{
  header("location:index.php");
 }
 $_SESSION['ok']=1;
 $_SESSION['nice']=1;
 $_SESSION['tayari']=1;
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
            <li><a class="dropdown-item" href="setting-MD.php"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
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
       <li><a class="app-menu__item active" href="home-MD.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li><a class="app-menu__item" href="Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Request</span></a></li>
        <li><a class="app-menu__item" href="Project-registration-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Project Registration</span></a></li>
         <li><a class="app-menu__item" href="Approve-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Approve Request</span></a></li>
          <li><a class="app-menu__item" href="Accepted-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Accepted Request</span></a></li>
         <li><a class="app-menu__item" href="Dismissed-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Dismissed Request</span></a></li>
         <li><a class="app-menu__item" href="Payed-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Payed Request</span></a></li>
         <li><a class="app-menu__item " href="report-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Print Report</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Home</h1>
          <p>Welcome</p>
        </div>
        <!--ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul-->
      </div>
      
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Monthly Sales</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Support Requests</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
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
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 56]
          },
          {
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [28, 48, 40, 19, 86]
          }
        ]
      };
      var pdata = [
        {
          value: 300,
          color: "#46BFBD",
          highlight: "#5AD3D1",
          label: "Complete"
        },
        {
          value: 50,
          color:"#F7464A",
          highlight: "#FF5A5E",
          label: "In-Progress"
        }
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
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
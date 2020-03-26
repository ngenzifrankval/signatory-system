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
    <title>Blank Page - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/custome.css" rel="stylesheet">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">TBABA</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <!--div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="image/pic1.jpg"  width="25px" height="25px" alt="User Image"> User
      </div-->
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
          <!--p class="app-sidebar__user-designation">Frontend Developer</p-->
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        
      </ul>
    </aside>


<!--Start of form container-->
<!--div class="container"-->

<!--Start of main contents-->
<main class="app-content">
      <div class="app-title">
        <div>
          <!--h1><i class="fa fa-dashboard"></i> Home</h1-->
          <p>Registration</p>
        </div>
        <!--ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul-->
      </div>
<div class="container">
  <div class="row">
   
    <div class="col-md-3 col-sm-3 col-lg-2 col-xl-12"></div>
    <div class="col-md-6 col-sm-6 col-lg-8 col-xl-12">
      
      <form class="user">
        <div class="form-group row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <h1>Create an Account!</h1>
            </div>
        </div>    
        

                  <div class="form-group row">
                  
                    <div class="col-sm-12">
                      <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Enter Full Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 ">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                      <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="password" class="form-control form-control-user" id="examplePhoneNo" placeholder="Phone Number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status</label>
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                      <option selected>Choose...</option>
                      <option value="MD">Manager Directory</option>
                      <option value="PM">Project Manager</option>
                      <option value="BDM">Business Dev. Manager</option>
                      <option value="AC">Accountant</option>
                      <option value="APM">Assistant PM</option>
                      <option value="Eng">Engineer</option>
                    </select>
                  </div>
                  <a href="login.html" class="btn btn-primary btn-user btn-block">
                    Register Account
                  </a>
                  <hr>
                  
      
      </form>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-2 col-xl-12"></div>
    </div>
      
  </div>
</div>
  
</main>

    <!--Essential javascripts for application to work-->
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





  </body>
</html>
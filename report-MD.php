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
    <?php include("print.php");?>
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
    <script type="text/javascript" src="tbaba.js"></script>
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
    <li><a class="app-menu__item" href="home-MD.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li><a class="app-menu__item" href="Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Request</span></a></li>
        <li><a class="app-menu__item" href="Project-registration-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Project Registration</span></a></li>
         <li><a class="app-menu__item" href="Approve-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Approve Request</span></a></li>
          <li><a class="app-menu__item " href="Accepted-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Accepted Request</span></a></li>
         <li><a class="app-menu__item" href="Dismissed-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Dismissed Request</span></a></li>
         <li><a class="app-menu__item" href="Payed-Request-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Payed Request</span></a></li>
         <li><a class="app-menu__item active" href="report-MD.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Print Report</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>REPORT </h1>
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
            <h3 class="tile-title">Print report</h3>
            <div class="tile-body">

             <!--  <form action="insertrequest.php" method="POST">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-12 col-xl-12 col-md-12 col-xs-12 col-sm-12">
                          <div class="form-group">
                          <div class="input-group">
                          <div class="input-group-prepend"><span class="input-group-text">
                            <select  class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="selectedProject">
                              <?php
                              include("connection.php");
                                //$link=mysqli_connect("localhost","root","");
                                //mysqli_select_db($link,"signatory");
                                $res=mysqli_query($con,"select Project_ID,Project_Name from project ");
                                while($row=mysqli_fetch_array($res))
                                {

                                ?>
                                <option value="<?php echo $row['Project_ID']?>"><?php echo $row["Project_Name"]; ?></option>
                                <?php
                                }

                                ?>

                            </select>
                          </span></div>
                          <div class="input-group-append"><span class="input-group-text">
                            <button type="submit" name="btnsearch">
                              <i class="fa fa-search"></i>
                            </button>
                          </span>
                          </div>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </form> -->

<form action="insertrequest.php" method="POST">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3 col-xl-3 col-md-3 col-xs-3 col-sm-3">
                          <div class="form-group">

                    <select  class="custom-select my-1 mr-sm-2"
                     name="selectedClient" id="university" onchange="loadCollege();">
                    <option value="">Select client</option>
                      <?php
                      include("connection.php");
                        $res=mysqli_query($con,"select distinct Client_Name from project");
                        while($row=mysqli_fetch_array($res))
                        {

                        ?>

                        <option value="<?php echo $row['Client_Name']?>"><?php echo $row["Client_Name"]; ?></option>
                        <?php
                        }

                        ?>

                    </select>



                        </div>
                    </div>

                    <div class="col-lg-3 col-xl-3 col-md-3 col-xs-3 col-sm-3">
                          <div class="form-group">
            <!--div id="collegeDiv"-->
              <!--select name="college" id="college">
                <option value=''>Select project</option>
              </select-->


          <select  class="custom-select my-1 mr-sm-2 " id="collegeDiv" name="selectedProject" onchange="loadSchool();">
                    <option value="">Select project</option>
                      <?php
                      include("connection.php");
                        $res=mysqli_query($con,"select Project_Name from project ");
                        while($row=mysqli_fetch_array($res))
                        {

                        ?>

                        <option value="<?php echo $row['Project_Name']?>"><?php echo $row["Project_Name"]; ?></option>
                        <?php
                        }

                        ?>

                    </select>


            <!--/div-->
                        </div>
                    </div>



                    <div class="col-lg-2 col-xl-2 col-md-2 col-xs-2 col-sm-2">
                      <div class="form-group">
                          <input type="date" name="from" class="form-control date" >
                      </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 col-md-2 col-xs-2 col-sm-2">      
                      <div class="form-group">
                          <input type="date" name="to" class="form-control date" >
                      </div>
                    </div>


                    <div class="col-lg-2 col-xl-2 col-md-2 col-xs-2 col-sm-2">
                        <div class="form-group">
 
                            <button type="submit" name="btnsearch" class="btn btn-block">
                              <i class="fa fa-search"></i>
                            </button>

                        </div>
                    </div>

                  </div>
                </div>
              </form>

        <fieldset class="bigField" style="width: 100%;" id="MyDocument" >
<div style="border: 1px solid black;">
<div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12 col-xs-12">
       <center><h3>PROJECT REPORT</h3></center>
      </div>
  </div>
  <div class="row">
  <div class="col-sm-9 col-lg-9 col-md-9 col-xl-9 col-xs-9">
    <img src="images/peertech.PNG " height="180px" width="150px" style="margin-top: 0px;">
  </div>
  <div class="col-sm-3 col-lg-3 col-md-3 col-xl-3 col-xs-3">
    <h5>PeerTech Company Limited</h5>
    <h5>Mikocheni Block B, house No.10</h5>
    <h5>P.O.Box 31734</h5>
    <h5>Dar es salaam</h5>
    <h5>Tel: +255222780882</h5>
    <h5>Website: www.peertech.co.tz</h5>
  </div>  
</div>
</div>
        <!--legend style="margin-top: 60px;">CHILD BIRTH CERTIFICATE</legend-->
        
              <?php

include("connection.php");

//$sql="select e.Name,e.Email,p.Project_Name,p.Project_Location,o.Order_Description,o.Order_Amount from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID and o.Order_Status='Not checked' and o.Order_Review='Not accepted' and o.Payed='No'";


if (isset($_SESSION["selectedClient"]) || isset($_SESSION["search"]) || (isset($_SESSION["from"]) && isset($_SESSION['to']))) {
  if ( $_SESSION['selectedClient'] == 'ok' || $_SESSION['search'] == 'ok' || $_SESSION['from'] == 'ok' || $_SESSION['to'] == 'ok') {
  # code...
}
else{


$id = $_SESSION['search'];
$selectedClient = $_SESSION['selectedClient'];
$from=$_SESSION['from'];
$to=$_SESSION['to'];
$sql;

//$sql="select e.Name,o.Date_After,p.Project_Name,p.Project_Location,o.Order_Description,o.Order_Amount from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' and p.Project_ID='$id'";
if ($selectedClient != '' && $id == '' && ($from=='' && $to=='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' order by Date_After";  
}
else if ($selectedClient != '' && $id != '' && ($from=='' && $to=='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' and p.Project_Name='$id' order by Date_After";
}
else if ($selectedClient != '' && $id == '' && ($from!='' && $to!='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' and (Date_After between '$from' and '$to') order by Date_After";
}
else if ($id != '' && $selectedClient == '' && ($from=='' && $to=='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Project_Name='$id' order by Date_After";
}
else if ($id != '' && $selectedClient != '' && ($from=='' && $to=='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' and p.Project_Name='$id' order by Date_After";
}
else if ($id != '' && $selectedClient == '' && ($from!='' && $to!='')) {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Project_Name='$id' and (Date_After between '$from' and '$to') order by Date_After";
}
else if($from!='' && $to!='' && $id == '' && $selectedClient == '') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' and (Date_After between '$from' and '$to') order by Date_After";
}
else if($from!='' && $to!='' && $id != '' && $selectedClient == '') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Project_Name='$id' and (Date_After between '$from' and '$to') order by Date_After";
}
else if($from!='' && $to!='' && $id == '' && $selectedClient != '') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and p.Client_Name='$selectedClient' and (Date_After between '$from' and '$to') order by Date_After";
}
//neeeeeeeeeeeeeeeeeeeeeeeeeeeew
else if($from!='' && $to=='') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and Date_After = '$from'  order by Date_After";
}
else if($from=='' && $to !='') {
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes'  and Date_After = '$to'  order by Date_After";
}
else if($id != '' && $selectedClient != '' && ($from!='' && $to!='')){
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' and p.Project_Name='$id' and p.Client_Name='$selectedClient' and Date_After between '$from' and '$to' order by Date_After";
}
else if($id == '' && $selectedClient == '' && ($from=='' && $to=='')){
  $sql="select e.Name,p.Project_Name,o.Order_Description,o.Date_After,o.Order_Amount,o.Order_Review,o.order_Review2 from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID  and o.Payed='Yes' and p.Project_Name='' and p.Client_Name='' and Date_After between '' and '' order by Date_After";
}


$query = mysqli_query($con,$sql);
$_SESSION['selectedClient'] = 'ok';
$_SESSION['search'] = 'ok';
$_SESSION['from'] = 'ok';
$_SESSION['to'] = 'ok';
echo "<table class='table table-striped'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>Requestor</th>
      <th scope='col'>Project Name</th>
      <th scope='col'>Description</th>
      <th scope='col'>Approver</th>
      <th scope='col'>Payed Date</th>
      <th scope='col'>Amount</th>
    </tr>
  </thead>
";
$sum = 0;
while($row=mysqli_fetch_array($query)){
  $review1=$row[5];
  $review2=$row[6];
  if (($review1=='acceptedPM' && $review2=='acceptedMD')) {
    $query2="select Email,Name from employee where Status='Project Manager'";
    $query3="select Email,Name from employee where Status='Manager Directory'";
    $run2=mysqli_query($con,$query2);
    $run3=mysqli_query($con,$query3);
    while ($rows=mysqli_fetch_array($run2)) {
      $jibu1=$rows[1];
    }
        while ($rows=mysqli_fetch_array($run3)) {
      $jibu2=$rows[1];
    }
  echo "
    <tr class='responsive'>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td class='setColumnWidth contact'><div>$row[2]</div></td>
      <!--td>Project Manager and Manager Director</td-->
      <td>$jibu1 and $jibu2</td>
      <td>$row[3]</td>
      <td>$row[4]</td>
      


    </tr>";    
  }
  if (($review1=='acceptedPM' && $review2=='acceptedBDM')) {
    $query2="select Email,Name from employee where Status='Project Manager'";
    $query3="select Email,Name from employee where Status='Business Development Manager'";
    $run2=mysqli_query($con,$query2);
    $run3=mysqli_query($con,$query3);
    while ($rows=mysqli_fetch_array($run2)) {
      $jibu1=$rows[1];
    }
        while ($rows=mysqli_fetch_array($run3)) {
      $jibu2=$rows[1];
    }
  echo "
    <tr class='responsive'>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td class='setColumnWidth contact'><div>$row[2]</div></td>
      <td>$jibu1 and $jibu2</td>
      <td>$row[3]</td>
      <td>$row[4]</td>




    </tr>";
  }
  if (($review1=='acceptedMD' && $review2=='acceptedPM')) {
  echo "
    <tr class='responsive'>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td class='setColumnWidth contact'><div>$row[2]</div></td>
      <td>Manager Director and Project Manager</td>
      <td>$row[3]</td>
      <td>$row[4]</td>

      


    </tr>";
  }
  if (($review1=='acceptedMD' && $review2=='acceptedBDM')) {
  echo "
    <tr class='responsive'>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td class='setColumnWidth contact'><div>$row[2]</div></td>
      <td>Manager Director and Business Develop manager</td>
      <td>$row[3]</td>
      <td>$row[4]</td>

      


    </tr>";
  }
  if (($review1=='acceptedBDM' && $review2=='acceptedMD')) {
  echo "
    <tr class='responsive'>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td class='setColumnWidth contact'><div>$row[2]</div></td>
      <td>Business Develop manager and Manager Director</td
      <td>$row[3]</td>
      <td>$row[4]</td>

      >


    </tr>";
  }
  if (($review1=='acceptedBDM' && $review2=='acceptedPM')) {
  echo "
    <tr class='responsive'>
      <td>$row[0]</td>
      <td>$row[1]</td>
      <td class='setColumnWidth contact'><div>$row[2]</div></td>
      <td>Business Develop manager and Project Manager</td>
      <td>$row[3]</td>
      <td>$row[4]</td>

      


    </tr>";
  }


    $sum+=$row[4];

}
echo "
<tr>
<td colspan='5' class='text-right'>
<b><i><h3>Total Cost</h3></i></b>
</td>
<td>
      <h3>$sum</h3>
</td>
</tr>
";
echo "</table>";
}
}


?>
  </div>
    </fieldset>

  <button type="submit" class="btn btn-block btn-primary btn-lg" onclick="PrintContent('MyDocument')">Print Report</button>
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
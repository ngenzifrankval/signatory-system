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
       <li><a class="app-menu__item" href="home-PM.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
        <li><a class="app-menu__item" href="Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Request</span></a></li>
         <li><a class="app-menu__item" href="Registration.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">User Registration</span></a></li>
         <li><a class="app-menu__item" href="Project-registration-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Project Registration</span></a></li>
         <li><a class="app-menu__item active" href="Approve-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Approve Request</span></a></li>
        <li><a class="app-menu__item" href="Accepted-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Accepted Request</span></a></li>
         <li><a class="app-menu__item" href="Dismissed-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Dismissed Request</span></a></li>
         <li><a class="app-menu__item" href="Payed-Request-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Payed Request</span></a></li>
         <li><a class="app-menu__item" href="report-PM.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Print Report</span></a></li>
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> APPROVE REQUEST</h1>
          <p>Welcome</p>

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

        </div>
        <!--ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul-->
      </div>
      <div class="container">
            <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12col-md-12"></div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12col-md-12">
          <div class="tile">




            <h3 class="tile-title">Approve Request</h3>

            <?php
              if(isset($_SESSION['approvePM'])){
                if ($_SESSION['approvePM'] == 2){
                  //echo $_SESSION['approve'];
                  $_SESSION['approvePM']=1;
               echo "<div class='alert' id='hide1'>
               <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>    
               <strong>Info!</strong> Request is approved.  
               </div>";

                }
                else if ($_SESSION['approvePM'] == 3) {
                $_SESSION['approvePM']=1;
                 echo "<div class='alert1'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo "<strong>Error!</strong> This request you have already approve it!.";   
               echo "</div>";
              }
              else if ($_SESSION['approvePM'] == 4) {
                $_SESSION['approvePM']=1;
                 echo "<div class='alert1'>";
               echo "<span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span> ";   
               echo "<strong>Error!</strong> You can't approve your own request..!";   
               echo "</div>";
              }

              }


              if(isset($_SESSION['dismissPM'])){
                if ($_SESSION['dismissPM'] == 2){
                  //echo $_SESSION['approve'];
                $_SESSION['dismissPM'] = 1;
               echo "<div class='alert' id='hide1'>
               <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>    
               <strong>Info!</strong> Request rejection done!.  
               </div>";

                }
                else if($_SESSION['dismissPM'] == 3) {
                  $_SESSION['dismissPM'] = 1;
                 echo "<div class='alert1' id='hide1'>
                 <span class=\"closebtn\" onclick=\"this.parentElement.style.display='none';\">&times;</span>    
                 <strong>Info!</strong> Request rejection not success! 
                 </div>";
                }
              }  

            ?>

            <div class="tile-body">
              <!--form onload="">

              </form-->
              <?php

include("connection.php");

//$sql="select o.Order_ID,e.Name,e.Email,p.Project_Name,p.Project_Location,o.Order_Description,o.Order_Amount from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID and o.Order_Status='Checked' and((o.Order_Review='Not accepted' and o.Order_Review2='Not accepted') or (o.Order_Review='Not accepted' and o.Order_Review2='accepted') or (o.Order_Review='accepted' and o.Order_Review2='Not accepted')) and o.Payed='No'";

$sql="select o.Order_ID,e.Name,e.Email,p.Project_Name,p.Project_Location,o.Order_Description,p.Client_Name,o.Order_Amount,e.Phone_No,p.Start_Date,p.End_Date,p.Project_Desc,p.po,o.Attach from employee as e,orders as o,project as p where e.Email=o.Email and p.Project_ID=o.Project_ID and o.Order_Status='Checked' and((o.Order_Review='Not accepted' and o.Order_Review2='Not accepted') or (o.Order_Review2='Not accepted' and o.Order_Review='acceptedPM') or (o.Order_Review2='Not accepted' and o.Order_Review='acceptedBDM') or (o.Order_Review2='Not accepted' and o.Order_Review='acceptedMD')) and o.Payed='No' and o.Order_Comment='No comment'";

$query = mysqli_query($con,$sql);

echo "<table class='table table-responsive table-striped table-hover'>
  <thead class='thead-dark'>
    <tr>
     
      <th scope='col'>Requestor Name</th>
      <!--th scope='col'>Client Name</th-->
      <th scope='col'>Project Name</th>
      <!--th scope='col'>Project Location</th-->
      <th scope='col'>Request Description</th>
      <th scope='col'>Total Cost</th>
      <th scope='col'>Approve</th>
      <th scope='col'>Dismiss</th>
    </tr>
  </thead>
";
while($row=mysqli_fetch_array($query)){
  ?>

<?php  
  echo "
    <tr>
        
      <td><div data-toggle='modal' data-target='#$row[0]$row[6]' data-toggle='tooltip' title='Click here for more details!'>$row[1]</div></td>
      <!--td>$row[6]</td-->
      <td>$row[3]</td>
       <td class='setColumnWidth contact'><div>$row[5]</div></td>
      <td>$row[7]</td>
     
      <!--td>$row[6]</td-->  

<!-- Modal -->
<form class='user' action='insertrequest.php' method='POST'>

<div class='modal fade' id='$row[0]' data-backdrop='static' tabindex='-1' role='dialog' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='staticBackdropLabel'>Comment session</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
            <div class='form-group row'>
                <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                  <center><h1>COMMENT</h1></center>
                  <input type='hidden' name='idDismiss' value='$row[0]' />
                </div>
            </div> 
            <div class='form-group'>
                  <!--textarea class='form-control' required='true' rows='6' placeholder='Enter your Description' autocomplete='off' name='txtArea'>
                  </textarea-->
                  <textarea class='form-control' placeholder='Enter decription' rows='6' cols='20' name='txtArea' required></textarea>
            </div>      
          
      
        </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>
        <button type='submit' class='btn btn-primary' name='btnsendcomment'>Send</button>
      </div>
     
  

    </div>
  </div>
</div>
</form> 
<!-- End of Modal -->


<!-- Modal 2-->
<div class=\"modal fade\" id=\"$row[0]$row[6]\" data-backdrop=\"static\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"staticBackdropLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"staticBackdropLabel\"></h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          <form>
            <div class=\"form-group row\">
                <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-12\">
                  <CENTER><h1>More details about requestor</h1></CENTER>
                 
                </div>
            </div>
            <div class=\"form-group\">
                    <label >Phone Number</label>
                  <input type=\"text\" class=\"form-control\" required=\"true\" rows=\"6\" placeholder=\"Phone number\" autocomplete=\"off\" value='0$row[8]' readonly />
            </div> 
            <div class=\"form-group\">
            <label >Email</label>
                  <input type=\"text\" class=\"form-control\" required=\"true\" rows=\"6\" placeholder=\"Start date\" autocomplete=\"off\" value='$row[2]' readonly />
            </div> 
            <div class=\"form-group\">
            <label >Client Name</label>
                  <input type=\"text\" class=\"form-control\" required=\"true\" rows=\"6\" placeholder=\"Client name\" autocomplete=\"off\" value='$row[6]' readonly />
            </div> 
            <div class=\"form-group\">
                   <label>Start Date of project</label>
                  <input type=\"text\" class=\"form-control\" required=\"true\" rows=\"6\" placeholder=\"Start date\" autocomplete=\"off\" value='$row[9]' readonly />
            </div>   
            <div class=\"form-group\">
                  <label>End Date of project</label>
                  <input type=\"text\" class=\"form-control\" required=\"true\" rows=\"6\" placeholder=\"End date\" autocomplete=\"off\" name=\"txtArea\" value='$row[10]' readonly />
            </div> 
            <div class=\"form-group\">
                  <label>Project Description</label>
                  <textarea type=\"text\" class=\"form-control\" required=\"true\" placeholder=\"End date\" autocomplete=\"off\" name=\"txtArea\"readonly>$row[11]</textarea>
            </div>
            <div class=\"form-group\">
                  <label>View Project Attachment</label></br>
                  <b><i><label download=\"<?php echo $row[12]?>\"><a href='images/$row[12]'>$row[12]</a></label></b></i>
            </div>
            <div class=\"form-group\">
                  <label>View Request Attachment</label></br>
                  <b><i><label download=\"<?php echo $row[13]?>\"><a href='images2/$row[13]'>$row[13]</a></label></b></i>
            </div>     
     
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Back</button>
        <!--button type=\"submit\" class=\"btn btn-primary\" name=\"btnsendcomment\">Send</button-->
      </div>
       </form>
    </div>
  </div>
</div>
<!-- End of Modal -->


      
      <form action='insertrequest.php' method='POST'>
      <td class='text-right'>
        <input type='hidden' name='id' value='$row[0]'/>
        <button class='btn btn-primary badge-pill' style='width: 80px' name='btnsendrequest'>APPROVE</button></br>
      </td>
      </form>
        <td class='text-right'>
        <input type='hidden' name='id' value='$row[0]'/>
          <button class='btn btn-danger badge-pill' style='width: 80px' data-toggle='modal' data-target='#$row[0]' name='btndismisscomment'>DISMISS</button>
        </td>
    </tr>";




}
  echo "</table>";

?>

            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12col-md-12"></div>
        <div class="clearix"></div>
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




<div class='modal fade' id='$row[0]' data-backdrop='static' tabindex='-1' role='dialog' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='staticBackdropLabel'>Comment session</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <form class='user' action='insertrequest.php' method='POST'>
      <div class='modal-body'>
            <div class='form-group row'>
                <div class='col-sm-12 col-md-12 col-lg-12 col-xl-12'>
                  <center><h1>COMMENT</h1></center>
                  <input type='hidden' name='idDismiss' value='$row[0]' />
                </div>
            </div> 
            <div class='form-group'>
                  <!-- class='form-control' required='true' placeholder='Enter your Description' autocomplete='off' name='txtArea'></textarea-->
                  <input type='text' class='form-control' name='txtArea' />
            </div>      
          
      
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>
        <button type='submit' class='btn btn-primary' name='btnsendcomment'>Send</button>
      </div>
      </form>
  

    </div>
  </div>
</div>

  </body>
</html>
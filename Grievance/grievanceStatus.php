
<?php
session_start();

if ($_SESSION['isUserLogin']=="N") {
  echo '<script type="text/javascript">
  alert("you are not logged in")
</script>';

header("Location: index.php");
exit;
}

$dbname = "grievanceSystem";
$con = mysqli_connect("localhost","root","",$dbname);
if(!$con){
  die("Connection Failed :" + mysqli_connect_error());
}

$sql = "SELECT * FROM grievancetable WHERE ID = '".$_GET['ID']."'  ";
$query = mysqli_query($GLOBALS['con'],$sql);

$row=mysqli_fetch_assoc($query);

mysqli_close($con);

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Tell the browser to be responsive to screen width -->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <noscript>
       <meta http-equiv="refresh" content="0;url=/NoJScript" />
   </noscript>
   <title>GRA-Home</title>
   <!-- Bootstrap 3.3.6 -->
   <link href="./Content/bootstrap.min.css" rel="stylesheet" />
   <!-- Font Awesome -->
   <link href="./Content/font-awesome.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Theme style -->
   <link href="./Content/admin-lte/css/AdminLTE.min.css" rel="stylesheet" />
   <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
   <link href="./Content/admin-lte/css/skins/_all-skins.min.css" rel="stylesheet" />
   <!-- jQuery -->
   <script src="./Scripts/jquery-3.3.1.min.js"></script>
   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
   <link href="./Content/Style.css" rel="stylesheet" />



   <meta name="description" content="The description of my page" />
   <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
   <link rel="icon" href="./images/favicon.ico" type="image/x-icon">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">



<div class="header-wrapper">
        <div class="container header-container">
            <h1 class="logo" align="center">
                <img class="national_emblem" src="./Images/7.png" height="90px" alt="national emblem">
                <br><br>

                <span class="ad4 text-capitalize" style="font-weight: 900; color: orangered">Grievance Redressal System</span>

            </h1>
            <div class="header-right clearfix">
                <div class="right-content clearfix">
                    <div class="float-element">
                        <a class="sw-logo" target="_blank" href= "" title="Municipal Corporation">
                            <img src="./Images/Help.png" height="90px" alt="GMC">
                        </a>

                    </div>
                </div>
            </div>
        </div>

   </div>
   <div class="wrapper" >
       <header class="main-header">
           <nav class="navbar navbar-static-top bg-blue-active">
               <div class="container">
                   <div class="navbar-header">

                       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                           <i class="fa fa-bars"></i>
                       </button>
                   </div>
                   <!-- Collect the nav links, forms, and other content for toggling -->
                   <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                       <ul class="nav navbar-nav">
                         <li>
                                 <a href="loginPage.php"><i class="fa fa-home"></i> <strong>Home</strong></a>
                         </li>
                         <li><a href="aboutUs.php"><strong><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;About Us</strong></a></li>
                         <li><a href="status.php"><strong><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View Status</strong></a></li>
                         <li><a href="newGrievance.php" class="dropdown-toggle" data-toggle="dropdown"><strong><i class="fa fa-file-o" aria-hidden="true"></i>&nbsp;Grievance </strong> <span class="caret"></span></a></li>
                         <li ><a href="flow.php" class="dropdown-toggle" data-toggle="dropdown"><strong><i class="fa fa-road" aria-hidden="true"></i>&nbsp;Redress Process</strong> <span class="caret"></span></a></li>
                         <li ><a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Guidelines</strong> <span class="caret"></span></a></li>
                         <li><a href="faq.php"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;<strong>FAQ</strong></a></li>

                           <li><a ><i class="fa fa-user" aria-hidden="true"></i>&nbsp;<strong>Welcome!  <?php echo " ".$_SESSION['sess_name'];?></strong></a></li>
                           <li><a href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;<strong>logout</strong></a></li>
                       </ul>
                   </div>
                   <!-- /.navbar-collapse -->
                   <!-- Navbar Right Menu -->
                   <div class="navbar-custom-menu">
                       <ul class="nav navbar-nav">
                           <!-- User Account Menu -->
                           <li class="dropdown user user-menu">
                               <!-- Menu Toggle Button -->

                           </li>

                       </ul>
                   </div>
                   <!-- /.navbar-custom-menu -->
               </div>
               <!-- /.container-fluid -->
           </nav>
       </header>
       <!-- Full Width Column -->
       <div class="content-wrapper">
           <div class="container">

               <!-- Main content -->
               <section class="content">

               <div class="box box-primary">
                   <div class="box-header text-center"><h4 class="text-info">Grievance Status for registration number : <?php echo $row['ID'];?> </h4></div>
                   <div class="box-body">

                       <div class="row show-grid ">
                           <div class="col-md-12 bg-gray text-center"><strong> Grievance Concerns To </strong></div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Name Of Complainant </strong></div>
                           <div class="col-md-9 "><?php echo $row['name'];?></div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Date of Receipt </strong></div>
                           <div class="col-md-9 "><?php echo $row['recievedDate'];?> </div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Received By Department </strong></div>
                           <div class="col-md-9 "><?php echo $row['department'];?></div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> sub Division </strong></div>
                           <div class="col-md-9 "><?php echo $row['subdivision'];?></div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Grievance Description </strong></div>
                           <div class="col-md-9 "><?php echo $row['GrievanceDescription'];?></div>
                       </div>

                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Current Status </strong></div>
                           <div class="col-md-9 "><?php echo $row['status'];?></div>
                       </div>


                               <div class="row show-grid ">
                           <div class="col-md-12 bg-gray text-center"><strong> Officer Concerns To </strong></div>
                       </div>
                           <div class="row show-grid">
                               <div class="col-md-3"><strong> Forwarded to </strong></div>
                               <div class="col-md-9 "><?php echo $row['department'];?></div>
                           </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Officer Name </strong></div>
                           <div class="col-md-9 ">Mr Yuvraj Narayan Mishra</div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Officer Designation </strong></div>
                           <div class="col-md-9 "></div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Contact Address </strong></div>
                           <div class="col-md-9 "></div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Email Address </strong></div>
                           <div class="col-md-9 "></div>
                       </div>
                       <div class="row show-grid">
                           <div class="col-md-3"><strong> Contact Number </strong></div>
                           <div class="col-md-9 "></div>
                       </div>



                   </div>
                   <div class="box-footer">
                       <div class="row show-grid">
                           <div class="col-md-9 col-md-offset-3">
                                       <a class="btn btn-info btn-social" href="loginPage.php">
                                           <i class="fa fa-arrow-circle-left"></i> Back to Home
                                       </a>
                           </div>
                       </div>
                   </div>
               </div>
                               </section>

               <!-- /.content -->
           </div>
           <!-- /.container -->
       </div>
       <!-- /.content-wrapper -->
       <footer class="main-footer bg-light-blue-active">
           <div class="container">

           <div class="row">
                    <div class="col-md-6">
                        <a href="#"><strong style="color: #ffffff">Contact Us : </strong>  </a>
                        <br />
                        <a href="#"><strong style="color: #ffffff">Disclaimer</strong></a>
                        <br />
                        <b>Version</b> 1, <strong>Copyright &copy; </strong> 2023
                    </div>
                    <div style="line-height: 18px;border-left:solid 1px #668aee" class="col-md-6">

                                <span>This site is designed, developed, hosted and maintained by <br /><a target="_blank" href=""><img alt="Logo" style="border-radius: 50%" src='./Images/kiet.jpg' height="50pt" width="50pt" /></a> Department of Computer Science,<br>KIET Group Of Institutions, Ghaziabad.</span>

                    </div>
                </div>
            </div>
           <!-- /.container -->
       </footer>
   </div>
   <!-- ./wrapper -->
   <!-- Bootstrap -->
   <script src="/Scripts/bootstrap.min.js"></script>
   <!-- SlimScroll -->

   <!-- FastClick -->

   <!-- AdminLTE App -->
   <script src="/Scripts/app.min.js"></script>
   <script src="/Scripts/Custom/Browser.js"></script>
   <script src="/Scripts/Custom/RefreshCaptcha.js"></script>
   <script src="/Scripts/Custom/SubmitButtonDesable.js"></script>
   <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
   <script src="/sweetAlert2/promise.min.js"></script>
   <script src="/sweetAlert2/sweetalert2.all.min.js"></script>


   <script src="/Scripts/jquery.validate.min.js"></script>
   <script src="/Scripts/jquery.validate.unobtrusive.min.js"></script>
   <script src="/Scripts/sha256.min.js"></script>
   <script src="/Scripts/sha512.js"></script>
   <script src="/Scripts/Custom/DesableEnterKey.js"></script>
   <script src="/Scripts/Custom/customValidationAttribute.js"></script>

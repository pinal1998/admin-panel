<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "visitoradmin");

if(!isset($_SESSION['st_id']))
{
    header("location:login.php");
    
    
    
}

if($_POST)
{
   $opass=$_POST['opass'];
   $npass=$_POST['npass'];
   $cpass=$_POST['cpass'];
   
   $oldpasswordquery = mysqli_query($connection, "select st_password from tbl_user where st_id='{$_SESSION['st_id']}'") or die (mysqli_error($connection));
   $oldpasswordfromdb = mysqli_fetch_array($oldpasswordquery);
   
   if($oldpasswordfromdb ['st_password'] ==$opass)
   {
     if($npass == $cpass)
         
     {
         if($opass == $npass)
             {
             echo "<script>alert('Old Password And New Password Must Be Differnet');</script>";
             
     } 
         else
             {
             $updateq = mysqli_query($connection, "update tbl_user set st_password = '{$npass}' where st_id ='{$_SESSION['st_id']}'") or die (mysqli_error($connection));
             
             if($updateq)
             {
                 echo "<script>alert('Password Changed');</script>";
             }
             }
       
     } else 
         {
         echo "<script>alert('New and Confirm Password Must Be Same');</script>";
         }
         
       
   } else 
       {
       
       echo "<script>alert('old password not match');</script>";
       
   }
    
    
    
}
   

?>
<!DOCTYPE html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        VISITOR
    </a>
    
</div>


        
       
        
<div class="top-nav clearfix">
  
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        
       
    </ul>
  
</div>
</header>



<aside>
    <div id="sidebar" class="nav-collapse">
        
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="login.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Log In Form</span>
                    </a>
                </li>
                
                <li>
                    <a href="insert.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Insert Form</span>
                    </a>
                </li>
                <li>
                    <a href="display.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Display Form</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Edit Form</span>
                    </a>
                </li>
                
 
            </ul>            </div>
        
    </div>
</aside>

<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             FORM VALIDATION
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="" novalidate="novalidate">
                                   
                                    </div>
                                    
                                    </div>
                                    
                                    
                                   
                                    <div class="form-group ">
                                        <label for=" opass" class="control-label col-lg-3"> Old Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="opass" name="opass" type="password">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for=" npass" class="control-label col-lg-3"> New Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="npass" name="npass" type="password" >
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for=" cpass" class="control-label col-lg-3"> Confirm Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cpass" name="cpass" type="password" >
                                    </div>
                                   
                                    <div class="form-group ">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" value="changepassword ">CHANGE PASSWORD</button>
                                            
                                        </div>
                                    </div>
                               
                            </div>
                        </div>
                    </section>
                
            
          
        

 <!-- footer -->
		  <div class="footer">
			
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->



</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script>
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>


<?php
$connection=mysqli_connect("localhost","root","","visitoradmin");

if($_POST)
{ 
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $query=mysqli_query($connection,"select * from  tbl_user where email='{$email}' and password='{$password}'") or
    die (mysqli_error($connection));
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);
    
    if ($count==0){
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        
        header("location:home.php");
    }else{
        echo "<script>alert('email & password not match.');</script>";
    }
   
    
    
}
?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Form_validation :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    
        <!-- inbox dropdown end -->    
        <!-- notification dropdown start-->
        
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="insert.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Login Form </span>
                    </a>
                </li>
                <li>
                    <a href="insert.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Insert Form Data</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Update Form Data</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Delete Form Data</span>
                    </a>
                </li>
                 <li>
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Display Form</span>
                    </a>
                </li>
                   
                 
             
                
             
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts" >
            <!-- page start-->
             
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                             Form validations
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form" >
                                <form class="cmxform form-horizontal " id="signupForm" method="post" action="" novalidate="novalidate">
                                    
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="email" name="email" type="email">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-3">password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="password" name="password" type="password">
                                        </div>
                                    </div>
                                    
                                    
                                         
      

                                   

                                   

                                   

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit" name="insert" value="inserted">Submit</button>
                                            <button class="btn btn-default" type="submit" name="reset" value="clear">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
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
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>


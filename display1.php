<?php

$connection=mysqli_connect("localhost","root","","visitoradmin");

if(isset($_GET['did']))
{
    $did=$_GET['did'];
    $query=mysqli_query($connection,"delete from tbl_user where st_id='{$did}'") or die (mysqli_error($connection));
    if ($query){
        header("location:display1.php");
    }
}


$query=mysqli_query($connection,"select * from tbl_user") or die (mysqli_error($connection));


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
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Basic table
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
          }}'>
        <thead>
           
            <tr>
            <th data-breakpoints="xs"> ID</th>
            <th data-breakpoints="xs">Name</th>
            <th data-breakpoints="xs">Password</th>
            <th data-breakpoints="xs">Email</th>
            <th data-breakpoints="xs">Contact No.</th>
            <th data-breakpoints="xs">Address</th>
            <th data-breakpoints="xs">Is Active</th>
            <th data-breakpoints="xs">Action</th>
            </tr>
          <?php
          while ($row=mysqli_fetch_array($query))
{
          echo "<tr>";
          
         
          echo "<td>{$row['st_id']}</td>";
          echo "<td>{$row['st_name']}</td>";
          echo "<td>{$row['st_password']}</td>";
          echo "<td>{$row['st_email']}</td>";
          echo "<td>{$row['st_contactno']}</td>";
          echo "<td>{$row['st_address']}</td>";
          echo "<td>{$row['is_active']}</td>";
          
          
          
          echo "<td><a href ='edit.php?editid=$row[0]'>Edit</a> | <a href='display1.php?did=$row[0]'>Delete</a></td>";
       
}         
         echo "</tr>";
  ?>        
          
           
           
           
           
    </thead> 
        </tbody>
      </table>
    </div>
  </div>
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


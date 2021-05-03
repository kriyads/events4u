<?php
	session_start();
	include "database/connect.php";

	
if(!(isset($_SESSION['email']))){
header("location:index.php");
}
	
$name=$_SESSION['name'];
$email=$_SESSION['email'];


$read_DB = "SELECT * FROM user_details where UserID='$email'";
				$result = mysqli_query($conn, $read_DB);

				$row=mysqli_fetch_array($result);
				
				$mobile=$row['mobile'];
				$address=$row['address'];
				
				
				

if (isset($_POST['personalDetailsForm'])){
	
	
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	
	
	
	$query=mysqli_query($conn,"update user_details set mobile='$mobile',address='$address' where UserID='$email' ");
	
	if($query){
		
		echo"<script>alert('Update Successfull');</script>";
	}else{
		
		echo"Something Went Wrong!";
	}
	
	
}
				
	
	
?>
				  

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="manifest" href="extra/site.webmanifest">
        <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5f259f">
        <meta name="msapplication-TileColor" content="#fdda24">
        <meta name="theme-color" content="#5f259f">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        
              
                    <title>Events4u | My Account</title>
            <link rel="stylesheet" type="text/css" href="css/dashboard.min.css">
            <link rel="stylesheet" type="text/css" href="css/me-font.min.css">
            <link rel="stylesheet" type="text/css" href="css/fa-style.min.css">
            <link rel="stylesheet" href="css/jquery-ui.min.css">
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/jQuery-ui.min.js"></script>
			<script src="js/intlTelInput.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/intlTelInput.min.css">
            
            
        </head>
        <!--   we are adding pageurl as a class name   --->
        <body class="bodyLeft page-profile" >
            <div id="dvLoading" class="loadingopacity" style="display:none;background-color: rgba(136, 136, 136, 0.4);
                 height: 100%;
                 position: fixed;
                 width: 100%;
                 z-index: 1000;opacity: 1;
                 filter: alpha(opacity=100);"><img src="images/loading.gif" class="loadingimg" alt="Loading.." style="left: 50%;
                   opacity: 1;
                   filter: alpha(opacity=100);
                   position: absolute;
                   top: 50%;
                   border-radius: 4px;
                   display: block;
                   background-color: white;
                   -webkit-transform: translate(-50%, -55%);
                   -moz-transform: translate(-50%, -55%);
                   -o-transform: translate(-50%, -55%);
                   -ms-transform: translate(-50%, -55%);
                   transform: translate(-50%, -55%);
                   padding: 30px 70px;" /></div>
                   <div id="menudvLoading" class="menuloadingopacity" style="display:none;"><img src="images/loading.gif" class="menuloadingimg" alt="Loading.."/></div>
            <div class="wrapper"> 
                <!--Top Area-->
				
				
				
                <div class="headerSec">
                    <div class="float-left">
                        <a href="#" id="mobile-menu-toggle"><span class="icon2-bars" aria-hidden="true"></span></a>
                        <a href="home.php" class="logo">
                            <img src='images/logo_event.jpg'	width="200" height="50" alt="PMIWB" title="PMIWB" /> 
                        </a>
                    </div>
                    <div class="float-right">
                        <div class="rightList">
                            <ul >
									<li class="off"><a href="home.php" target="_self">Home</a></li>
																																								<li class="off"><a href="logout.php" target="_self">Log Out</a></li>
                                
                                    <li><a href="user_create_event.php" class="">Create Event</a></li>
                                		
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearBoth"></div>
            </div>
    <div class="container"><div class="leftFixed">
 <div id="cssmenu"><!--class="fs-special-view-left-menu"-->
        <ul>
          <li class="has-sub"><a href='user_profile.php' ><span class="glyphicon glyphicon-user"></span>My Profile</a>
            <ul  id="currentMenu" style="display: block">
              <li><a class="currentsubLink" href="user_profile.php"  id="showdropdowntwo" class="unselected">Personal Details</a> </li>
			  			  
              <li><a   href="user_change_password.php"  class="unselected">Change Password</a></li>
              <li><a   href="user_event_record.php"  class="unselected">My Events</a></li>
              <li><a   href="user_event_book.php"  class="unselected">My Bookings</a></li>
              <
            </ul>
          </li>
          
          
          
        </ul>
      </div>
      <div class="sidebar-full-height-bg"></div>
 </div>
 
 
 
 
<div class="rightArea">
         <div class="heading">
        <h2>Personal Details</h2>
    </div>
    <div class="editFields fs-profile-form">
        <form method="post" action="" >
            <!--<label>User Name <span class="mandatory">*</span></label>-->
            
			
            <div id="userSuccessMessage"> </div> <div id="userErrorMessage"> </div>
            
			<label>Email ID <span class="mandatory"></span></label>
            <input type="text" name="email" value="<?php echo"$email"; ?>" readonly class="textfield">
            
			<label>Name <span class="mandatory"></span></label>
            <input type="text" name="name" value="<?php echo"$name"; ?>" readonly class="textfield">
            
            <div class="clearBoth"></div>
            
			<label>Mobile Number
            <span class="mandatory"></span> </label>
            <input type="text" id="MobileNo" name="mobile" value="<?php echo"$mobile"; ?>" class="textfield">             
			<span style="margin-bottom:20px;"></span>

            
            
            
                        
           
            <div class="clearBoth"></div>

            <div class="clearBoth"></div>
<!--            <img src="" alt="" id="picShow" width="120" height="120" />
            <input type="file" id="picture" name="picture"/>-->
            <input type="submit"  name="personalDetailsForm" class="submitBtn createBtn float-right" value="UPDATE"/>
        </form>
    </div>
</div>
</div>




</div> 
</div><!-- wrap div -->
<!-- <link rel="stylesheet" type="text/css" href="cssmenu.min.css.gz"> -->
<link rel="stylesheet" type="text/css" href="https://static.meraevents.com/css/public/common.min.css.gz?v=131">

<!-- <script src="dashboard/cssmenu.min.js.gz"></script> -->









<script type="application/ld+json">
</script>

 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>

<script src="js/angular.min.js"></script>
<script src="js/combined.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/home_combined.min.js"></script>
</body>
</html>


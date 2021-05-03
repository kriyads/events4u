<?php
	session_start();
	include "database/connect.php";

	
if(!(isset($_SESSION['name']))){
header("location:index.php");
}
	
$name=$_SESSION['name'];



if(isset($_GET['del']))
{
	$id=$_GET['del'];
	$adn=mysqli_query($conn,"delete from user_details where UserID='$id'");
		   
        echo "<script>alert('Data Deleted');</script>" ;
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
                        <a href="admin_manage_users.php" class="logo">
                            <img src='images/logo_event.jpg'	width="200" height="50" alt="PMIWB" title="PMIWB" />
                        </a>
                    </div>
                    <div class="float-right">
                        <div class="rightList">
                            <ul >
									<li class="off"><a href="admin_manage_users.php" target="_self">Home</a></li>
																																								<li class="off"><a href="logout.php" target="_self">Log Out</a></li>
                                
                                 	
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearBoth"></div>
            </div>
    <div class="container"><div class="leftFixed">
 <div id="cssmenu"><!--class="fs-special-view-left-menu"-->
        <ul>
          <li class="has-sub"><a href='admin_profile.php' ><span class="glyphicon glyphicon-user"></span>Admin Profile</a>
            <ul  id="currentMenu" style="display: block">
              
			  <li><a    class="currentsubLink"  href="admin_manage_users.php"  class="unselected">Manage Users</a></li>
              <li><a    href="admin_manage_events.php"  class="unselected">Manage Events</a></li>
              <li><a   	href="admin_manage_bookings.php"  class="unselected">Manage Bookings</a></li>
              <
            </ul>
          </li>
          
          
          
        </ul>
      </div>
      <div class="sidebar-full-height-bg"></div>
 </div>	
				  


				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
    <div class="rightArea">

       
      <div class="heading">
        <div style="float:left;width:30%;"><h2>Manage Bookings</h2></div>
        <!--
                -->
      </div>
      
      
      
      
      <!--Data Section Start-->
         <div class="">
             <form name="alerts" method="post" is="alerts" action="">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-center">
          <thead>
            <tr>
              <th>Email</th>
              <th>Name</th>
              <th>Password</th>
			        <th>Phone</th>
              <th>Action</th>     
            </tr>
          </thead>
          
		  
		  
		  <?php 
	  
		$search=mysqli_query($conn,"SELECT * FROM user_details");
		//var_dump("SELECT distinct * FROM event_details inner join booking_details where event_details.e_id=booking_details.e_id and event_details.UserID='$email'");
		
		$row1=mysqli_num_rows($search);
		
	  
		 if($row1<1){
		?>
		
			<tbody>
                <tr>
                    <td colspan="4"><div class="db-alert db-alert-info">No data found.</div></td>
                </tr>
            </tbody>
		 <?php }
		 
		 if($search){
					while($row = mysqli_fetch_array($search, MYSQLI_ASSOC)){

					
					$email=$row['UserID'];
					$name=$row['UserFullName'];
					$password=$row['UserPassword'];
					$mobile=$row['mobile'];
				
					
				
					
				 
			
			echo"<thead>";
			echo"<tr>";
			echo"<td>$email</td>";
			echo"<td>$name</td>";
			echo"<td>$password</td>";
			echo"<td>$mobile</td>";
		
			
			
			echo"<td><a href='admin_manage_users.php?del=$email' title='Delete Record' onclick='return confirm('Do you want to delete');'>Delete<i class=''></i></a></td>";
			
			echo"</tr>";
			echo"</thead>";
				
			 
			 
		 }}?>
		 
		  
		  
		  
		  
		  
		  
		  
        </table>
<!--        <div class="float-right">
          <input type="submit" class="createBtn float-right" name="alertForm" value="Save & Exit"/>
        </div>-->
             </form>
        
        </div>
    </div>
    

</body>
</html>


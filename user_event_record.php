<?php
	session_start();
	include "database/connect.php";

	
if(!(isset($_SESSION['email']))){
header("location:index.php");
}
	
$name=$_SESSION['name'];
$email=$_SESSION['email'];


if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn=mysqli_query($conn,"delete from event_details where e_id='$id'");
		   
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
              <li><a href="user_profile.php"  id="showdropdowntwo" class="unselected">Personal Details</a> </li>
			  			  
              <li><a    href="user_change_password.php"  class="unselected">Change Password</a></li>
              <li><a   class="currentsubLink" href="user_event_record.php"  class="unselected">My Events</a></li>
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
        <div style="float:left;width:30%;"><h2>My Events</h2></div>
        <!--
                -->
      </div>
      
      
      
      
      <!--Data Section Start-->
         <div class="tablefields">
             <form name="alerts" method="post" is="alerts" action="">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-center">
          <thead>
            <tr>
              <th>Event ID</th>
              <th>Event Date</th>
              <th>Event</th>
              <th>Event Description</th>
              <th>Venue</th>
              <th>Category</th>
              <th>No of Tickets</th>
              <th>Ticket Price</th>
              <th colspan="2">Action</th>

            </tr>
          </thead>
		  
		<?php 
	  
		$search=mysqli_query($conn,"SELECT * FROM event_details where UserID='$email'");
		//$row=mysqli_fetch_assoc($search);
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

					
					$eventid=$row['e_id'];
					$s_date=$row['s_date'];
					$e_name=$row['e_name'];
          $e_desc=$row['e_desc'];
					$t_qty=$row['t_qty'];
					$v_name=$row['v_name'];
					$e_category=$row['e_category'];
					$t_price=$row['t_price'];
					
				
					
				 
			
			echo"<thead>";
			echo"<tr>";
			echo"<td>$eventid</td>";
			echo"<td>$s_date</td>";
			echo"<td>$e_name</td>";
      echo"<td>$e_desc</td>";
			echo"<td>$v_name</td>";
			echo"<td>$e_category</td>";
			echo"<td>$t_qty</td>";
			echo"<td>$t_price</td>";
      echo"<td><a href='user_event_record.php? title='Edit Record' onclick='return confirm('Do you want to edit?');'>Edit<i class=''></i></a></td>";
			echo"<td><a href='user_event_record.php?del=$eventid' title='Delete Record' onclick='return confirm('Do you want to delete?');'>Delete<i class=''></i></a></td>";
			
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


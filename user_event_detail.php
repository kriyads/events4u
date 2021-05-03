<?php
session_start();
include "database/connect.php";

if(!(isset($_SESSION['email']))){
header("location:index.php");
}
$name=$_SESSION['name'];
$email=$_SESSION['email'];

$eventid=$_POST['eventid'];


$conn = mysqli_connect($servername, $username, $password, $dbname);
				//Read all event
				$read_DB = "SELECT * FROM event_details where e_id='$eventid'";
				$result = mysqli_query($conn, $read_DB);

				$row=mysqli_fetch_array($result);

					$event=$row['e_name'];
					$descrip=$row['e_desc'];
					$t_price=$row['t_price'];
					$t_qty=$row['t_qty'];
					$photo=$row['photo'];
					$s_date=$row['s_date'];
					$e_date=$row['e_date'];
					$s_time=$row['s_time'];
					$e_time=$row['e_time'];
					$e_category=$row['e_category'];
					
					

					


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
      
       
        <script src="js/jQuery.min.js.gz?v=131"></script>        
                <title>Events4u</title> 
                <meta name="viewport" content="width=device-width,initial-scale=1.0">
                <meta name="apple-mobile-web-app-capable" content="yes">
                <meta name="description" http-equiv="description" content="Buy tickets & passes online for upcoming events in Chennai, live concerts, and events happening in Chennai. Book latest events at MeraEvents.com">
                <meta name="keywords" http-equiv="keywords" content="Events in Chennai,Upcoming Events in Chennai,Latest Events in Chennai,Events in Chennai,Chennai Events,Events in Chennai Today,Events in Chennai this weekend,Chennai upcoming events,upcoming events Chennai,live concert events in Chennai,Latest Events in Chennai" />
                                            <meta name="author" content="MeraEvents" />
                    <meta name="rating" content="general" />          


                <link rel="shortcut icon" href="images/favicon.ico">
				<link rel="stylesheet" type="text/css" href="css/me_custom.min.css">

                

        

         <!-------------------------------------------new------------------------------------------>
	


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap/css/jumbotron.css" rel="stylesheet">
	
	<!-------------------------------------------new------------------------------------------><style>
        body  {
            background-image: url("images/7.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-color: #cccccc;
        }


        #bottom-nav{
            margin-top: 200px;
        }
    </style>                                                  



</head>




<body class="single-winner" ng-app=homeModule>


<!-------------------------------------------new------------------------------------------>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src='images/logo_event.jpg'	width="200" height="50" alt="PMIWB" title="PMIWB" /></a>

        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
		
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
             
				<form class="navbar-form navbar-left" method="post" action="">
				  <div class="input-group">
					<input type="text" class="form-control" placeholder="Search" name="ename">
					<div class="input-group-btn">
					  <button class="btn btn-default" type="submit" name="submit1">
						<i class="glyphicon glyphicon-search"></i>
					  </button>
					</div>
				  </div>
				</form>			
							
							
									
			<li><a href="home.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
			<li><a href="user_create_event.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Create Events</a></li>
							
							
			<li class="dropdown user"><a class="dropdown-toggle"  style="cursor: pointer;" data-toggle="dropdown" role="button" aria-expanded="true" data-header="header"><img src="images/myaccount.png" alt="images/myaccount.png"></a>
															
				<ul class="dropdown-menu profile-dropdown" role="menu">
					<li><a href=''><span class="glyphicon glyphicon-user"></span>Wellcome:<?php  echo"$email"; ?></a></li>
					<li><a href='user_profile.php'><span class="glyphicon glyphicon-cog"></span> My Profile</a></li>
					<li><a href='user_profile.php'><span class="glyphicon glyphicon-leaf"></span> My Events</a></li>
					<li><a href='user_profile.php'><span class="glyphicon glyphicon-shopping-cart"></span> My Bookings</a></li>
					<li><a href='logout.php'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </li>
							
							
				
          
            </ul>
        </div>
		
		
      </div>
    </nav>

<!-------------------------------------------new------------------------------------------>

  <br><br><br><br>		
						
						
            </div>
			
			
			
			
<div class="container event_detail_main">
    <div class="col-sm-12 col-xs-12 header_img">

        <img src="<?php echo 'images_event/'.$row['photo'];?>" title="<?php echo"$event"; ?>">
        <div style="visibility: hidden; display: none; width: 1170px; height: 128px; margin: 0px; float: none; position: static; top: auto; right: auto; bottom: auto; left: auto;"></div>
<div id="event_div" class="" style="z-index: 99;">
    <div class="row webinar">
        <div class="img_below_cont ">
            <h1><?php echo"$event"; ?></h1>
                            <div class="sub_links"><span class="icon-calender"></span>                       
                                            <?php echo"$s_date"; ?> To <?php echo"$e_date"; ?> | <?php echo"$s_time"; ?> to <?php echo"$e_time"; ?> IST                                        </div>
                                <div class="sub_links"> <span class="icon-google_map_icon"></span><span><?php echo"$e_category"; ?></span></div>
                        </div>
        
    </div>

</div>

<style>
    .customAnchor:hover{
        cursor: pointer;
    }
</style>
                

        <div class="event_toggle">
            <div class="row eventDetails" id="event_tickets">
                <p>&nbsp;</p>
                
<div id="useracco" class="col-sm-7 col-xs-12 col-md-8 event_left_cont" style="">


    <ul>

                                                            
      <div class="widget-acc-btn-home" class="widget-grouptitle" style='display:none;'>
	  <p class="selected"><i class="icon2-angle-right"></i> </p>
	  </div>
                            
            <li id="accrdn_1" class="webinar">
                   <div class="borderTop"></div> 
				   <div class="div-content">
                        <div class="cont_main">
                            <div class="eventCatName">
                                                            
                             <h2 style="">Registration Fee </h2>


                            <p class="tckdesc"> <?php echo"$event"; ?></p>
																																														
							<p class="saledate">Last Date:<?php echo"$e_date"; ?></p>
							<p class="saledate">Ticket Available: <?php echo"$t_qty"; ?></p>																																							
																																														
                            </div>
                            <div class="eventCatValue" style="">
                                <span>INR&nbsp;<?php echo"$t_price"; ?></span>
                            </div>

                           						
				
				<div class="eventCatSelect">
                                <span class="selectpicker soldout_text">
								
								<?php  
								
								if($t_qty<1){
									
									echo"Sold Out";
									
								}else{ ?>
									
						<form method="post" action="user_booking.php">	
																																																
									<input type="number" class="form-control eventFields " name="t_qty" placeholder="QTY"/>
									
								
									
								<?php }
								
								?>
								
								</span>
                            </div>
				


                        </div>
                     </div>
					<div class="clearfix"></div>

					<div class="borderBottom"></div>                                                
			</li>
                                                                                                                            

        
            
            <div class="clearfix"></div>


           
        </ul>    </div>


                <div class="col-sm-4 col-xs-12 col-md-3 col-md-offset-1">
                    <div class="eventid"><a>Event ID : <?php echo"$eventid"; ?></a></div>
					
					
						<input type="hidden" name="eventid" value="<?php echo"$eventid"; ?>"
					
                        <p><input type="submit" name="submit" class="btn btn-primary" value="Book Event"/></p>

                    </form>
                   
                </div>
            </div>
                            <div class="col-sm-12 eventDetails" id="event_about">
                    <h3>About The Event</h3>
                    <div>
                        <p><p style="font-family: Tahoma; font-size: 15px;"><br /><span style="font-size: 12pt; color: #000000;"><?php echo wordwrap($descrip,150,"<br>\n");?></span></p>

                    </div>
                </div>
                                                            
            <!--   checing webinar events -->
                    </div>
    </div>
</div>
<!--end of banner-->
<!--Begin Structured Data -->
<footer id="footer">

  <div class="container">
    <div class="row">
      

    <div class="row">
      <div class="col-lg-12">
        <p class="footer-copyright text-left">
           &copy; 2009-2020, Copyright @ . All Rights Reserved
        </p>
      </div>
    </div> <!-- row -->


  </div> <!-- container -->
  
</footer>



<script type="application/ld+json">
</script>

 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>

<script src="js/angular.min.js"></script>
<script src="js/combined.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/home_combined.min.js"></script>



 



<!--End of Zopim Live Chat Script-->
</body>
</html>
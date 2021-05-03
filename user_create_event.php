<?php
session_start();
include "database/connect.php";

if(!(isset($_SESSION['email']))){
header("location:index.php");
}
$name=$_SESSION['name'];
$email=$_SESSION['email'];



if(isset($_POST['submit'])){
					
					$title=$_POST['title'];
					$description=$_POST['description'];
					$category=$_POST['category'];					
					$venueName=$_POST['venueName'];
					$venueaddress=$_POST['venueaddress'];
					$startDate=$_POST['startDate'];
					$startTime=$_POST['startTime'];
					$endDate=$_POST['endDate'];
					$endTime=$_POST['endTime'];
					$ticketType=$_POST['ticketType'];
					$ticketName=$_POST['ticketName'];
					$tqty=$_POST['tqty'];
					$price=$_POST['price'];
					
					
					//$bannerImage=$_FILES["bannerImage"]["name"];
					move_uploaded_file($_FILES["bannerImage"]["tmp_name"],"images_event/".$title.'.jpg');
					$bannerImage=$title.'.jpg';
					
					
					
				$query=mysqli_query($conn, "insert into event_details (e_name,e_desc,e_category,v_name,v_address,s_date,s_time,e_date,e_time,t_type,t_name,t_qty,t_price,UserID,photo) values ('$title','$description','$category','$venueName','$venueaddress','$startDate','$startTime','$endDate','$endTime','$ticketType','$ticketName','$tqty','$price','$email','$bannerImage')");
				
				if($query){
					
					echo"<script>alert('Event Created Successfully');</script>";
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
             
						
							
							
									
			<li><a href="home.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
			<li><a href="user_create_event.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Create Events</a></li>
							
							
			<li class="dropdown user"><a class="dropdown-toggle"  style="cursor: pointer;" data-toggle="dropdown" role="button" aria-expanded="true" data-header="header"><img src="images/myaccount.png" alt="images/myaccount.png"></a>
															
				<ul class="dropdown-menu profile-dropdown" role="menu">
					<li><a href=''><span class="glyphicon glyphicon-user"></span>Welcome:<?php  echo"$email"; ?></a></li>
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
                    
<!--important-->
<div class="page-container">
    <div class="wrap">
        <div class="container"> 

            <div class="innerPageContainer">
                <h2 class="create_eve_title">Create Your Event </h2>
                
                <div class="row">
                    <form enctype="multipart/form-data" method="POST" action=""> 
                       
                        
                        
                        <div class="col-md-8 col-xs-12 col-sm-12">
                            <div class="row create_eve_container">
                                <div class="col-sm-12 ">
                                    
                                    <div class="create-event-error">
                                        <ul id="eventDataErrors"></ul>
                                    </div>
                                
                                    <div class="form-group">
                                        <label>Event Title</label>
                                        <input autofocus="true" type="text" class="form-control eventFields" name="title" id="eventTitle" value="" required>
                                    </div>

                                    <div class="form-group create_eve_labelspace">
                                        <label>Description</label>
                                        <textarea style="height: 170px;" type="text" ui-tinymce ="tinymceOptions" id="event-desc"  class="form-control eventFields" name="description" required></textarea>
                                        
                                    </div>
									
									
									
                                    <div class="create_eve_dropdowns">
									
									       
									<label>Select a Category</label>
												
												
									<br>
									<select class="form-control" name="category" required>
									<option value="">Category</option>
									<option value="Entertainment">Entertainment</option>
									<option value="Professional">Professional</option>
									<option value="Sports">Sports</option>
									
									
									</select>
                                                
											
                                    </div>

                                   
                                    <div id="event_venue_div" >
                                        <h2 class="title_2 clearBoth">Event Venue</h2>
                                        
                                        <div id="div_webinar" >
                                            <div class="form-group" id="locationField"  >
                                                <label>Venue</label>
                                                <input type="text" class="form-control eventFields placechange" id="eventVenue" name="venueName" value="" required>
                                                <button id="clearVenue" class="clear-venue"></button>
                                                

                                                <span class="pull-right addAdd">+</span>
                                            </div>
                                            <div class="add_address" id="address" style="display: none;">
                                                <label class="add_address_space1">Address</label>
                                                <input type="text" class="form-control eventFields field" id="eventAddress1" name="venueaddress" value="">


                                                <div class="clear"></div>				

                                               
                                            </div>
                                        </div>   
                                    </div>

                                    <h2 class="title_3 clearBoth">Event Date</h2>
                                    
                                    <div class="create_eve_where change_currency ">
                                        
										<ul id="singleEventDateTime">
                                            <li>
                                                <label for="Start date">Start date </label>
                                                <input type="date" class="form-control eventFields" id="start_date" name="startDate" value="" required>
                                                    
                                            </li>
                                            <li>
                                                <label for="Start time">Start time</label>
                                                <div class="input-group bootstrap-timepicker">
                                                    <input id="event_start" type="time" class="input-small" name="startTime" value=""  required>
                                                    
                                                </div>
                                            </li>
											<li>&nbsp;&nbsp;&nbsp;</li>
                                            <li>
                                                <label for="End date">End date</label>
                                                <input type="date" class="form-control eventFields" id="end_date" name="endDate" value="" required>
                                                
                                            </li>
                                            <li>
                                                <label for="End time">End time</label>
                                                <div class="input-group bootstrap-timepicker">
                                                    <input id="event_end" type="time" class="input-small " name="endTime" value="" required>
                                                    
                                                    
                                                </div>
                                            </li>
                                           
                                        </ul>

                               
        
            </div>
 
                                    <div id="div_ticketwidget">
                                        <h2 class="title_3 clearBoth">Tickets</h2>
                                        
                                           
<div class="create_eve_tickets"> 

<div class="eventtickettype" >
<ul>
<li>
<label for="Ticket type">Ticket type </label>
<div class="TicketDropdownHolder">
     
         
         <select ticketcount="0" name="ticketType" id="ticketType0" class="ticketType selectedticket0" required>
        <option value="Free"  >Free</option>
        <option value="Paid"  >Paid</option>
        
       
        </select>
          <span class="create-event-error ticketTypeError" id="ticketTypeError0" style="display: none;"></span>
 </div>     
</li>
 
<li>
<label for="Ticket name">Ticket name</label>
<input  type="text" class="form-control eventFields ticketName"  id="ticketName0"  name="ticketName" 
       value="" required/>
<span class="create-event-error ticketNameError" id="ticketNameError0" style="display: none;"></span>
</li>
<li>
<label for="Quantity">Quantity</label>
<input type="text" class="form-control eventFields "  id="order0"  name="tqty" value="1" required>
<span class="create-event-error ticket orderError order" id="ticketOrderError0" style="display: none;"></span>
</li>
<li>
<label for="Price" style="display:show ;">Price/Ticket</label>
<span class="form-control eventFields ticketpricespan" id="ticketpricespan0" style="display:none ;">0</span>
<input  type="text" class="form-control eventFields ticketprice"  id="price0"  name="price"   style="display:  " value="" required/>
<span class="create-event-error priceError" id= "priceError0" style="display: none;">Price is required.</span>
</li>


</ul>





</div>
</div>


                                    </div>
                                  

                                   

                            </div>
                            <!--End Step1--> 
                            </div>  
                        </div>
                        <div class="col-xs-12 col-md-4 design_event" >
                            

                            <h2 class="title">Upload your event photo</h2>
                            <div class="create-event-error">
                                <ul id="eventBannerErrors"></ul>
                            </div>
                            <div id="bannerImageDiv" class="upload" style="background-image: url('');background-repeat:no-repeat;background-size:300px 100px;">

                                <input type="file" name="bannerImage" id="bannerImage" class="unused" required/>
                                <span class="upload_image"  ></span>
                                <span class="upload_image_text"  >Upload Header Image<br>1170 x 370px</span>
                                <div id="removeBanner" style="float:right; width:auto; text-align:right; padding:2px 5px 5px 5px;"> <i class="icon2-times-circle"></i></div>
                            </div>
                            
                            <div class="create-event-error">
                                <ul id="eventLogoErrors"></ul>
                            </div>	  
                            


                           
                        </div>
                            <div class="create_eve_btns">
    <ul>
        
        
        <li>
            <input type="submit" name="submit" class="btn btn-default btn-md gobtn createeventbuttons" value="GO LIVE"/>
        </li>
    </ul>
</div>              </form>

                </div>
               
            </div>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

        
                              
                                    
        
       
        
     
	 
	 
	<!----------------important style link for design-------------------------------------------> 
		<link rel="stylesheet" type="text/css" href="css/me_custom.min.css">
     
	 
	<!------------------------important Script for dropdown---------------------------------------->
        <script src="js/jQuery.min.js"></script>  
        <script src="js/jquery.validate.min.js"></script>
		
	<!------------------------important Script for dropdown---------------------------------------->
		
        <style type="text/css">
            .filterdiv {
                display: none;
            }
            .ui-menu .ui-menu-item{
                font-size:25px;padding: 6px 1em 6px .4em;
            }
            .thumbnail .overlay, .myoverlay .overlay {
                display: none;
            }
            .thumbnail:hover .overlay{
                display: none;
            }
        </style>
        
        <link rel="stylesheet"  href="css/jquery-ui.min.css">
                 



    <!-- Static navbar -->
    <body class="single-winner" >
        <!-- Google Tag Manager (noscript) -->

<!-- End Google Tag Manager (noscript) -->        <div id="dvLoading" class="loadingopacity" style="display:none;"><img src="images/loading.gif" class="loadingimg" alt="Loading.." /></div>
        <div id="menudvLoading" class="menuloadingopacity" style="display:none;"><img src="images/loading.gif" class="menuloadingimg" alt="Loading.." /></div>
        <div class="site-container">
            <!-- global header -->
             
                                    </div>
            </header>
            <!-- /global header -->
        </div>
        <!--important-->
        <!-- /.wrap --> 
        </div>
        <!-- wrap --> 
    </div>
    <!-- page-container --> 
    <!-- on scroll code-->
    <!-- for prieview-->
    <a href="javascript:void(0);" target="_blank" id="previewEventURL" style="display: none;">Preview</a>
</div>

<style>
    #MoreTaxes li { margin-right:10px; float:left; line-height:40px;}
    .TaxField_width {width:80px !important;}
</style>

 


<script src="js/combined.min.js"></script>
<script src="js/common.min.js"></script>
<script src="js/jquery.multi-select-dropdown.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/moment-range.min.js"></script>
<script src="js/moment-weekday-calc.min.js"></script>
<script src="js/additional-methods.min.js"></script>
<script src="js/create_event.min.js"></script>
<script src="js/bootstrap-tagsinput.min.js"></script>
<script src="js/tags-custom.min.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/tinymce.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>


<!-- End of Adroll Tag -->

<!--removed old FB pixel code--><!--Start of Zopim Live Chat Script-->

<!--End of Zopim Live Chat Script-->


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







</body>
</html>
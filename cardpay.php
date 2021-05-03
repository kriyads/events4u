<?php
	
session_start();
include "database/connect.php";

if(!(isset($_SESSION['email']))){
header("location:index.php");
}
$name=$_SESSION['name'];
$email=$_SESSION['email'];




?>





<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   

    <!-- BOOTSTRAP STYLES-->
    <link href="cardstyle/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="cardstyle/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="cardstyle/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="cardstyle/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<link href="cardstyle/css/ui.css" rel="stylesheet" />
	<link href="cardstyle/css/datepicker.css" rel="stylesheet" />	
	
    <script src="cardstyle/js/jquery-1.10.2.js"></script>
	
    <script type='text/javascript' src='cardstyle/js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
   
	 <link rel="stylesheet" href="cardstyle/vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="cardstyle/vendor/owl-carousel/owl.theme.css">
	  
	  
	  
	  
	  
	  
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

                <link rel="stylesheet" href="css/jquery-ui.min.css">
	  
	
	
</head>

<body class="single-winner" ng-app=homeModule>
<?php
//include("php/header.php");
?>
        
		
		
		<div id="dvLoading" class="loadingopacity" style="display:none;"><img src="images/loading.gif" class="loadingimg" /></div>
    <div id="menudvLoading" class="menuloadingopacity" style="display:none;"><img src="images/loading.gif" class="menuloadingimg" /></div>
                  
            <div class="site-container">
                     
<!-----------------------------------Header---------------------------- -->
 
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src='images/logo_event.jpg' width="200" height="50" alt="PMIWB" title="PMIWB" /></a>

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
<div ng-controller="filterController">
<div class="page-container" >
    <div class="wrap">
        <div class="container HomeContainer">
            <!-- Main component for a primary marketing message or call to action -->
            
            
                    
                
<br>                    

						
	<!-----------------------------------Header---------------------------- -->										
						
            </div>
		
		<div id="">
            <div id="">
                <div class="row">
                    <div class="col-md-12">
                         
						
						
						
						
						
						
						<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="cardstyle/img/creditcardicons.png">
                    </div>
                </div>
                <div class="panel-body">
                    <form action="payment_control.php" method="POST" onsubmit="return validate()">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label><font size="2">CARD NUMBER</font></label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="cardno" placeholder="14 digit Card Number" pattern="(?=.*\d).{14}" title="Card No should be 14 digit" required/>
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label><font size="2"><span class="hidden-xs"></span><span class="visible-xs-inline"></span>EXP DATE</font></label>
                                    <input type="text" class="form-control" name="exdate" placeholder="MM / YY" required/>
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label><font size="2">CVV CODE</font></label>
                                    <input type="password" class="form-control" name="cvv" placeholder="CVV" pattern="(?=.*\d).{3}" title="CVV should be 3 digit" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label><font size="2">CARD OWNER</font></label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" name="owner" required/>
                                    
									
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-warning btn-lg btn-block" type="submit">Process payment</button>
                        </div>
                    </div>
                </div>
				</form>
            </div>
        </div>
    </div>
</div>
							
						
						
						
						
						
						</h1>
					</div>
                </div>
				
            </div>
             
		</div>
  

  
  <footer id="footer">

  <div class="container">
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
  
    
   
  
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>

    
</body>
</html>

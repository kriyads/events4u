<?php   
session_start();
include "database/connect.php";

if(isset($_POST['submit'])){
					
					
					$username=$_POST['username'];
					$password=$_POST['password'];
					
					$search=mysqli_query($conn,"SELECT * FROM admin where username='$username' and password='$password'");
					$row=mysqli_fetch_assoc($search);
					$row1=mysqli_num_rows($search);
					
					$name=$row['username'];
					if($row1>0){
						
					
					$_SESSION['name']=$name;	
						
						
					header('location:admin_manage_users.php');
					
					
					}else{
						
						echo"<script>alert('Invalid UserId and Password'); window.location.href='admin_login.php';</script>";
						
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
							
							
							 <li><a href="user_login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;User Login</a></li>
							 <li><a href="admin_login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Admin Login</a></li>
            </ul>
        </div>	
      </div>
    </nav>

<!-------------------------------------------new------------------------------------------>
						
						
						
						
						
						
                    </div>
                    <div class="page-container"><br><br><br>
 <div class="container" id="loginContainer" >
          <div id="activemessage">    
 </div>
<!--        <h2 class="innerTopText">Log In</h2>-->
        <h3 class="innerTopText">Admin Login</h3>

        <div class="row loginContainer" ng-controller="loginController">
            
<div class="col-sm-3 leftSide">

    <div class="loginBlog">
       
    </div>
   
</div>



            <div class="col-sm-6 rightSide">
                <div class="loginBlog">
<!--                    <h2 class="login_header_rgt">Login with email</h2>-->
                    <div class="form-group">
                        <p class="error ng-cloak" ng-bind="loginErrorMsgs" id="loginErrorMsgs"></p>
                    </div>
                    <form novalidate name="loginForm" method="post">
                        <div class="form-group">
                            <input type="text" name="username"  value=""  class="form-control userFields" placeholder="Admin ID">
                            
                        </div>
                        <div class="form-group">
                            <input  type="password" name="password" class="form-control userFields"  placeholder="Password">
                            
                        </div>
                       
                        <button type="submit" name="submit" class="btn btn-default commonBtn login sbtn" style="line-height: 43px">LOG IN</button>
                    </form>
					
            </div>
             
        </div>
           
    </div>

 
</div>
<!-- /.wrap -->


 


<footer id="footer">

  <div class="container">
    <div class="row">
      

    <div class="row">
      <div class="col-lg-12">
        <p class="footer-copyright text-left">
           &copy; 2021, Copyright @ . All Rights Reserved
        </p>
      </div>
    </div> <!-- row -->


  </div> <!-- container -->
  
</footer>


 



<script src="js/angular.min.js"></script>
<script src="js/combined.min.js"></script>
<script src="js/common.min.js"></script>


<!--End of Zopim Live Chat Script-->
</body>
</html>
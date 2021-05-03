<?php
	
session_start();
include "database/connect.php";

if(!(isset($_SESSION['email']))){
header("location:index.php");
}
$name=$_SESSION['name'];
$email=$_SESSION['email'];

$eventid=$_POST['eventid'];
$t_qty=$_POST['t_qty'];



$mob=mysqli_query($conn,"select * from user_details where UserID='$email'");

//var_dump("select * from user_details where UserID='$email'");
$row1=mysqli_fetch_array($mob);
$mobile=$row1['mobile'];
//var_dump($mobile);





//$conn = mysqli_connect($servername, $username, $password, $dbname);
				//Read all event
				$read_DB = "SELECT * FROM event_details where e_id='$eventid'";
				$result = mysqli_query($conn, $read_DB);

				$row=mysqli_fetch_array($result);

					$event=$row['e_name'];
					$descrip=$row['e_desc'];
					$photo=$row['photo'];
					$t_price=$row['t_price'];
					$s_date=$row['s_date'];
					$e_date=$row['e_date'];
					$s_time=$row['s_time'];
					$e_time=$row['e_time'];
					$e_category=$row['e_category'];
					$available_tqty=$row['t_qty'];
					
if($t_qty>$available_tqty or $t_qty<=0 ){
	
	echo "<script>alert('Select Valid Numbers of Tickets'); window.location.href='home.php';</script>";
	
}else{
	
	echo "<script>alert('Tickets Available');</script>";
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
    </nav> <br><br><br>
						
	<!-----------------------------------Header---------------------------- -->						
						
						
            </div>
					
					
					
					
					
                    <div class="page-container">
    <div class="wrap">
        <div class="container">
            <!-- Main component for a primary marketing message or call to action -->
            <div style="visibility: hidden; display: none; width: 1170px; height: 128px; margin: 0px; float: none; position: static; top: auto; right: auto; bottom: auto; left: auto;"></div>
<div id="event_div" class="" style="z-index: 99;">
    <div class="row training">
        <div class="img_below_cont ">
            <h1><?php echo"$event"; ?></h1>
                            <div class="sub_links"><span class="icon-calender"></span>                       
                                            <?php echo"$s_date"; ?> To <?php echo"$e_date"; ?> | <?php echo"$s_time"; ?> to <?php echo"$e_time"; ?>  IST                                        </div>
                                <div class="sub_links"> <span class="icon-google_map_icon"></span>
                        </div>
       
    </div>

</div>

<style>
    .customAnchor:hover{
        cursor: pointer;
    }
</style>
            <!--Step2-->
                            <div class="innerPageContainer">
                    <h2 class="pageTitle">Registration Information</h2>
                    <div class="row">
                        <div class="col-md-8">

                            <div id="booking_message_div" style="color: red;">
                                                            </div>

                            <div id="errorMessage" style="text-align: center;color: red; display:none;">Oops..! Something went wrong..</div>

                            <div class="row">
                                                                <div class="col-xs-12 regInfo">
                                    <form action="" name="ticket_registration" id="ticket_registration" enctype="multipart/form-data">
                                        

                                        <div class="registration_field_group_1">

                                                    
                                                    <!-- Custom Fields startes here -->
                                         <div class="form-group " >
                                        
                                            <label style="width: 100%" for="exampleInputtext1">Full Name <span style='color:red'>*</span>
                                            <span style="font-size: 11px;"></span>
                                            </label>
                                                                
                                                                
                                                                    
                                            <input type="text" autofocus  class="form-control customValidationClass mandatory_class "
                                             name="FullName1" value="<?php echo"$name"; ?>" readonly>



                                            <span class="FullName_1Err"></span>
                                            </div>
                                            <div class="form-group " >
                                             <input type="hidden" name="formTicket1" value="322247">
                                                <label style="width: 100%" for="exampleInputtext1">  Email Address  
												<span style='color:red'>*</span>
                                                <span style="font-size: 11px;"></span>
                                            </label>
                                                                
                                                                
                                                                    
                                              <input type="text"   class="form-control customValidationClass mandatory_class "
                                                name="EmailId1" value="<?php echo"$email"; ?>" readonly>



                                                <span class="EmailId_1Err"></span>
                                            </div>
                                            <div class="form-group " >
                                            <input type="hidden" name="formTicket1" value="322247">
                                            <label style="width: 100%" for="exampleInputtext1"> Mobile No
											<span style='color:red'>*</span>  <span style="font-size: 11px;"></span>
                                            </label>
                                                                
                                                                
                                                                    
                                            <input type="text"   class="form-control customValidationClass mandatory_class  mobileNoFlags"
                                            name="MobileNo1" value="<?php echo"$mobile"; ?>" readonly>


                                            <span class="MobileNo_1Err"></span>
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>

                                
                                
                                <h2 class="pageTitle">Proceed to pay using</h2>
                                    <div class="col-xs-12 paymentmode-section1">

                                            

                                                                                        


                                                <!--New Payment Gateway-->
                                                <div class="col-sm-12 width100 paymentmode-holder marginbottom10">
                                                    <label class="text-left">
                                                        <label>
                                                            <input type="radio" id="17" name="paymentGateway" value="razorpay" checked="checked"><label id="razorpay_text">
                                                            </label>
                                                            <p class="PG-New-ImgHodler">
                                                                <img src="https://static.meraevents.com/content/paymentgateways/New-Project-1-1540529677.png" />
                                                            </p>
                                                            <p class="PG-NewText" id="razorpay_text">Debit / Credit </p>
                                                        </label>
                                                </div>
                                                
                                                <div class="col-sm-12 width100 paymentmode-holder marginbottom10">
                                                    <label class="text-left">
                                                        <label>
                                                            <input type="radio" id="19" name="paymentGateway" value="phonepe" ><label id="phonepe_text">
                                                            </label>
                                                            <p class="PG-New-ImgHodler">
                                                                <img src="https://static.meraevents.com/content/paymentgateways/phonepe-pg-logo1511222930.png" />
                                                            </p>
                                                            <p class="PG-NewText" id="phonepe_text">BHIM UPI / Debit / Credit / Wallet                                                            </p>
                                                        </label>
                                                </div>
                                               
                                                <div class="col-sm-12 width100 paymentmode-holder marginbottom10">
                                                    <label class="text-left">
                                                        <label>
                                                            <input type="radio" id="23" name="paymentGateway" value="amazonpay" ><label id="amazonpay_text">
                                                            </label>
                                                            <p class="PG-New-ImgHodler">
                                                                <img src="https://static.meraevents.com/content/paymentgateways/amazonpay-logo1549013968.png" />
                                                            </p>
                                                            <p class="PG-NewText" id="amazonpay_text">Amazon Pay                                                            </p>
                                                        </label>
                                                </div>
                                                <!--New Payment Gateway-->


                                            


                                        </div>
                                        <div class="PayNow-Holder">
                                <form method="post" action="user_booking_control.php">
								
								<input type="hidden" name="event_id" value="<?php echo"$eventid"; ?>"/>
								<input type="hidden" name="ticket_qty" value="<?php echo"$t_qty"; ?>"/>
								<input type="hidden" name="ticket_price" value="<?php echo"$t_price"; ?>"/>
								
								<input type="submit" name="book" class="btn commonBtn login paynowbtn" value="Book Now">
                                                                            
								</form>
								</div>
                                
                                     

                                
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">

                                                            <script type="text/javascript">
                                    /* Fee Handling Show/Hide */
                                    $(document).ready(function(){
                                        $(".handlingfeescontainer").hide();
                                        $(".handlingfees").click(function(){
                                            $(".handlingfeescontainer").slideToggle('fast');
                                            $(this).find('i').toggleClass('icon2-plus icon2-minus')
                                        });
                                    });
                                </script>



                                <div class="summarySec">
                                    <div class="sumBlog">
                                        <span class="imgOverlay"></span>
                                        <img src="<?php echo 'images_event/'.$row['photo'];?>" title="<?php echo"$event";?>">
                                <span class="titles">Payment Summary</span>
                                </div>
                                <div class="summaryDetail">
                                    <p class="floatL">Event Id : <?php echo"$eventid";?></p>
                                    
                                </div>


                                    <div class="ticketSummary">
                                        <span>No of Tickets<p id="ticketQnty"><?php echo"$t_qty";?></p></span>



                                        <div class="coupon">
                                            <div class="totalamt-div2">
                                                <span>Amount</span>
                                                <span>
                                                INR &nbsp;<?php echo"$t_price";?>                                                </span>
                                                </span>
                                            </div>
                                            
                                            

                                            <!--Internet Handling Fee Start-->
                                                                                                                                                                                <div class="regpage-feehandlingdivcontainer handlingfeescontainer">
                                                <!-- Displaying the extra charge -->
                                                                                                                                                                                            </div>
                                            <!--Internet Handling Fee End-->
                                                                                    </div>
                                        <div class="totalamt-div2 totalAmountid" ><span>Total Amount<p>INR &nbsp;
										
										<?php 
										
										$tot_price=((int)$t_qty*(int)$t_price);
										
										echo"$tot_price";
																				
										?></p></span></div>
                                    </div>
                                </div>
                                                    </div>
                    </div>
                </div>
                <!--End Step2-->
                    </div>
    </div>
    <!-- /.wrap -->
</div>
<script type="text/javascript">
    var utilsIntlNum ="https://static.meraevents.com/js/public/utils.min.js.gz?v=131";
    var customValidationEventIds = "[78572]";
    customValidationEventIds = $.parseJSON(customValidationEventIds);
</script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAn4IGHT0Rtru5-28_g6LOwTfAqCHCk4lM"></script>
<script type="text/javascript">

    var booking_saveData ='https://www.meraevents.com/api/booking/saveData';
    var api_citySearch = 'https://www.meraevents.com/api/city/search';
    var api_stateSearch = 'https://www.meraevents.com/api/state/search';
    var api_countrySearch = 'https://www.meraevents.com/api/country/search';
    var api_eventPromoCodes='https://www.meraevents.com/api/eventpromocodes/check';
    var totalSaleTickets='1';
    var api_getTinyUrl = "";
    var totalPurchaseAmount = "5499";
    var stagedevent = "0";
    var paymentstage = "0";
    var signupStagedStatus = "1";
    var customValidationMessage = "";


    if(stagedevent == 1 && paymentstage == 2 && signupStagedStatus == 2){
        $(function() {
            $('#ticket_registration').find('*').prop('disabled', true);
        });
    }
    $(".gstvalueclass").hide();
    $(".gstnumberclass").keyup(function(k, v){
        var value = $(this).val();
        $(this).val(value.replace(/[^a-zA-Z0-9-\/]/g, ""));
    });
    function showGSTDetails(dis) {
        if($(dis).prop("checked")) {
            $(".gstvalueclass").show();
            $(".gstvalueclass .customValidationClass").removeClass('valid');
            $(".gstvalueclass .customValidationClass").addClass("required");
        } else {
            $(".gstvalueclass").hide();
            $(".gstvalueclass input").val('');
            $(".gstvalueclass textarea").val('');
            $(".gstvalueclass .customValidationClass").addClass("valid");
            $(".gstvalueclass .customValidationClass").removeClass("error");  
            $(".gstvalueclass .customValidationClass").removeClass("required");
        }
        $("#ticket_registration").valid();
    }

</script>
<script>	
	var mywallet = showOtpVerificationModal = false;
	var remainingAmtToWallet = 0;
		var api_myWalletOtpGeneration='https://www.meraevents.com/api/mywallet/myWalletOtpGeneration';
	//var payment_myWalletValidateotp='https://www.meraevents.com/dashboard';
	var payment_myWalletDoTransaction='https://www.meraevents.com/dashboard';
	var api_myWalletValidateotp = 'https://www.meraevents.com/api/booking/processWalletTransaction';
	var api_myWalletAddFund = 'https://www.meraevents.com/api/mywallet/addMoneyToWallet';
	
</script>


<!--OTP popup for mywallet-->
<!--OTP popup for mywallet--><button id="rzp-button1" style="display:none">Pay with Razorpay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
// Checkout details as a json


/**
 * The entire list of Checkout fields is available at
 * https://docs.razorpay.com/docs/checkout-form#checkout-fields
 */

// Boolean whether to show image inside a white frame. (default: true)


	
function processRazorpayTransaction(response,returnUrl) {
	var form = document.createElement("form");
	document.body.appendChild(form);
	form.method = "POST";
	form.action = returnUrl;
	var element1 = document.createElement("INPUT");         
	element1.name="rpayid"
	element1.value = response.razorpay_payment_id;
	element1.type = 'hidden'
	form.appendChild(element1);
	var element2 = document.createElement("INPUT");         
	element2.name="rsignature"
	element2.value = response.razorpay_signature;
	element2.type = 'hidden'
	form.appendChild(element2);
	var element3 = document.createElement("INPUT");         
	element3.name="roredrid"
	element3.value = response.razorpay_order_id;
	element3.type = 'hidden'
	form.appendChild(element3);
	form.submit();
}
			
</script><style>
    #checkoutmodal { line-height: initial; }
    #checkoutmodal #paymethod-all li.pay_option { float: none; display: inline; }
    #checkoutmodal #paymethod-savedcard ul.tablist li { width: 100%; }
</style>
<script type="text/javascript" src="https://www.paynimo.com/Paynimocheckout/server/lib/checkout.js"></script>
<script>
    function handleResponse(res) {
        if (typeof res != 'undefined' && typeof res.paymentMethod != 'undefined' && typeof res.paymentMethod.paymentTransaction != 'undefined' && typeof res.paymentMethod.paymentTransaction.statusCode != 'undefined' && res.paymentMethod.paymentTransaction.statusCode == '0300') {
            // success code
        } else {
            // error code
        }
    }
    /*Close Button event to hide your loader*/
    $(document).off('click', '.popup-close').on('click', '.popup-close', function () {
        $("#dvLoading").hide();
    });
</script>


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
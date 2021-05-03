<?php
	
session_start();
include "database/connect.php";
$email=$_SESSION['email'];
if (isset($_POST['book'])){
	
	$event_id=$_POST['event_id'];
	$ticket_qty=$_POST['ticket_qty'];
	$ticket_price=$_POST['ticket_price'];
	
	$tot_price=$ticket_qty*$ticket_price;
	
	$query=mysqli_query($conn,"insert into booking_details (b_time,UserID,e_id,t_qty,t_price,status) values (now(),'$email','$event_id','$ticket_qty','$tot_price','1')");
	
	//$conn = mysqli_connect($servername, $username, $password, $dbname);
				//Read all event
				$read_DB = "SELECT * FROM event_details where e_id='$event_id'";
				$result = mysqli_query($conn, $read_DB);

				$row=mysqli_fetch_array($result);
				
				$totalticket=$row['t_qty'];
				$remaining_ticket=$totalticket-$ticket_qty;
				
				$update_ticket_qty=mysqli_query($conn,"update event_details set t_qty='$remaining_ticket' where e_id='$event_id'");
		
				
	if($update_ticket_qty){
		
		header('Location:cardpay.php');
	}else{
		
		echo"Something Went Wrong!";
	}
	
	
}
?>
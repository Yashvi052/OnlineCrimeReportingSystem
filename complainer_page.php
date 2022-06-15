<!DOCTYPE html>
<html>
 
<?php
//NewMailer
require 'includes/PHPMailer.php'; 
require 'includes/Exception.php';
require 'includes/SMTP.php';

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//NewMailerEnd
session_start();
    if(!isset($_SESSION['x']))
        header("location:userlogin.php");
    
    
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db($conn,"crime_portal");
    
    $u_id=$_SESSION['u_id'];
        
        $result=mysqli_query($conn,"SELECT a_no FROM user where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result);
        $a_no=$q2['a_no'];
    
        $result1=mysqli_query($conn,"SELECT u_name FROM user where u_id='$u_id' ");
        $q2=mysqli_fetch_assoc($result1);
        $u_name=$q2['u_name'];

        $result2=mysqli_query($conn,"SELECT u_id FROM user where u_id='$u_id' ");
        $q3=mysqli_fetch_assoc($result2);
        $email=($q3['u_id']);

        $result3=mysqli_query($conn,"SELECT c_id FROM complaint where a_no='$a_no' ");
        $q4=mysqli_fetch_assoc($result3);
        $id=$q4['c_id'];
    
    
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        
        $location=$_POST['location'];
        $type_crime=$_POST['type_crime'];
        $d_o_c=$_POST['d_o_c'];
        $description=$_POST['description'];
        
        $var=strtotime(date("Ymd"))-strtotime($d_o_c);
        
        
    if($var>=0)
    {
          
      $comp="INSERT into complaint(a_no,location,type_crime,d_o_c,description) values('$a_no','$location','$type_crime','$d_o_c','$description')";
      mysqli_select_db($conn,"crime_portal"); 
      $res=mysqli_query($conn,$comp);
      
      if(!$res)
      {
        $message1 = "Complaint already filed";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {/*OLD
          //$message = "Complaint Registered Successfully";
          //echo "<script type='text/javascript'>alert('$message');</script>";

          $messages = "Complaint Registered Succeessfully and Details have been mailed to your Registered Email ID.";
          $messages2 = "Failed";
          echo "<script type='text/javascript'>alert('$messages');</script>";

          $to_email=$email;
          $subject = "Complaint Details";
          $body = "Your Complaint has been Registered Successfully! Your complaint-id is '$id' ";
          $headers = "From: yourcomplainid@gmail.com";

            if(mail($to_email,$subject,$body,$headers)){
             // echo "<script type='text/javascript'>alert('$messages');</script>";
            }else{
              echo "<script type='text/javascript'>alert('$messages2');</script>";
            }
          */
        
        //NEW
        $messages = "Complaint Registered Succeessfully and Details have been mailed to your Registered Email ID.";
        $messages2 = "Failed";
        
        $mail = new PHPMailer();

        $mail->isSMTP();

        $mail->Host = "smtp.gmail.com";

        $mail->SMTPAuth = "true";

        $mail->SMTPSecure = "tls";

        $mail->Port = "587";

        $mail->Password = "complain123";
        $mail->Username = "yourcomplainid@gmail.com";

        $mail->Subject = "Online Complain Details";
        
        $mail->setFrom("yourcomplainid@gmail.com");

        $mail->isHTML(true);
        
        $mail->Body = "<h1><u>Complaint Details</u></h1><br>
                        <h4>Your complaint has been registered with us Successfully!</h4>
                        <p>Your complaint ID is '$id'</p>";
        
        $mail->addAddress("rajaybharti23@gmail.com");
        if($mail->Send()){
        echo "<script type='text/javascript'>alert('$messages');</script>";
      }else{
          echo "<script type='text/javascript'>alert('$messages2');</script>";
          
        }
    $mail->smtpClose();

//NEWclose
        
        
        }
    }
    else
    {
     $message = "Enter Valid Date";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}
?>
    
 <script>
     function f1()
        {
           var sta1=document.getElementById("desc").value;
           var x1=sta1.trim();
          if(sta1!="" && x1==""){
          document.getElementById("desc").value="";
          document.getElementById("desc").focus();
          alert("Space Found");
        }
}
 </script>
   
<head>
	<title>Complainer Home Page</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="complainer_page.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-size: cover;
    background-image: url(c2.jpg);
    background-position: center;">
	<nav  class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Home</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="userlogin.php">User Login</a></li>
        <li class="active"><a href="complainer_page.php">User Home</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="complainer_page.php">Log New Complain</a></li>
        <li><a href="complainer_complain_history.php">Complaint History</a></li>
        <li><a href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
    
    
<div class="video" style="margin-top: 5%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form"><p><h2 style="color:white">Welcome <?php echo "$u_name" ?></h2></p><br>
                                    <p><h2>Log New Complain</h2></p><br>	
				<form action="#" method="post" style="color: gray">Aadhar/Election/Passport Number
					<input type="text"  name="aadhar_number" placeholder="Aadhar Number" required="" disabled value=<?php echo "$a_no"; ?>>
					
				<div class="top-w3-agile" style="color: gray">Location of Complaint
                    
                    <select class="form-control" name="location">
						<?php
                        $loc=mysqli_query($conn,"select location from police_station");
                        while($row=mysqli_fetch_array($loc))
                        {
                            ?>
                                	<option> <?php echo $row[0]; ?> </option>
                            <?php
                        }
                        ?>
					
				    </select>
				</div>
				<div class="top-w3-agile" style="color: gray">Type of Complaint
					<select class="form-control" name="type_crime">
						<option>Theft</option>
						<option>Robbery</option>
                        <option>Pick Pocket</option>
                        <option>Murder</option>
                        <option>Rape</option>
                        <option>Molestation</option>
                        <option>Kidnapping</option>
                        <option>Missing Person</option>
                        <option>Other</option>
				    </select>
				</div>
					<div class="Top-w3-agile" style="color: gray">
					Date Of Complaint : &nbsp &nbsp  
						<input style="background-color: #313131;color: white" type="date" name="d_o_c" required>
					</div>
					<br>
					<div class="top-w3-agile" style="color: gray">
					Description
						<textarea  name="description" rows="20" cols="50" placeholder="Describe the incident in details with time" onfocusout="f1()" id="desc" required></textarea>
					</div>
					<input type="submit" value="Submit" name="s">
				</form>	
			</div>	
		</div>
	</div>	
</div>	
<div style="position: relative;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">
  <h4 style="color: white;">&copy <b>Online Crime Portal 2021</b></h4>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
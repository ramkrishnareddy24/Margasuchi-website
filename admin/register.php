<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" href="../assets/css/animate.min.css">

<link rel="stylesheet" href="../assets/fonts/remixicon.css">

<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="../assets/css/metismenu.min.css">

<link rel="stylesheet" href="../assets/css/simplebar.min.css">

<link rel="stylesheet" href="../assets/css/dropzone.min.css">

<link rel="stylesheet" href="../assets/css/magnific-popup.css">

<link rel="stylesheet" href="../assets/css/odometer.min.css">

<link rel="stylesheet" href="../assets/css/meanmenu.min.css">

<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet" href="../assets/css/responsive.css">

<title>Register - My Local Matrimony</title>

<link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>

<div class="preloader">
<div class="d-table">
<div class="d-table-cell">
<div class="spinner"></div>
</div>
</div>
</div>


<?php// include('../nav.php'); ?>

<div class="inner-banner">
<div class="container">
<div class="inner-title text-center">
<h3>Member Registeration</h3>
<ul>
<li>
<a href="../index.php">Home</a>
</li>
<li>Member Registeration</li>
</ul>
</div>
</div>
</div>
<div class="contact-area pt-100 pb-70">
<div class="container">
<div class="contact-form">
<h3>Create Account</h3>
<hr></hr>
<form method="post" action="register.php">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label>Your Email</label>
<input type="email" name="email"   class="form-control" data-error="Please Enter Your Email" placeholder="enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
 <label>Phone Number</label>
<input type="text" name="phone" id="phone_number" required data-error="Please Enter Your Mobile number" class="form-control" placeholder="enter phone">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Choose Password</label>
<input type="password" name="pass" id="msg_subject" class="form-control" required data-error="Please Enter Your Password">
<div class="help-block with-errors"></div>
</div>
</div>
<hr></hr>
<h3>Bride or Groom Details</h3>
<hr></hr>
<div class="col-lg-6">
<div class="form-group">
<label>First Name</label>
<input type="text" name="fname" id="name" class="form-control" required data-error="MLM0001" placeholder="enter first name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Last name</label>
<input type="text" name="lname" id="name" class="form-control" required data-error="Please Enter Your Email" placeholder="enter last name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>Gender</label>
<select class="form-select form-control" name="gender">
<option value="male">Male</option>
<option value="female">Female</option>

</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Date Of Birth</label>
<input type="date" name="dob" id="name" class="form-control" >
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>Country</label>
<select class="form-select form-control" name="country">
<?php
include('config.php');
$query=mysqli_query($con,"select * from country");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['country']; ?>"><?php echo $row['country']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>State</label>
<select class="form-select form-control" name="state">
<?php
include('config.php');
$query=mysqli_query($con,"select * from state");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>District</label>
<select class="form-select form-control" name="district">
<?php
include('config.php');
$query=mysqli_query($con,"select * from district");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['district']; ?>"><?php echo $row['district']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Panchayath /Muncipality?Talluq</label>
<input type="text" name="taluq"   class="form-control" required data-error="Please Enter Panchayath /Muncipality" placeholder="enter Talluqa">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<label>Mother Tongue</label>
<input type="text" name="tongue"   class="form-control" required data-error="Please Enter Panchayath /Muncipality" placeholder="enter Mother Tongue">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>Religion</label>
<select class="form-select form-control" name="religion">
<?php
include('config.php');
$query=mysqli_query($con,"select * from religion");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['religion']; ?>"><?php echo $row['religion']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>Caste</label>
<select class="form-select form-control" name="caste">
<?php
include('config.php');
$query=mysqli_query($con,"select * from caste");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['caste']; ?>"><?php echo $row['caste']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>Sub Caste</label>
<select class="form-select form-control" name="subcaste">
<?php
include('config.php');
$query=mysqli_query($con,"select * from subcaste");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['subcaste']; ?>"><?php echo $row['subcaste']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>Profile For</label>
<select class="form-select form-control" name="for">
<option value="My Self">My Self</option>
<option value="Son">Son</option>
<option value="Daughter">Daughter</option>
<option value="Brother">Brother</option>
<option value="Sister">Sister</option>
<option value="Relative">Relative</option>
<option value="Friend">Friend</option>

</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group select-group">
<label>Country</label>
<select class="form-select form-control" name="plan">
<?php
include('config.php');
$query=mysqli_query($con,"select * from plan");
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="agree-label">
<input type="checkbox" id="chb1">
<label for="chb1">
Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
</label>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button type="submit" name="submit" class="default-btn border-radius-5">
Register Free <i class="ri-chat-4-line"></i>
</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
</div>
</div>

<?php
if(isset($_POST['submit']))
{
    $date=date('d-m-Y');
    $member_id=rand(000000,999999);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $phone=mysqli_real_escape_string($con,$_POST['phone']);
    $pass=mysqli_real_escape_string($con,md5($_POST['pass']));
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $dob=mysqli_real_escape_string($con,$_POST['dob']);
    $country=mysqli_real_escape_string($con,$_POST['country']);
    $state=mysqli_real_escape_string($con,$_POST['state']);
    $district=mysqli_real_escape_string($con,$_POST['district']);
    $taluq=mysqli_real_escape_string($con,$_POST['taluq']);
    $tongue=mysqli_real_escape_string($con,$_POST['tongue']);
    $religion=mysqli_real_escape_string($con,$_POST['religion']);
    $caste=mysqli_real_escape_string($con,$_POST['caste']);
    $subcaste=mysqli_real_escape_string($con,$_POST['subcaste']);
    $for=mysqli_real_escape_string($con,$_POST['for']);
    $plan=mysqli_real_escape_string($con,$_POST['plan']);
    
    $query=mysqli_query($con,"INSERT INTO member(`status`,`plan`,`reg_status`,`id`,`date`,`member_id`,`email`,`phone`,`pass`,`fname`,`lname`,`gender`,`dob`,`country`,`state`,`district`,`taluq`,`tongue`,
    `religion`,`caste`,`subcaste`,`for`) VALUES ('1','$plan','1',NULL,'$date','$member_id','$email','$phone','$pass','$fname','$lname','$gender','$dob','$country','$state','$district','$taluq',
    '$tongue','$religion','$caste','$subcaste','$for')") or die(mysqli_error($con));
    if($query)
    {
        
    	?>
    	<script>
    	    alert("Registered Successfully MEMBER-ID:<?php echo $member_id; ?>");
    	    window.location="register.php";
    	</script>
    	<?php
}else{
    	?>
    	<script>
    	    alert("ERROR:Request Unprocessed!");
    	    window.location="register.php";
    	</script>
    	<?php
}
}
?>

<div class="employers-cv-area">
<div class="container">
<div class="employers-cv-bg">
<div class="row align-items-center">
<div class="col-lg-8">
<div class="employers-cv-content">
<h2>Let Other Members Find You</h2>
<div class="bar"></div>
<p>Advertise & Highlight your profile to thousands of monthly users and get searched in our database.</p>
</div>
</div>
<div class="col-lg-4">
<div class="employers-cv-btn">
<a href="register.html">Regsiter Now</a>
</div>
</div>
</div>
</div>
</div>
</div>


<footer class="footer-area">
<div class="container">
<div class="footer-top pt-100 pb-70">
<div class="row">
<div class="col-lg-3 col-sm-6 col-md-6">
<div class="footer-widget">
<div class="footer-logo">
<a href="index.html">
<img src="assets/images/logo.png" alt="Footer Logo">
</a>
</div>
<p>MYLOCALMATRIMONY.COM IS AN ONLINE MARRIAGE BUREAU BASED IN KARNATAKA, DEDICATED TO HELP PEOPLE, MEET THEIR LIFE PARTNERS FOR MARRIAGE IN A COMFORTABLE ENVIRONMENT. </p>

</div>
</div>
<div class="col-lg-2 col-sm-6 col-md-6">
<div class="footer-widget">
<h3>Quick Links</h3>
<ul class="footer-list">
<li>
<a href="index.html" target="_blank">
Home
</a>
</li>
<li>
<a href="about.html" target="_blank">
Our Profile
</a>
</li>
 <li>
<a href="membership_plans.html" target="_blank">
Membership Plans
</a>
</li>
<li>
<a href="faq.html" target="_blank">
FAQ's
</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-md-4">
<div class="footer-widget ps-5">
<h3>Navigate</h3>
<ul class="footer-list">
<li>
<a href="privacy-policy.html" target="_blank">
Privacy policy
</a>
</li>
<li>
<a href="cancellation-refund.html" target="_blank">
Terms & condition
</a>
</li>
<li>
<a href="dashboard.html" target="_blank">
Cancellation & refund
</a>
</li>
<li>
<a href="login.html" target="_blank">
Login
</a>
</li>

</ul>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-md-4">
<div class="footer-widget">
<h3>Contact</h3>
<ul class="footer-contact-list">
<li>
<i class="ri-phone-line"></i>
<div class="content">
<a href="tel:86605 77370">
86605 77370
</a>
</div>
</li>

<li>
<i class="ri-phone-line"></i>
<div class="content">
<a href="tel:+919686380440">
+9196863 80440
</a>
</div>
</li>
<li>
<i class="ri-mail-line"></i>
<div class="content">
<a href="mailto: mylocalmatrimony.com@gmail.com">
<span class="__cf_email__" data-cfemail="">help@mylocalmatrimony.com</span>
</a>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-2 col-sm-6 col-md-4">
<div class="footer-widget">
<h3>Address</h3>
<ul class="footer-contact-list">
<li>
<i class="ri-map-pin-line"></i>
<div class="content">
<a href="" target="_blank">
100 Feet Road, Vinoba Nagara,
Opp Prithvi Mansion,
Shivamogga-577201, Karnataka, India.
</a>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="copyright-area">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-7">
<div class="copy-right-text">
<p>
© 2021 My Local Matrimony. All Rights Reserved by
<a href=" target="_blank">Codenext.in</a>
</p>
</div>
</div>
<div class="col-lg-6 col-md-5">
<div class="copy-right-social-link">
<ul class="social-link">
<li>
<a href="https://www.facebook.com/" target="_blank">
<i class="ri-facebook-fill"></i>
</a>
</li>
<li>
<a href="https://www.instagram.com/" target="_blank">
<i class="ri-instagram-fill"></i>
</a>
</li>
<li>
<a href="https://twitter.com/" target="_blank">
<i class="ri-twitter-fill"></i>
</a>
</li>
<li>
<a href="https://www.linkedin.com/" target="_blank">
<i class="ri-linkedin-fill"></i>
</a>
 </li>
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/jquery.magnific-popup.min.js"></script>

<script src="../assets/js/odometer.min.js"></script>

<script src="../assets/js/jquery.appear.min.js"></script>

<script src="../assets/js/meanmenu.min.js"></script>

<script src="../assets/js/metismenu.min.js"></script>

<script src="../assets/js/simplebar.min.js"></script>

<script src="../assets/js/dropzone.min.js"></script>

<script src="../assets/js/sticky-sidebar.min.js"></script>

<script src="../assets/js/tweenMax.min.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>

<script src="../assets/js/custom.js"></script>
</body>
</html>
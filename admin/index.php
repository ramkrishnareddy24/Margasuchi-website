<?php
session_start();
if(isset($_SESSION["admin"]))
{

header("Location:home.php");
}
else
{
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>IFRO | Admin | Login</title>
</head>

<body>
	<!--wrapper-->
		<?php
					include('config.php');
if(isset($_POST['submit']))
{
$email=stripslashes($_REQUEST['email']);
$password=stripslashes($_REQUEST['password']);
$result=mysqli_query($con,"select * from admin where email='$email' AND password='".md5($password)."'") or die(mysqli_error());
$query=mysqli_num_rows($result);
if(($query)>0)
{

//      $_SESSION['SESS_F_NAME'] = $member['name'];
//      $_SESSION['SESS_M_ID'] = $member2['email2'];
     // $_SESSION['SESS_LAST_NAME'] = $member['profImage'];
      //$_SESSION['SESS_PRO_PIC'] = $member['profImage']; 
$_SESSION['admin']=$email;
?>	
		 <script type="text/javascript">
		 alert('Login Successful')

		 window.location.href="home.php";		 
		</script>
<?php		
}		
else
{
echo '<div class="alert alert-danger"><strong>email/password incorrect</strong> 
  </div>';
}
}
?>
	<!--wrapper-->	
	<div class="wrapper">
		<div class="authentication-header"></div>
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						
						<div class="card">
							<div class="card-body">
								<div class="p-4 rounded">
									<div class="mb-4 text-center">
							<img src="assets/images/ifro1.jpg" width="180" alt="" />
						</div>
								
									<div class="login-separater text-center mb-4"> <span>Admin Sign In | IFRO</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" method="post" action="index.php">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Email Address / Mobile No</label>
												<input type="email" name="email" class="form-control" id="inputEmailAddress" placeholder="Email Address">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Enter Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
										
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
<?php
}
?>
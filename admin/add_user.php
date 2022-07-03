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
	<link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
		<link href="assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	<link href="assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	<link href="assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="assets/css/dark-theme.css" />
	<link rel="stylesheet" href="assets/css/semi-dark.css" />
	<link rel="stylesheet" href="assets/css/header-colors.css" />
		   <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<title>IFRO – Add Customers</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
				<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/ifro1.jpg" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Super Admin</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
				</div>
			</div>
			<!--navigation-->
<?php include('nav.php'); ?>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<?php include('header.php'); ?>
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Usermanagement</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
							
								<li class="breadcrumb-item active" aria-current="page">Add User</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col">
					<br>
					
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 needs-validation" method="post" action="add_user.php" enctype="multipart/form-data" novalidate>
								
									<?php

include('config.php');
// Check if image file is a actual image or fake image

if(isset($_POST['submit']))
{




 $adhar = $_FILES['adhar']['name']; 
 $fname = mysqli_real_escape_string($con,$_POST['fname']);
 $lname = mysqli_real_escape_string($con,$_POST['lname']);
 $phone = mysqli_real_escape_string($con,$_POST['phone']);
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $photo = $_FILES['photo']['name']; 
 $ref_code = mysqli_real_escape_string($con,$_POST['ref_code']);

 $acc_no=mysqli_real_escape_string($con,$_POST['acc_no']);
 $pan = mysqli_real_escape_string($con,$_POST['pan']);
 $ifsc = mysqli_real_escape_string($con,$_POST['ifsc']);
 $upi = mysqli_real_escape_string($con,$_POST['upi']);
 $pass = mysqli_real_escape_string($con,$_POST['pass']);
 $date = mysqli_real_escape_string($con,date('d-m-y'));    
 $note = mysqli_real_escape_string($con,$_POST['note']); 
 $plan = mysqli_real_escape_string($con,$_POST['plan']); 
 $roi = mysqli_real_escape_string($con,$_POST['roi']); 
 
 
 
 


  $sql="INSERT INTO `user` (`roi`,`plan`,`id` ,`date`,`adhar` ,`fname`,`lname`,`phone`,`email`,`photo`,`ref_code`,`acc_no`,`pan`,`ifsc`,`upi`,`pass`,`note`)
  VALUES ('$roi','$plan',NULL,'$date', '$adhar','$fname','$lname','$phone','$email','$photo','$ref_code','$acc_no','$pan','$ifsc','$upi','$pass','$note')";
  $query=mysqli_query($con,$sql)or die("ERROR:".mysqli_error($con));
   
  
   
   
  if($query){
  	
  move_uploaded_file($_FILES['adhar']['tmp_name'],"user_adhar/$adhar"); 
  move_uploaded_file($_FILES['photo']['tmp_name'],"user_photo/$photo");




  
  echo '
  <div class="bs-example" id="success-alert"> 
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> details  added successfully
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>';

  
 } else{
echo ' <div class="bs-example" id="success-alert"> 
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Request Unprocessed
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>'.mysqli_error($con);

}
}

?>
	   <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>

$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>									
									
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">First name</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="fname" placeholder="enter first name">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Last Name</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="lname"placeholder="enter last name">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<div class="mb-3">
										<label class="form-label">Aadhar photo</label>
										<input type="file" class="form-control" aria-label="file example"  name="adhar">
									</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label"> Phone</label>
											<input type="text" class="form-control" id="validationCustom01" value="" required name="phone" placeholder="enter phone">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label"> Email</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="email" placeholder="enter email">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Ref code</label>
											<input type="text" class="form-control" id="" value="" name="ref_code" placeholder="enter referral">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-3">
											<div class="mb-3">
										<label class="form-label">Passport Photo</label>
										<input type="file" class="form-control" aria-label="file example" name="photo">
									</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label"> PAN</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="pan" placeholder="enter PAN no">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Account no</label>
											<input type="text" class="form-control" id="validationCustom02" placeholder="enter BANK acc/no" name="acc_no" required>
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">IFSC</label>
											<input type="text" class="form-control" id="validationCustom01" value="" required name="ifsc" placeholder="enter ifsc">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">UPI Id</label>
											<input type="text" class="form-control" id="validationCustom02" value=""  name="upi" placeholder="enter UPI-id">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">Password</label>
										<input type="password" class="form-control" name="pass" placeholder="enter password">
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Confirm Password</label>
											<input type="password" class="form-control" id="validationCustom02" value="" 
											placeholder="confirm password">
											<div class="valid-feedback">Looks good!</div>
										</div>
											<div class="col-md-4">
											<label for="validationCustom02" class="form-label">PLAN</label>
										<select name="plan" class="form-control">
										    <?php
										    $query=mysqli_query($con,"select * from plan order by id");
										    while($row=mysqli_fetch_array($query))
										    {
										    ?>
										    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
										    <?php } ?>
										</select>
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Amount</label>
											<input type="text" class="form-control" id="validationCustom02" value=""  name="amount" placeholder="enter amount">
											<div class="valid-feedback">Looks good!</div>
										</div>
											<div class="col-md-4">
											<label for="validationCustom02" class="form-label">ROI %</label>
											<input type="text" class="form-control" id="validationCustom02" value=""  name="roi" placeholder="enter return %">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">Any Note/Remark</label>
										<textarea type="text" class="form-control" name="note"></textarea>
										</div>										
										<div class="col-12">
											<button class="btn btn-primary" name="submit" type="submit">Add USER</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright @ 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->

	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script>
		// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function () {
			  'use strict'
	
			  // Fetch all the forms we want to apply custom Bootstrap validation styles to
			  var forms = document.querySelectorAll('.needs-validation')
	
			  // Loop over them and prevent submission
			  Array.prototype.slice.call(forms)
				.forEach(function (form) {
				  form.addEventListener('submit', function (event) {
					if (!form.checkValidity()) {
					  event.preventDefault()
					  event.stopPropagation()
					}
	
					form.classList.add('was-validated')
				  }, false)
				})
			})()
	</script>
	<script src="assets/plugins/select2/js/select2.min.js"></script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
	</script>
		<script src="assets/plugins/datetimepicker/js/legacy.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.time.js"></script>
	<script src="assets/plugins/datetimepicker/js/picker.date.js"></script>
	<script src="assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
	<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>
	<script>
		$('.datepicker').pickadate({
			selectMonths: true,
	        selectYears: true
		}),
		$('.timepicker').pickatime()
	</script>
	<script>
		$(function () {
			$('#date-time').bootstrapMaterialDatePicker({
				format: 'YYYY-MM-DD HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				time: false
			});
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
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
	<title>Edit Payment</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
				<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo_1.png" class="logo-icon" alt="logo icon">
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
				<!--breadcrumb--><?php $id=$_GET['dataval']; ?>
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Usermanagement</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Agent</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Action</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">View Edit Payments</a>
								
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col">
					<br>
						<h6 class="mb-0 text-uppercase">EDIT User Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 needs-validation" method="post" action="edit_user.php?dataval=<?php echo $id ?>" enctype="multipart/form-data" novalidate>
									<?php
include('config.php');
$query2=mysqli_query($con,"select * from user where id='$id'");
$rows=mysqli_fetch_array($query2);
?>
									<?php


// Check if image file is a actual image or fake image

if(isset($_POST['submit']))
{
$pass = $_POST['pass']; 
$amount = $_POST['amount']; 
 $date = $_POST['date'];  
 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $ref = $_POST['ref_code'];
 $pan = $_POST['pan'];
 $adhar = $_POST['adhar'];
 $acc_no = $_POST['acc_no'];
 $ifsc = $_POST['ifsc'];
 $upi = $_POST['upi'];
 $note = $_POST['note'];
 $plan = $_POST['plan'];
 $pay_date = $_POST['pay_date'];
 $roi = $_POST['roi'];
 $pay_recv_date = $_POST['pay_recv_date'];
 $roi_perc = $_POST['roi_perc'];
 $ref_code = $_POST['ref_code'];
 
 
 

  $sql="UPDATE `user` SET 
`pass` = '$pass',
`amount` = '$amount',
`date` = '$date',
`fname` = '$fname',
`lname` = '$lname',
`phone` = '$phone',
`email` = '$email',
`pan` = '$pan',
`adhar` = '$adhar',
`acc_no` = '$acc_no',
`ifsc` = '$ifsc',
`upi` = '$upi',
`note` = '$note',
`plan` = '$plan',
`pay_date` = '$pay_date',
`roi` = '$roi',
`pay_recv_date` = '$pay_recv_date',
`roi_perc` = '$roi_perc',
`ref_code` = '$ref_code'
WHERE `user`.`id` = '$id'";
  $query=mysqli_query($con,$sql);
   
  if($query){
 


  
  echo '
  <div class="bs-example" id="success-alert"> 
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> details Updated successfully
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>
 <meta http-equiv="refresh" content="0;URL="http:/edit_payment.php?dataval='.$id.'" />    
';


  }else{
echo ' <div class="bs-example" id="success-alert"> 
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Request Unprocessed
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>'.mysqli_error($con);

}
}

?>
	   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>

$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});
</script>

									<div class="col-md-4">
											<label for="validationCustom02" class="form-label">DATE</label>
											<input type="text" class="form-control" id="validationCustom02" name="date" value="<?php echo $rows['date']; ?>" required>
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">Password</label>
											<input type="text" class="form-control" id="validationCustom01" value="<?php echo $rows['pass']; ?>" required name="pass">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">First Name</label>
											<input type="text" class="form-control" id="validationCustom01" value="<?php echo $rows['fname']; ?>" required name="fname">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">Last Name</label>
											<input type="text" class="form-control" id="validationCustom01" value="<?php echo $rows['lname']; ?>" required name="lname">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Phone</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['phone']; ?>" required name="phone">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Email</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['email']; ?>"   name="email">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">Ref-code</label>
											<input type="text" class="form-control" id="validationCustom01" value="<?php echo $rows['ref_code']; ?>" required  name="ref_code">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">PAN</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['pan']; ?>"   name="pan">
											<div class="valid-feedback">Looks good!</div>
										</div>
											
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Aadhar</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['adhar']; ?>"   name="adhar">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">Acc-no</label>
											<input type="text" class="form-control" id="validationCustom01" value="<?php echo $rows['acc_no']; ?>"   name="acc_no">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">IFSC</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['ifsc']; ?>"   name="ifsc">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">UPI</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['upi']; ?>"   name="upi">
											<div class="valid-feedback">Looks good!</div>
										</div>
										
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">NOTE</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['note']; ?>"   name="note">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Payment-Recv-date</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['pay_recv_date']; ?>" required name="pay_recv_date">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Amount</label>
											<input type="text" class="form-control" id="amount" value="<?php echo $rows['amount']; ?>" required name="amount">
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
										<script>
										    function fff()
										    {
										        var amt=document.getElementById('amount').value;
										        var perc=document.getElementById('perc').value;
										        var roi=amt*perc/100;
										        document.getElementById('roi').value=roi.toFixed(2);
										    }
										</script>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">ROI-date</label>
											<input type="text" class="form-control" id="validationCustom02" value="<?php echo $rows['pay_date']; ?>" required name="pay_date">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">ROI %</label>
											<input type="text" class="form-control" id="perc" value="<?php echo $rows['roi_perc']; ?>" onchange="fff();" required name="roi_perc">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">ROI-amount</label>
											<input type="text" class="form-control" id="roi" value="<?php echo $rows['roi']; ?>" required name="roi">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-12">
											<button class="btn btn-primary" name="submit" type="submit">Update</button>
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
			<p class="mb-0">Lovely Aluminium Copyright � 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Customise Panel</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Panel Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Backgrounds</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
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
	<title>IFRO – Add Payment</title>
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
					<div class="breadcrumb-title pe-3">Payments management</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								
								<li class="breadcrumb-item active" aria-current="page">Add Payments</li>
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
									<form class="row g-3 needs-validation" method="post" action="add_payment.php" enctype="multipart/form-data" novalidate>
								
									<?php
									include('config.php');
									


// Check if image file is a actual image or fake image



if(isset($_POST['submit']))
{
//$date = date('d-m-Y');
$rand=rand(0,99999);
 $plan = mysqli_real_escape_string($con,$_POST['plan']);
 $date = mysqli_real_escape_string($con,$_POST['date']);
 $name = mysqli_real_escape_string($con,$_POST['name']);
 $member_id = mysqli_real_escape_string($con,$_POST['member_id']);
 $amount = mysqli_real_escape_string($con,$_POST['amount']);
 $monthly_amt = mysqli_real_escape_string($con,$_POST['monthly_amt']);
 $status = mysqli_real_escape_string($con,$_POST['status']);
$pay_mode=mysqli_real_escape_string($con,$_POST['pay_mode']);
 $phone=mysqli_real_escape_string($con,$_POST['phone']);
 $email = mysqli_real_escape_string($con,$_POST['email']);
 $note = mysqli_real_escape_string($con,$_POST['note']);

 $c=0;
  $get=mysqli_query($con,"select * from user where member_id='$member_id'");
  $r=mysqli_fetch_array($get);
  $ref=$r['ref_code'];
$date=date('d-m-Y');
     
         
        if($c==0 && $ref!='AD9845')
        {
            $dir_amt=$amount*4/100;
          mysqli_query($con,"INSERT INTO dir_inc(`id`,`date`,`to_member_id`,`of_member_id`,`inv_amount`,`perc`,`dir_amt`) VALUES (NULL,'$date','$ref','$member_id','$amount','4','$dir_amt')");
          $upd=mysqli_query($con,"select * from user where member_id='$ref'");
          $rr=mysqli_fetch_array($upd);
          
          $c++;
          $ref=$rr['ref_code'];
          $c;
        }
        if($c==1 && $ref!='AD9845')
        {
            $dir_amt=$amount*2/100;
          mysqli_query($con,"INSERT INTO dir_inc(`id`,`date`,`to_member_id`,`of_member_id`,`inv_amount`,`perc`,`dir_amt`) VALUES (NULL,'$date','$ref','$member_id','$amount','2','$dir_amt')");
          $upd=mysqli_query($con,"select * from user where member_id='$ref'");
          $rr=mysqli_fetch_array($upd);
          
          $c++;
          $ref=$rr['ref_code'];
        }
        if($c==2 && $ref!='AD9845')
        {
            $dir_amt=$amount*1/100;
          mysqli_query($con,"INSERT INTO dir_inc(`id`,`date`,`to_member_id`,`of_member_id`,`inv_amount`,`perc`,`dir_amt`) VALUES (NULL,'$date','$ref','$member_id','$amount','1','$dir_amt')");
          $upd=mysqli_query($con,"select * from user where member_id='$ref'");
          $rr=mysqli_fetch_array($upd);
          
          $c++;
          $ref=$rr['ref_code'];
        }
         if($c==3 && $ref!='AD9845')
        {
            $dir_amt=$amount*1/100;
          mysqli_query($con,"INSERT INTO dir_inc(`id`,`date`,`to_member_id`,`of_member_id`,`inv_amount`,`perc`,`dir_amt`) VALUES (NULL,'$ref','$date','$member_id','$amount','1','$dir_amt')");
          $upd=mysqli_query($con,"select * from user where member_id='$ref'");
          $rr=mysqli_fetch_array($upd);
          
          $c++;
          $ref=$rr['ref_code'];
        }
         if($c==4 && $ref!='AD9845')
        {
            $dir_amt=$amount*1/100;
          mysqli_query($con,"INSERT INTO dir_inc(`id`,`date`,`to_member_id`,`of_member_id`,`inv_amount`,`perc`,`dir_amt`) VALUES (NULL,'$date','$ref','$member_id','$amount','1','$dir_amt')");
          $upd=mysqli_query($con,"select * from user where member_id='$ref'");
          $rr=mysqli_fetch_array($upd);
          
          $c++;
          $ref=$rr['ref_code'];
        }
         if($c==5 && $ref!='AD9845')
        {
            $dir_amt=$amount*1/100;
          mysqli_query($con,"INSERT INTO dir_inc(`id`,`date`,`to_member_id`,`of_member_id`,`inv_amount`,`perc`,`dir_amt`) VALUES (NULL,'$date','$ref','$member_id','$amount','1','$dir_amt')");
          $upd=mysqli_query($con,"select * from user where member_id='$ref'");
          $rr=mysqli_fetch_array($upd);
          
          $c++;
          $ref=$rr['ref_code'];
        }
        
      
  
  
 
 


  $sql="INSERT INTO `payments` (`id`,`rand` ,`member_id`,`name`,`date`,`plan` ,`amount`,`monthly_amt`,`note`,`pay_mode`)
  VALUES (NULL,'$rand','$member_id','$name','$date', '$plan','$amount','$monthly_amt','$note','$pay_mode')";
  $query=mysqli_query($con,$sql)or die("ERROR:".mysqli_error($con));
   
   

  
   									

  if($query){
      $date=date('d-m-Y');
      $of_member_id=$member_id;
      $fetch=mysqli_query($con,"select * from user where member_id='$member_id'");
      $row=mysqli_fetch_array($fetch);
      $ref=$row['ref_code'];
      $get=mysqli_query($con,"select * from user where my_ref='$ref'");
      $r=mysqli_fetch_array($get);
      $to_member_id=$r['member_id'];
      $name=$row['fname'];
      $count=$row['count'];
      if($count==0)
      {
          $perc=0;
      }
      elseif($count==1)
      {
          $perc=4;
      }elseif($count==2)
      {
          $perc=2;
      }else{
          $perc=1;
      }
      $amt=$amount*$perc/100;
      $ref=mysqli_query($con,"INSERT INTO ref(`id`,`rand`,`date`,`to_member_id`,`of_member_id`,`name`,`amount`,`perc`) VALUES 
      (NULL,'$rand','$date','$to_member_id','$of_member_id','$name','$amt','$perc')") or die(mysqli_error($con));
  	
  echo '
  <div class="bs-example" id="success-alert"> 
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> details  added successfully
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>
 <meta http-equiv="refresh" content="0;URL="add_payment.php" />  ';

  
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
											<label class="form-label">Select Customer</label>
										<div class="input-group">
											<select class="single-select form-select" name="name">
											    <option value="not selected">Select</option>
											    <?php
											    
											    
											        $query=mysqli_query($con,"select * from user order by id");
											        while($row=mysqli_fetch_array($query))
											        {
											    
											    ?>
												<option value="<?php echo $row['fname']; ?>"><?php echo $row['fname']; ?></option>
												<?php } ?>
											</select>
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
										</div>
										</div>
											<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Payment-date</label>
											<input type="date" class="form-control" id="validationCustom02" value="" required name="date" placeholder="enter Phone no">
											<div class="valid-feedback">Looks good!</div>
										</div>
										
											<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Member-id</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="member_id" placeholder="enter Member id">
											<div class="valid-feedback">Looks good!</div>
										</div>
									
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Plan</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="plan" placeholder="enter plan name">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Amount</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="amount" placeholder="enter Total amount">
											<div class="valid-feedback">Looks good!</div>
										</div>
										
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label"> Monthly-amt</label>
											<input type="text" class="form-control" id="validationCustom01" value="" required name="monthly_amt" placeholder="enter payable">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label"> Payment-mode</label>
											<input type="text" class="form-control" id="validationCustom02" value="" required name="pay_mode" placeholder="enter Payment method">
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Note</label>
											<input type="text" class="form-control" id="" value="" name="note" placeholder="enter note/remark">
											<div class="valid-feedback">Looks good!</div>
										</div>									
										<div class="col-12">
											<button class="btn btn-primary" name="submit" type="submit">Add Payment</button>
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
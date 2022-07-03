<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	
	<script>

		$(document).ready(function() {

			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			$('#exampl2 tr:last').remove();
			var table = $('#example2').DataTable( {
				"pageLength": 4,
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
		<title>IFRO Credit Report</title>
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

				
				<!--end row-->
				
				<div class="row">
					<div class="col">
					<br>
						<h6 class="mb-0 text-uppercase">Fetch Credit Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
							    <form method="post" action="credit_report.php">
								<div class="p-4 border rounded">
									<div class="col-md-4">
											<label class="form-label">From</label>
										<div class="input-group">
											<input type="date" name="from" class="form-control" placeholder="Enter From">
										</div>
										</div>
										<div class="col-md-4">
											<label class="form-label">To</label>
										<div class="input-group">
											<input type="date" name="to" class="form-control" placeholder="Enter To">
										</div>
										</div>
							
										<div class="col-12">
											<button class="btn btn-primary" name="fetch" type="submit">Fetch</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			</div>
		</div>
		<!--end page wrapper -->
			<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Reports</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Credit Report</li>
							</ol>
						</nav>
					</div>
					
				</div>
				
				<!--end breadcrumb-->
				<div class="row"id="rr">
					<div class="col">
		
						<h6 class="mb-0 text-uppercase">Credit Report details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								
								
								<div class="table-responsive">
								    <table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
										<th>Date</th>
										<th>Email</th>
										<th>Amount</th>
										</tr>
									</thead>
									<tbody>
					<?php
				
					if(isset($_POST['fetch']))
					{
					    
					$from=$_POST['from'];
				$from=date('d-m-Y', strtotime($from)).'<br>';
					$to=$_POST['to'];
				$to=date('d-m-Y', strtotime($to));
							
							    include('config.php');
							$data=mysqli_query($con,"select * from recv_pay where date between '$from' AND '$to'") or die("ERROR:".mysqli_error($con));
							
							$i=0;
							while($row=mysqli_fetch_array($data))
							
						{ $id=$row['id'];
						
						
						?>
						
						
										
								
									<tr>
										<td><?php echo $row['date']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td><?php echo $row['amount']; ?></td>
										</tr>
									<?php } 
									?>
									<script>
									window.location="credit_report.php#rr";
									</script>
									<?php
					    
					} ?>
									</tbody>
								</table>
								</div>
							
							</div>
						</div>
				
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
		<!--end page wrapper -->
		<?php
		if(isset($_GET['id']))
		{
			$id=$_GET['id'];
			$query=mysqli_query($con,"DELETE from pay_comm where id='$id'");
			if($query)
			{
			    ?>
			    <script>
			        window.location="pay_comm.php";
			    </script>
			    <?php
			}
		}
		?>
		
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	</div>
		<script>
		    	function fetch() {
	var questionno=document.getElementById('type').value;
	console.log(questionno);
 var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			    document.getElementById("ans").innerHTML = xmlhttp.responseText;
}
  };
  var PageToSendTo = "pay_comm_fetch.php?";
 var MyVariable = questionno;
 var VariablePlaceholder = "type=";
 var UrlToSend = PageToSendTo + VariablePlaceholder + MyVariable ;
 xmlhttp.open("GET", UrlToSend, false);
 xmlhttp.send();
 }



		</script>
		<div id="ans"></div>
	
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
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
			<script>

    
    $('.delete').on('click', function() {
        
      var result = confirm('Are you sure?');
      if (result) {
        return true;
      } else {
        return false;
      }

    });
  
</script>
	<?php
if (isset($_GET['delval'])) {
  $key = mysqli_real_escape_string($con, $_GET['delval']);
  $sqld = mysqli_query($con, "delete from pay_comm where id = '$key'");
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=pay_comm.php\">";
}
?>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
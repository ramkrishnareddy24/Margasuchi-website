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
	<title>Lovely Aluminium – Add Customer Commitment Payment</title>
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
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Payment Commitments</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Customer Payment Commitment</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Action</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">View All Customer Payment Commitments</a>
								
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<?php 
				include('config.php');
				date_default_timezone_set("Asia/Calcutta");
				if(isset($_POST['submit']))
				{
				    
				    $type=$_POST['type'];
				    $name=$_POST['name'];
				    $pay_date=$_POST['pay_date'];
				    $pay_amt=$_POST['pay_amt'];
				    $remark=$_POST['note'];
				    $date=date('d-m-Y');
				    
	  $query=mysqli_query($con,"Insert into pay_comm(`id`,`type`,`name`,`pay_date`,`amount`,`remark`,`date`) VALUES(NULL,'$type','$name','$pay_date','$pay_amt','$remark','$date')") or die("ERROR:".mysqli_error($con));
	   if($query){
 
  

  
  echo '
  <div class="bs-example" id="success-alert"> 
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> details added successfully
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>'.' <meta http-equiv="refresh" content="0;URL="pay_comm.php/" />  ';

  }else{
echo ' <div class="bs-example" id="success-alert"> 
    <div class="alert alert-danger alert-dismissible fade show">
        <strong>Error!</strong> Request Unprocessed
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>';

}
				}
				?>
				<div class="row">
					<div class="col">
					<br>
						<h6 class="mb-0 text-uppercase">Add New Customer Payment Commitment Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 needs-validation" method="post" action="pay_comm.php">
									<div class="col-md-4">
											<label class="form-label">Type</label>
										<div class="input-group">
											<select class="single-select form-select" name="type">
											    <option value="Recievable">Recievable</option>
												<option value="Payable">Payable</option>
												
											</select>
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
										</div>
										</div>
										<div class="col-md-4">
											<label class="form-label">Select Customer</label>
										<div class="input-group">
											<select class="single-select form-select" name="name">
											    <option value="">Select</option>
											    <?php
											    
											    
											        $query=mysqli_query($con,"select * from cus_gra_gra order by id");
											        while($row=mysqli_fetch_array($query))
											        {
											    
											    ?>
												<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
												<?php } ?>
											</select>
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
										</div>
										</div>
										
										<div class="col-md-4">
											<label for="validationCustom01" class="form-label">Committed Date</label>
										<input type="text" class="form-control datepicker" name="pay_date"/>
											

										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Committed Amount</label>
											<input type="text" class="form-control" id="validationCustom02" value="" name="pay_amt" required>
											<div class="valid-feedback">Looks good!</div>
										</div>
										<div class="col-md-4">
											<label for="validationCustom02" class="form-label">Remark / Note</label>
											<input type="text" class="form-control" id="validationCustom02" value="" name="note">
											<div class="valid-feedback">Looks good!</div>
										</div><!--
<div class="col-md-4">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="gridCheck" name="reminder">
											<label class="form-check-label" for="gridCheck">Set Reminder</label>
										</div></div>-->
										<div class="col-12">
											<button class="btn btn-primary" type="submit" name="submit">Add Details</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
				<div class="row">
					<div class="col">
					<br>
						<h6 class="mb-0 text-uppercase">Fetch Payment Commitment Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									
									<div class="col-md-4">
											<label class="form-label">Type</label>
										<div class="input-group">
											<select class="single-select form-select" id="type" name="type">
											    <option value="Recievable">Recievable</option>
												<option value="Payable">Payable</option>
												
											</select>
											<button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
											</button>
										</div>
										</div>
							
										<div class="col-12">
											<button class="btn btn-primary" onclick="fetch();">Fetch</button>
										</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
					<br>
						<h6 class="mb-0 text-uppercase">Fetch Pay-comm Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
							    <form method="post" action="pay_comm.php">
								<div class="p-4 border rounded">
									<div class="col-md-4">
											<label class="form-label">From</label>
										<div class="input-group">
											<input type="datetime-local" name="from" class="form-control" placeholder="Enter From">
										</div>
										</div>
										<div class="col-md-4">
											<label class="form-label">To</label>
										<div class="input-group">
											<input type="datetime-local" name="to" class="form-control" placeholder="Enter To">
										</div>
										</div>
							
										<div class="col-12">
											<button class="btn btn-primary" name="fetch" type="submit">Fetch</button>
										</div><br><br>
											<div class="col-12">
											<button class="btn btn-primary" name="today" type="submit">Today</button>
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
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Basic Table</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<script type="text/javascript">
	function up(id) {

//alert(id);
     var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			   // document.getElementById("upd").innerHTML = xmlhttp.responseText;
			    
		
    }
  };
  var PageToSendTo = "upd2.php?";
 var MyVariable = id;
 var VariablePlaceholder = "id=";
 var UrlToSend = PageToSendTo + VariablePlaceholder + MyVariable;

 xmlhttp.open("GET", UrlToSend, false);
 xmlhttp.send();
 alert(1)
 window.location="pay_comm.php";
 }
</script>
				<!--end breadcrumb-->
				<div class="row"id="rr">
					<div class="col">
		
						<h6 class="mb-0 text-uppercase">Payment-comm details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								
								
								<div class="table-responsive">
								    <table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
										    <th scope="col">sl no</th>
											
											<th scope="col">DATE</th>
											<th scope="col">NAME</th>
											<th scope="col">TYPE</th>
											<th scope="col">AMOUNT</th>
											<th scope="col">PAY-DATE</th>
											<th scope="col">REMARK</th>
											<th scope="col">CLOSE</th>
											<th scope="col">ACTION</th>
											
										
											
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
							$data=mysqli_query($con,"select * from pay_comm where pay_date between '$from' AND '$to'") or die("ERROR:".mysqli_error($con));
							
							$i=0;
							while($row=mysqli_fetch_array($data))
							
						{ $id=$row['id'];
						
						$strike=$row['status'];
	if($strike==1)
	{
		$strike="text-decoration: line-through;";
	}else{
		$strike=null;
	}
						?>
						
						
										<tr style="<?php echo $strike; ?>">
										<td>
					<?php echo ++$i; ?>
											</td>
											<td>
					<?php echo $row['date']; ?>
											</td>
											<td>
					<?php echo $row['name']; ?>
											</td>
											<td>
					<?php echo $row['type']; ?>
											</td>
											<td>
					<?php echo $row['amount']; ?>
											</td>
											<td>
					<?php echo $row['pay_date']; ?>
											</td>
												<td>
					<?php echo $row['remark']; ?>
											</td>
												<td>
					<?php echo $row['close']; ?>
											</td>
											<td>
											    	<input type="checkbox" name="check" aria-label="Checkbox for following text input" onChange='up(this.id)' id="<?php echo $row['id']; ?>">
											</td>
										
											
										
										</tr>
									<?php } 
									?>
									<script>
									window.location="pay_comm.php#rr";
									</script>
									<?php
					    
					}elseif(isset($_POST['today'])){
									    
				
			$today=	date("j F, Y");  
				
							
							    include('config.php');
							$data=mysqli_query($con,"select * from pay_comm where pay_date='$today'") or die("ERROR:".mysqli_error($con));
							
							$i=0;
							while($row=mysqli_fetch_array($data))
							
						{ $id=$row['id'];
						
												$strike=$row['status'];
	if($strike==1)
	{
		$strike="text-decoration: line-through;";
	}else{
		$strike=null;
	}
						?>
						
						
										<tr style="<?php echo $strike; ?>">
										<td>
					<?php echo ++$i; ?>
											</td>
											<td>
					<?php echo $row['date']; ?>
											</td>
											<td>
					<?php echo $row['type']; ?>
											</td>
											<td>
					<?php echo $row['amount']; ?>
											</td>
											<td>
					<?php echo $row['pay_date']; ?>
											</td>
												<td>
					<?php echo $row['remark']; ?>
											</td>
												<td>
					<?php echo $row['close']; ?>
											</td>
											<td>
											    	<input type="checkbox" name="check" aria-label="Checkbox for following text input" onChange='up(this.id)' id="<?php echo $row['id']; ?>">
											</td>
											
									
									
									
									
									</tr>
									<?php } 
									?>
									<script>
									window.location="pay_comm.php#rr";
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
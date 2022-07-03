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
	<link href="assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>IFRO | Manage Payments</title>
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
					<div class="breadcrumb-title pe-3">Payment management</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								
								<li class="breadcrumb-item active" aria-current="page">All Paid Payments</li>
							</ol>
						</nav>
					</div>
				
				</div>

			
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
									    
										<th>Date</th>
										<th>Customer Name</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Plan</th>
										<th>Amount</th>
										<th>Monthly-Amt</th>
										<th>Payment-mode</th>
										<th>Note</th>
										<th>Action</th>																																							
									</tr>
								</thead>
								<tbody>
								<?php 
								include('config.php');
								$query=mysqli_query($con,"select * from payments where status=1 order by id");
								while($row=mysqli_fetch_array($query))
								{
								?>
									<tr>
									   
										<td><?php echo $row['date']; ?></td>
										<td><?php echo $row['name']; ?></td>
										<td><?php echo $row['phone']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td><?php echo $row['plan']; ?></td>
										<td><?php echo $row['amount']; ?></td>
										<td><?php echo $row['monthly_amt']; ?></td>
										<td><?php echo $row['pay_mode']; ?></td>
										<td><?php echo $row['note']; ?></td>
                          <td><a href="edit_payment.php?dataval=<?php echo $row['id'];?>"><button class="btn btn-primary btn-xs far fa-edit" data-title="Edit" data-toggle="modal"><span class="glyphicon glyphicon-pencil"></span></button></a> 
						  <a href="manage_payment.php?deleteval=<?php echo $row['id'];?>" class="delete"><button class="btn btn-danger btn-xs fas fa-trash-alt" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></td>																																							
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		<?php
if (isset($_GET['deleteval'])) {
  $key = mysqli_real_escape_string($con, $_GET['deleteval']);
  $sqld = mysqli_query($con, "delete from payments where id = '$key'");
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=manage_payments.php\">";
}
if (isset($_GET['id'])) {
  $key = mysqli_real_escape_string($con, $_GET['id']);
  $sqld = mysqli_query($con, "UPDATE payments SET status=1 where id = '$key'");
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=manage_payments.php\">";
}
?>
<script>
  $(function() {
    $('#toggle-two').bootstrapToggle({
      on: 'Enabled',
      off: 'Disabled'
    });
  })
    $(document).ready(function() {
    $('.delete').on('click', function() {
      var result = confirm('Are you sure?');
      if (result) {
        return true;
      } else {
        return false;
      }

    });
  });
</script>
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
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
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
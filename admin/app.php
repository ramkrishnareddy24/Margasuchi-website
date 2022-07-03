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
	<title>MylocalMatrimony | Manage Users</title>
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
					<div class="breadcrumb-title pe-3">User management</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
							
								<li class="breadcrumb-item active" aria-current="page">Manage Users</li>
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
									    <th>Approve</th>
										<th>Join-date</th>
										<th>Member-id</th>
										<th>First name</th>
										<th>Last name</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Gender</th>
										<th>DOB</th>
										<th>Country</th>
										<th>State</th>
										<th>District</th>
										<th>Taluq</th>
										<th>Tongue</th>
										<th>Religion</th>
										<th>Caste</th>
										<th>Sub-Caste</th>
										<th>For</th>
										<th>Status</th>
										<th>Count</th>
										<th>Photo</th>
										<th>Action</th>																																							
									</tr>
								</thead>
								<tbody>
								<?php 
								include('config.php');
								$query=mysqli_query($con,"select * from member where status=0 AND reg_status=0 order by id");
								while($row=mysqli_fetch_array($query))
								{
								    if($row['status']==0)
								    {
								        $status="Active";
								    }else{
								        $status="InActive";
								    }
								    $id=$row['id'];
								    $phone=$row['phone'];
								?>
									<tr>
									    <td><a href="app.php?id=<?php echo $id; ?>&phone=<?php echo $phone; ?>"><button class="btn btn-success">Approve</button></a></td>
										<td><?php echo $row['date']; ?></td>
										<td><?php echo $row['member_id']; ?></td>
										<td><?php echo $row['fname']; ?></td>
										<td><?php echo $row['lname']; ?></td>
										<td><?php echo $row['phone']; ?></td>
										<td><?php echo $row['email']; ?></td>
										<td><?php echo $row['gender']; ?></td>										
										<td><?php echo $row['dob']; ?></td>
										<td><?php echo $row['country']; ?></td>
										<td><?php echo $row['state']; ?></td>
										<td><?php echo $row['district']; ?></td>
										<td><?php echo $row['taluq']; ?></td>
										<td><?php echo $row['tongue']; ?></td>
										<td><?php echo $row['religion']; ?></td>
										<td><?php echo $row['caste']; ?></td>
										<td><?php echo $row['subcaste']; ?></td>
										<td><?php echo $row['for']; ?></td>
										<td><?php echo $status; ?></td>
										<td><?php echo $row['count']; ?></td>
										<td><img src="user_photo/<?php echo $row['photo']; ?>" style="height:28px; width:28px;" /></td>
                          <td>
						  <a href="app.php?deleteval=<?php echo $row['id'];?>" class="delete"><button class="btn btn-danger btn-xs fas fa-trash-alt" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></td>																																							
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
  $sqld = mysqli_query($con, "delete from member where id = '$key'");
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=approve.php\">";
}
?>
		<?php
if (isset($_GET['id'])) {
  $key = mysqli_real_escape_string($con, $_GET['id']);
  $phone=$_GET['phone'];
  $sqld = mysqli_query($con, "UPDATE member SET status=1,reg_status=1 where id = '$key'");
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=app.php\">";
  
  $authKey = "37436ANnJ7xbUS61af00aeP30";

//Multiple mobiles numbers separated by comma
echo $mobileNumber = '91'."$phone";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "MYLCAL";

//Your message to send, Add URL encoding here.
$message = urlencode("Your member registration details At Mylocalmatrimony is approved you can now login");

//Define route 
$route = '6';
//Prepare you post parameters
$postData = array(
    'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'response'=>'json',
    'sender' => $senderId,
    'route' => $route,
    'country' => '0',
    'DLT_TE_ID' => '1207163859189802308'
);

//API URL
$url="http://fastsms.fastsmsindia.com/api/sendhttp.php?";
//$url="http://fastsms.fastsmsindia.com/api/sendhttp.php?authkey=37436ANnJ7xbUS61af00aeP30&mobiles=91.'$phone'.&message='$message'&response=json&sender='$senderId'&route=6&country=0&DLT_TE_ID=1207163859228839400";


// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}
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
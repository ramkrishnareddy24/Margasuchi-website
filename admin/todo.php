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
				"pageLength": 25,
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
	<title>Synadmin – Bootstrap5 Admin Template</title>
</head>

<body>
    <script>
        $( document ).ready(function() {
  //  $("#edit").removeAttr("style").hide();
});
    </script>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Lovely Aluminium</h4>
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
					<div class="breadcrumb-title pe-3">Applications</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">To Do List</li>
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
				<!--end breadcrumb-->
				<?php
				include('config.php');
				date_default_timezone_set('Asia/Kolkata');
				if(isset($_POST['submit']))
				{
				$date=date('Y-m-d H:i:s');
				$todo=$_POST['todo'];
				$type=$_POST['type'];
				$remark=$_POST['remark'];
				$query=mysqli_query($con,"INSERT INTO todo (`id`,`date`,`type`,`todo`,`remark`,`status`) VALUES (NULL,'$date','$type','$todo','$remark','0')") or die("error:".mysqli_error($con));
				if($query)
				{
					 echo '
  <div class="bs-example" id="success-alert"> 
    <div class="alert alert-success alert-dismissible fade show">
        <strong>Success!</strong> Details added successfully
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
</div>';
?>
<script>
    window.location="todo.php";
</script>
<?php
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
				<form method="post" action="todo.php" id="add">
				<div class="card">
					<div class="card-body">
						<h4 class="mb-0">To Do List</h4>
						<hr/>
						<div class="row gy-3">
							<div class="col-md-12">
								<textarea placeholder="enter todo list" id="todo-input" name="todo" type="text" class="form-control" value=""></textarea>
							</div>
							<div class="col-md-6">
								<input placeholder="enter Remark/note" id="todo-input" name="remark" type="text" class="form-control" value="">
							</div>
							<div class="col-md-4">
								<input placeholder="enter type" id="todo-input" name="type" type="text" class="form-control" value="">
							</div>
							<div class="col-md-2 text-end d-grid">
			<button type="submit" name="submit" class="btn btn-primary">Add todo</button>
							</div>
						</div>
						<div class="form-row mt-3">
<?php
$query=mysqli_query($con,"select * from todo order by id");
while($row=mysqli_fetch_array($query))
{
	$strike=$row['status'];
	if($strike==1)
	{
		$strike="text-decoration: line-through;";
	}else{
		$strike=null;
	}
	$date=$row['date'];
	$date=date("d-m-Y H:i:s", strtotime($date));
 ?>
 <script type="text/javascript">
	function up(id) {

//alert(id);
     var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

			   // document.getElementById("upd").innerHTML = xmlhttp.responseText;
			    
		
    }
  };
  var PageToSendTo = "upd.php?";
 var MyVariable = id;
 var VariablePlaceholder = "id=";
 var UrlToSend = PageToSendTo + VariablePlaceholder + MyVariable;

 xmlhttp.open("GET", UrlToSend, false);
 xmlhttp.send();
 window.location="todo.php";
 }
</script>
<div id="upd"></div>
					<div class="col-12">
							<div class="pb-3 todo-item">
				<div class="input-group"><div class="input-group-text"><?php echo $row['type']; ?></div>
					<div class="input-group-text"><?php echo $date ?></div>
						<div class="input-group-text">
							
					<input type="checkbox" name="check" aria-label="Checkbox for following text input" onChange='up(this.id)' id="<?php echo $row['id']; ?>">
						</div>
	<input type="text"  readonly class="form-control aria-label Text input with checkbox ss" value="<?php echo $row['todo']; ?>"
					style="<?php echo $strike; ?>">
					
					<div class="input-group-text"><?php echo $row['close']; ?></div>
					<a href="todo.php?edit=<?php echo $row['id']; ?>" class="btn btn-outline-secondary bg-danger text-white"  name="delete" id="button-addon2 "><i class="bx bx-edit"></i></a>
						<a href="todo.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-secondary bg-danger text-white"  name="delete" id="button-addon2 ">X</a>
						
				</div>
				<input type="text"  readonly class="form-control aria-label Text input with checkbox ss" value="<?php echo $row['remark']; ?>"
					style="<?php echo $strike; ?>">
					
			</div>
							</div>
						<?php } ?>
						</div>
					</div>
				</div>
				</form>
				<?php
				if(isset($_GET['edit']))
				{
				    ?>
				    <script>
				        $("#add").removeAttr("style").hide();
				        $("#edit").show();
				    </script>
				    <?php
				    $id=$_GET['edit'];
				    $query=mysqli_query($con,"select * from todo where id='$id'");
				    $row=mysqli_fetch_array($query);
				    $todo=$row['todo'];
				    $remark=$row['remark'];
				    $type=$row['type'];
				echo '
				<form method="post" action="todo.php" id="edit">
				<div class="card">
					<div class="card-body">
						<h4 class="mb-0">To Do List</h4>
						<hr/>
						<div class="row gy-3">
							<div class="col-md-12">
								<input placeholder="enter todo list" id="todo-input" name="todo" type="text" class="form-control" value="'.$todo.'">
							</div>
							<div class="col-md-6">
								<input placeholder="enter Remark/note" id="todo-input" name="remark" type="text" class="form-control" value="'.$remark.'">
							</div>
							<div class="col-md-4">
								<input placeholder="enter type" id="todo-input" name="type" type="text" class="form-control" value="'.$type.'">
								<input placeholder="enter type" id="todo-input" name="id" type="hidden" class="form-control" value="'.$id.'">
							</div>
							<div class="col-md-2 text-end d-grid">
			<button type="submit" name="update" class="btn btn-primary">UPDATE</button>
							</div>
						</div>
				

					
						</div>
					</div>
				</div>
				</form>
				';
				}
				?>
				<?php
				if(isset($_POST['update']))
				{
				    $todo=$_POST['todo'];
				    $remark=$_POST['remark'];
				    $type=$_POST['type'];
				    $id=$_POST['id'];
				    
				    $query=mysqli_query($con,"UPDATE todo SET
				    `todo` = '$todo',
				    `remark` = '$remark',
				    `type` = '$type'
				    WHERE id='$id'");
				    
				    if($query)
				    {
				        ?>
				        <script>
				            alert("UPDATED successfully");
				            window.location="todo.php";
				        </script>
				        <?php
				    }else{
				        
				        ?>
				        <script>
				            alert("ERROR:request unprocessed");
				        </script>
				        <?php
				    }
				}
				?>
					<br>
						<h6 class="mb-0 text-uppercase">Fetch TODO Details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
							    <form method="post" action="todo.php">
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
							<div class="col-md-4">
											<label class="form-label">TYPE</label>
										<div class="input-group">
										<select name="type" class="form-control">
										    
										    <?php
										    $query=mysqli_query($con,"select * from todo");
										    while($row=mysqli_fetch_array($query))
										    {
										    ?>
										    <option value="<?php echo $row['type']; ?>"><?php echo $row['type']; ?></option>
										    <?php } ?>
										</select>
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
				<!--end breadcrumb-->
				<div class="row"id="rr">
					<div class="col">
		
						<h6 class="mb-0 text-uppercase">TODO details</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								
								
								<div class="table-responsive">
								    <table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
										    <th scope="col">sl no</th>
											
											<th scope="col">DATE</th>
											<th scope="col">TYPE</th>
											<th scope="col">TODO</th>
											<th scope="col">REMARK</th>
											<th scope="col">CLOSE-DATE</th>
										
											
										</tr>
									</thead>
									<tbody>
					<?php
				
					if(isset($_POST['fetch']))
					{
					    
					$from=$_POST['from'];
				$from=date('Y-m-d H:s:i', strtotime($from)).'<br>';
					$to=$_POST['to'];
				$to=date('Y-m-d H:s:i', strtotime($to));
							if(isset($_POST['type']))
							{
							    $type=$_POST['type'];
							    $sql="select * from todo where type='$type'";    
							}else{
							    
							
							$sql="select * from todo where Date(date) between '$from' AND '$to'";
							}
							    include('config.php');
							$data=mysqli_query($con,$sql) or die("ERROR:".mysqli_error($con));
							
							$i=0;
							while($row=mysqli_fetch_array($data))
							
						{ $id=$row['id'];
						?>
						
						
										<tr>
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
					<?php echo $row['todo']; ?>
											</td>
											<td>
					<?php echo $row['remark']; ?>
											</td>
											<td>
					<?php echo $row['close']; ?>
											</td>
										
											
										
										</tr>
									<?php } 
									?>
									<script>
									window.location="todo.php#rr";
									</script>
									<?php
					    
					}elseif(isset($_POST['today'])){
									    
				$today=date('Y-m-d');
				
							
							    include('config.php');
							$data=mysqli_query($con,"select * from todo where Date(date)='$today'") or die("ERROR:".mysqli_error($con));
							
							$i=0;
							while($row=mysqli_fetch_array($data))
							
						{ $id=$row['id'];
						?>
						
						
										<tr>
										<td>
					<?php echo ++$i; ?>
											</td>
											<td>
					<?php echo $row['date']; ?>
											</td>
											<td>
					<?php echo $row['todo']; ?>
											</td>
											<td>
					<?php echo $row['remark']; ?>
											</td>
											<td>
					<?php echo $row['close']; ?>
											</td>
									
									
									
									
									</tr>
									<?php } 
									?>
									<script>
									window.location="todo.php#rr";
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
			$query=mysqli_query($con,"DELETE from todo where id='$id'");
			if($query)
			{
			    ?>
			    <script>
			        window.location="todo.php";
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
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
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
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
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
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<script>
		// to do list 
		 var todos = [{
			text: "take out the trash",
			done: false,
			id: 0
		}];
		var currentTodo = {
			text: "",
			done: false,
			id: 0
		}
		document.getElementById("todo-input").oninput = function (e) {
			currentTodo.text = e.target.value;
		};
		/*
			//jQuery Version
			$('#todo-input').on('input',function(e){
				currentTodo.text = e.target.value;
			   });
			*/
		function DrawTodo(todo) {
			var newTodoHTML = `
			<div class="pb-3 todo-item" todo-id="${todo.id}">
				<div class="input-group">
					
						<div class="input-group-text">
							<input type="checkbox" onchange="TodoChecked(${todo.id})" aria-label="Checkbox for following text input" ${todo.done&& "checked"}>
						</div>
					
					<input type="text" readonly class="form-control ${todo.done&&" todo-done "} " aria-label="Text input with checkbox" value="${todo.text}">
					
						<button todo-id="${todo.id}" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo(this);" id="button-addon2 ">X</button>
					
				</div>
			</div>
			  `;
			var dummy = document.createElement("DIV");
			dummy.innerHTML = newTodoHTML;
			document.getElementById("todo-container").appendChild(dummy.children[0]);
			/*
				//jQuery version
				 var newTodo = $.parseHTML(newTodoHTML);
				 $("#todo-container").append(newTodo);
				*/
		}

		function RenderAllTodos() {
			var container = document.getElementById("todo-container");
			while (container.firstChild) {
				container.removeChild(container.firstChild);
			}
			/*
				//jQuery version
				  $("todo-container").empty();
				*/
			for (var i = 0; i < todos.length; i++) {
				DrawTodo(todos[i]);
			}
		}
		RenderAllTodos();

		function DeleteTodo(button) {
			var deleteID = parseInt(button.getAttribute("todo-id"));
			/*
				//jQuery version
				  var deleteID = parseInt($(button).attr("todo-id"));
				*/
			for (let i = 0; i < todos.length; i++) {
				if (todos[i].id === deleteID) {
					todos.splice(i, 1);
					RenderAllTodos();
					break;
				}
			}
		}

		function TodoChecked(id) {
			todos[id].done = !todos[id].done;
			RenderAllTodos();
		}

		function CreateTodo() {
			newtodo = {
				text: currentTodo.text,
				done: false,
				id: todos.length
			}
			todos.push(newtodo);
			RenderAllTodos();
		}
	</script>
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
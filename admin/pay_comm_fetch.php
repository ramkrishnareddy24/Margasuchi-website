	<?php
	$type=$_GET['type'];
	?>
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
				<div class="row">
					<div class="col">
		
						<h6 class="mb-0 text-uppercase">Payment Commitments</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								
								
								<div class="table-responsive">
								    <table id="example2" class="table table-striped table-bordered">
									<thead>
										<tr>
										    <th scope="col">sl no</th>
											<th scope="col">TYPE</th>
											<th scope="col">DATE</th>
											<th scope="col">NAME</th>
											<th scope="col">AMOUNT</th>
											<th scope="col">PAY-DATE</th>
											<th scope="col">REMARK</th>
											<th scope="col">CLOSE</th>
											<th scope="col">ACTION</th>
											
										
											<th>ACTION</th>
										</tr>
									</thead>
									<tbody>
					<?php
							
							    include('config.php');
							$data=mysqli_query($con,"select * from pay_comm where type='$type' order by id") or die("ERROR:".mysqli_error($con));
							
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
					<?php echo $row['type']; ?>
											</td>
											<td>
					<?php echo $row['date']; ?>
											</td>
											<td>
					<?php echo $row['name']; ?>
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
											
											<td>
					<a href="pay_comm.php?delval=<?php echo $row['id'] ?>" class="delete"><i class='bx bxs-trash'></i></a>
											</td>
											
										
										</tr>
									<?php  }?>
									</tbody>
								</table>
								</div>
							
							</div>
						</div>
				
				<!--end row-->
			</div>
		</div>
		<!--end page wrapper -->
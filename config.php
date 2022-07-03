<?php
$con=mysqli_connect("localhost","etagydcs_margasuchi","margasuchi@123");
mysqli_select_db($con,"etagydcs_margasuchi");
$echo='<div class="alert alert-success"><strong> congrats registeration successful </strong> </div>';
if($con)
{
 
}else{
 die('error'.mysqli_error());
 } 
 ?>
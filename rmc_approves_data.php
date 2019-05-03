<?php
include_once("admin_navbar.php");
if(isset($_POST["sub"])){  
$con=mysqli_connect("localhost","root","","oamis");
$dist=$_POST["dist"];
$rmcname=$_POST["r_name"];
$sel="SELECT user_name,name,email,phone,address,pin,photo,gender,p.p_id FROM rmc_registration_info p inner join rmc_login_info l ON p.p_id=l.p_id and district=$dist AND rmc_id=$rmcname and l.status=0 ";
$res=mysqli_query($con,$sel);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<form action="rmc_update.php" method="post">
		 <div class="container col-lg-12 row">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-condensed">
								<thead>
									<tr>
										<th>User id</th>
										<th>Name</th>
										<th>E-mail</th>
										<th>phone</th>
										<th>Address</th>
										<th>Pin</th>
										<th>photo</th>
										<th>gender</th>
										<th>select Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $row[0];?> </td>
										<td><?php echo $row[1];?> </td>
										<td><?php echo $row[2];?> </td>
										<td><?php echo $row[3];?> </td>
										<td><?php echo $row[4];?> </td>
										<td><?php echo $row[5];?> </td>
										 <?php echo"<td><img style='height:100px;width:100px;' src='rmc_photo/".$row[6]."'></td>";
             									echo "<td>".$row[7]."</td>";?>
             									
										 <td><?php echo "<input type='checkbox' name='ck[]' value=".$row[8];?> </td> 
									</tr>
								</tbody>
							</table>
		<div class="form-group">
<div class="col-sm-offset-6 col-sm-10">
<button type="submit" class="btn btn-primary" name="submit" id="register">Approve</button>
</div>
						</div>
					</div>
			</div>
<?php
}
}
?>
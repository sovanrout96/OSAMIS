
<?php
include_once("navbar.php"); 
?>
<h3 class="page-header text-primary text-center">All Activated RMC List in Odisha </h3>
<?php 
$con=mysqli_connect("localhost","root","","oamis");

$sel="SELECT user_name,name,email,phone,address,pin,photo,gender,p.p_id FROM rmc_registration_info p inner join rmc_login_info l ON p.p_id=l.p_id  and l.status=1 ";
$res=mysqli_query($con,$sel);
		
		?>
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
										
									</tr>
								</thead>

								<tbody>
								<?php
								while($row=mysqli_fetch_array($res))
									{
								?>
									<tr>
										<td><?php echo $row[0];?> </td>
										<td><?php echo $row[1];?> </td>
										<td><?php echo $row[2];?> </td>
										<td><?php echo $row[3];?> </td>
										<td><?php echo $row[4];?> </td>
										<td><?php echo $row[5];?> </td>
										 <?php echo"<td><img style='height:100px;width:100px;' src='rmc_photo/".$row[6]."'></td>";
             									echo "<td>".$row[7]."</td>";?>

									 </tr> 
									<?php
          								}
    								?>	
								</tbody>
							</table> 
					</div>
			</div>
	

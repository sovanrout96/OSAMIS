<?php
include_once("rmc_navbar.php");
if(isset($_POST["sub"])){  
$con=mysqli_connect("localhost","root","","oamis");
$dist=$_POST["dist"];
$rmcname=$_POST["r_name"];
$mycname=$_POST['m_name'];
$sel="SELECT user_name,name,email,phone,address,pin,photo,gender,p.m_id FROM traders_registration_info p inner join traders_login_info l ON p.m_id=l.m_id and district_id='$dist' AND rmc_id='$rmcname' and myc_id='$mycname' and l.status=0 ";
$res=mysqli_query($con,$sel);
		
		?>
		<form action="traders_update.php" method="post">
		 <div class="container col-lg-12 row">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-condensed">
								<thead class="bg-primary">
									
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
									<?php while($row=mysqli_fetch_array($res))
										{ 
				                     ?>
									<tr>
										<td><?php echo $row[0];?> </td>
										<td><?php echo $row[1];?> </td>
										<td><?php echo $row[2];?> </td>
										<td><?php echo $row[3];?> </td>
										<td><?php echo $row[4];?> </td>
										<td><?php echo $row[5];?> </td>
										 <?php echo"<td><img style='height:100px;width:100px;' src='traders_photo/".$row[6]."'></td>";
             									echo "<td>".$row[7]."</td>";?>
             									
										 <td><?php echo "<input type='checkbox' name='ck[]' value=".$row[8];?> </td> 
									</tr>
									<?php
										}
									?>
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
?>
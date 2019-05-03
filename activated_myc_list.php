<?php
include_once("navbar.php");
  
$con=mysqli_connect("localhost","root","","oamis");
$sel="SELECT user_name,name,email,phone,address,pin,photo,gender,p.m_id FROM myc_registration_info p inner join myc_login_info l ON p.m_id=l.m_id  and l.status=0 ";

$res=mysqli_query($con,$sel);
																		
		?>
		<h3 class="page-header text-primary text-center">All Activated MYC List in Odisha </h3>
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
										 <?php echo"<td><img style='height:100px;width:100px;' src='myc_photo/".$row[6]."'></td>";
             									echo "<td>".$row[7]."</td>";?>
             									
										
									</tr>
							<?php
								}

							?>
								</tbody>
							</table>

						</div>
					</div>
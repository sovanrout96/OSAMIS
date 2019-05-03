<?php
include_once("rmc_navbar.php");
include_once("dbcon.php");
$q="SELECT l.m_id,name,phone,photo,licence_no,issued_on,valid_upto FROM traders_registration_info l inner join trad_licence_no_info p ON l.m_id=p.m_id";
$result=mysqli_query($con,$q);
?>
<div class="container col-lg-12 row">
	<h3 class="text-warning text-center">Display Traders Licence Details</h3>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-condensed">
								<thead>
									<tr class="bg-dark text-white text-center" >
										<th>M_id</th>
										<th> Name</th>
										<th>Phone</th>
										<th>Photo</th>
										<th>Licence No</th>
										<th>Issued On</th>
										<th>Ualid Upto</th>
									</tr>
								</thead>
								<tbody>
									<?php
								while($row=mysqli_fetch_array($result))
									{
									?>
									<tr class="bg-dark text-white text-center">
										<td><?php echo $row[0];?> </td>
										<td><?php echo $row[1];?> </td>
										<td><?php echo $row[2];?> </td>
										<?php echo"<td><img style='height:100px;width:100px;' src='traders_photo/".$row[3]."'></td>";
             									echo "<td>".$row[4]."</td>";?>
             							<td><?php echo $row[5];?> </td>
             							<td><?php echo $row[6];?> </td>
             						</tr>
             						<?php
             							}
             						?>
								</tbody>
							</table>
						</div>
					</div>




<?php
session_start();
include_once("rmc_navbar.php");
if(isset($_POST["sub"])){  
$con=mysqli_connect("localhost","root","","oamis");
$dist=$_POST["dist"];
$rmcname=$_POST["r_name"];
$mycname=$_POST['m_name'];
$sel="SELECT name,address,photo,gender,annual_income,audit_bal_sheet,income_cert,it_return,pan_card,p.m_id FROM traders_licence_info p inner join traders_registration_info l ON p.m_id=l.m_id and district_id='$dist' AND rmc_id='$rmcname' and myc_id='$mycname' and p.status=0";
// echo $sel;
$res=mysqli_query($con,$sel);
		
		?>
		<h2 class="text-primary text-center">Licence Generate</h2>
		<form action="licence_update.php" method="post">
		 <div class="container col-lg-12 row">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-condensed">
								<thead class="bg-primary ">
									<tr>
										<th>Trader id</th>
										<th>Name</th>
										<th>Address</th>
										<th>Photo</th>
										<th>Gender</th>
										<th>Annual Income</th>
										<th>Audit_Bal_Sheet</th>
										<th>Income Cert.</th>
										<th>IT Return</th>
										<th>PAN card</th>
										<th>Licence Gen.</th>
										
										
									</tr>
								</thead>
								<tbody>
									<?php
										while($row=mysqli_fetch_array($res))
											{
									?>
									<tr>
										<td><?php echo $row[9];?> </td>
										<td><?php echo $row[0];?> </td>
										<td><?php echo $row[1];?> </td>
										 <?php 
										 echo"<td><a href='traders_photo/".$row[2]."'target='_blank'><img style='height:100px;width:100px;' alt='thumbnail' src='traders_photo/".$row[2]."'></td>";
										 echo "<td>".$row[3]."</td>";
										 
										  echo"<td>".$row[4]."</td>";
										  echo"<td><a href='images/audit_bal_sheet/".$row[5]."' target='_blank'><img style='height:100px;width:100px;' alt='thumbnail' src='images/audit_bal_sheet/".$row[5]."'></a></td>";
										  echo"<td><a href='images/income_cert/".$row[5]."' target='_blank'><img style='height:100px;width:100px;' alt='thumbnail' src='images/income_cert/".$row[5]."'></a></td>";
										  echo"<td><a href='images/it_return/".$row[5]."'target='_blank'><img style='height:100px;width:100px;' alt='thumbnail' src='images/it_return/".$row[5]."'></a></td>";
										  echo"<td><a href='images/pan_card/".$row[5]."'target='_blank'><img style='height:100px;width:100px;' alt='thumbnail' src='images/pan_card/".$row[5]."'></a></td>";
										 ?>
									<td><button type="submit" class="btn btn-danger" name="generate"><a href="licence.php?id=<?php echo $row['m_id'];?>"class="text-success">Generate</a></button> </td>
							</td>

															
									</tr>
									<?php
										}
									?>
								</tbody>
							
							</table>
						</div><br><br><br/>
						</div></form>
			
<?php

}
?>

<!-- Modal for Traders Licence Creation  -->


 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>


<!-- Footer Area -->
<?php include_once("footer.php");?>

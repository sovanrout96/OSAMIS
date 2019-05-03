<?php
include_once("navbar.php");
?>
<?php
include_once("dbcon.php");
$q="SELECT l.category,item_name,item_price,commission_price,item_unit FROM item_detail p inner join category l ON p.category=l.category_id";
$result=mysqli_query($con,$q);
?>
<html>
<head>
</head>
	<body>
<div class="container col-lg-12 m-auto">
	<h3 class="text-warning text-center">Display Item Details</h3>
						<div class="table-responsive  col-lg-10">
							<table class="table table-bordered table-hover table-striped table-condensed ">
								<thead>
									<tr>
										<th>Category</th>
										<th>Item Name</th>
										<th>Price</th>
										<th>Commission Price</th>
										<th>unit</th>
									</tr>
								</thead>
				<?php
					while($row=mysqli_fetch_array($result))
							{
				?>
								<tbody>
									<tr>
										<td><?php echo $row[0];?> </td>
										<td><?php echo $row[1];?> </td>
										<td><?php echo $row[2];?> </td>
										<td><?php echo $row[3];?> </td>
										<td><?php echo $row[4];?> </td>
									</tr>
							  </tbody>
                 <?php
                            }
                 ?>
                              </table>
  					</div>
  				</div><br><br><br>
  		</body>
  		</html>
<?php include_once ("footer.php"); ?>
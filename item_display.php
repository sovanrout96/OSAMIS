<?php
include_once("admin_navbar.php");
include_once("dbcon.php");
$q="SELECT l.category,item_name,item_price,commission_price,item_unit FROM item_detail p inner join category l ON p.category=l.category_id";
$result=mysqli_query($con,$q);
?>
<div class="container col-lg-12 row">
	<h3 class="text-warning text-center">Display Item Details</h3>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-condensed">
								<thead>
									<tr class="bg-dark text-white text-center" >
										<th>Category</th>
										<th>Item Name</th>
										<th>Price</th>
										<th>Commission Price</th>
										<th>Unit</th>
										<th>Delete</th>
										<th>Update</th>
									</tr>
								</thead>
							<?php
								while($row=mysqli_fetch_array($result))
									{
							?>
								<tbody>
									<tr class="bg-dark text-white text-center">
										<td><?php echo $row[0];?> </td>
										<td><?php echo $row[1];?> </td>
										<td><?php echo $row[2];?> </td>
										<td><?php echo $row[3];?> </td>
										<td><?php echo $row[4];?> </td>
							
										<td><button class="btn btn-danger "><a href="item_delete.php?id=<?php echo $row['item_name'];?>"class="text-success">Delete</a></button> </td>
										<td><button class="btn btn-primary"><a href="item_update.php?id=<?php echo $row['item_name'];?>"class="text-danger">Update</a></button></td>
									</tr>
							  </tbody>
              		        <?php
           						}
      						?>
                              </table>

  					</div>

  				</div> 

  		
<?php
include_once("admin_navbar.php");
if(isset($_POST['submit'])){
include_once("dbcon.php");
$category=$_POST['s1'];
$iname=$_POST['iname'];
$price=$_POST['price'];
$coprice=$_POST['comprice'];
$unit=$_POST['unit'];
$id=$_GET['id'];
$q="UPDATE `item_detail` SET `category`=$category,`item_name`=$iname,`item_price`=$price,`commission_price`=$coprice,`item_unit`='$unit' WHERE `item_name`=$id";
mysqli_query($con,$q);
header('location:item_display.php');
}
?>
<div class="container">
	<div class="col-lg-6 m-auto">
		<form method="post" action="item_update.php">
			<div class="page-header bg-primary">
				<h2 class="text-white text-center">Update Item Details</h2>
			</div>
			<div class="form-group">
	 			<label for="sel1">Category</label>
      			<select class="form-control" id="sel1" name="s1">
        			<option value="" selected="" disabled="">Select Category</option>
        <?php
        $con=mysqli_connect('localhost','root','','oamis');
        	$q="select * from category";
        	$result=mysqli_query($con,$q);
        	while($query=mysqli_fetch_array($result)){
        ?>
		<option value="<?php echo $query['category_id']; ?>"> <?php echo $query['category']; ?></option>
        <?php
        	}
        ?>
      			</select>
  			</div>
			<div class="form-group">
				<label>Item Name:</label><br>
				<input type="text" name="iname" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Item Price:</label><br>
				<input type="text" name="price" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Item Commission Price:</label><br>
				<input type="text" name="comprice" autocomplete="off" class="form-control" required>
			</div>
			<div class="form-group">
	 			<label for="sel1">Unit</label>
      			<select class="form-control" id="sel2" name="unit">
      				<option value="" selected="" disabled="">Select Unit</option>
       			 	<option>Gallon</option>
        			<option>Dozen</option>
        			<option>Kwintal</option>
        			<option>Bag</option>
        			<option>Box</option>
        			<option>Kg</option>
        			<option>Bottles</option>
        			<option>One</option>
      			</select>
  			</div>			
	<button class="btn btn-danger m-auto" name="submit">Update Item</button>
		</form>
	</div>
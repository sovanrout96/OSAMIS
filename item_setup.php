<?php
include_once("admin_navbar.php");
// header("location:item_setup.php");
// DB Connection
if(isset($_POST['submit'])){
$con=mysqli_connect('localhost','root','','oamis');
$category=$_POST['s1'];
$iname=$_POST['iname'];
$price=$_POST['price'];
$coprice=$_POST['comprice'];
$unit=$_POST['unit'];
$q="INSERT INTO `item_detail`(`category`, `item_name`, `item_price`, `commission_price`, `item_unit`) VALUES ('$category','$iname','$price','$coprice','$unit')";
$result=mysqli_query($con,$q);
}
?>
<div class="container">
	<div class="col-lg-6 m-auto">
		<form method="post" action="item_setup.php">
			<div class="page-header bg-primary">
				<h2 class="text-white text-center">Setup Item Details</h2>
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
	<button class="btn btn-danger m-auto" name="submit">Add Item</button>
		</form>
	</div>
</div><br><br>

<?php
include_once("footer.php");
?>
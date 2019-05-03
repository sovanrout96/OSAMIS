<?php
session_start();
include_once("rmc_navbar.php");
?>
	<style>
		.c{
			border:2px solid black;
			background-color: orange;
		}

	</style>

</head>
<body style="background-color: teal;">
	<div class="container c">
	<form class= m-auto b" method="post" enctype="multipart/form-data" class="col-lg-6" action="traders_registration_data.php">
		<div class="page-header">
		<h3>Auction Creation</h3>
		
	</div>
		<div class="form-group">
			<label for="select" class="control-label">Select a District:</label>
		
        <?php
        $con=mysqli_connect('localhost','root','','oamis');

        $dist=$_SESSION['district'];
        $rmc=$_SESSION['rmc'];
        $myc=$_SESSION['myc'];
        $valid=$_SESSION['valid'];
        	$sel1="select district from district where district_id=$dist";
        	$result1=mysqli_query($con,$sel1);
        	while($query1=mysqli_fetch_array($result1)){
        ?>
		<input type="text"  readonly="" value="<?php echo $query1['district']; ?>"> 
        
     <?php
       	}
       ?>
        </div>

	<div class="form-group">
	 <label for="sel2">RMC Name:</label>
	 <?php
	 $sel2="select rmc_name from rmc_creates_info where rmc_id=$rmc ";
	 $result2=mysqli_query($con,$sel2);
        	while($query2=mysqli_fetch_array($result2)){
	 ?>
       <input type="text" readonly="" value="<?php echo $query2['rmc_name']; ?>"> 
       <?php
       	}
       ?>
   </div>
    	<div class="form-group">
	 <label for="sel2">MYC Name:</label>
	 <?php
	 $sel3="select myc_name from myc_creates_info where myc_id=$myc ";
	 $result3=mysqli_query($con,$sel3);
        	while($query3=mysqli_fetch_array($result3)){
	 ?>
       <input type="text" readonly="" value="<?php echo $query3['myc_name']; ?>"> 
       <?php
       	}
       ?>
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
	 			<label for="sel1">Traders License ID:</label>
      			<select class="form-control" id="sel2" name="s2">
        			<option value="" selected="" disabled="">Select License ID:</option>
        <?php
        $con=mysqli_connect('localhost','root','','oamis');
        	$q="select * from trad_licence_no_info";
        	$result=mysqli_query($con,$q);
        	while($query=mysqli_fetch_array($result)){
        ?>
		<option value="<?php echo $query['lic_id']; ?>"> <?php echo $query['licence_no']; ?></option>
        <?php
        	}
        ?>
     </select>
		</div>
</form>
</div>
</body>
</html>
<?php
// Footer Area
include ("footer.php");
?>



<?php
// Carosole Area
include ("admin_navbar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>jquery form</title>
	<script src="js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
		.c{
			border:2px solid black;
			background-color: orange;
		}

	</style>

</head>
<body>
<!-- Body Area -->
<h2 class="text-danger text-center">RMC CREATION </h2>
<div class="container c">
	<form class= m-auto b" method="post" action="rmc_creation_info.php">
	<div class="col-lg-12 col-md-12 row">
	<div class="col-lg-6 col-md-6">
<div class="page-header">
	<h2 class="text-primary">RMC Creation Page</h2>
</div>
	<div class="form-group">
	 <label for="sel1">Districts:</label>
      <select class="form-control" id="sel1" name="dist">
        <option value="" selected="" disabled="">Select Districts</option>
        <?php
        $con=mysqli_connect('localhost','root','','oamis');
        	$q="select * from district";
        	$result=mysqli_query($con,$q);
        	while($query=mysqli_fetch_array($result)){
        ?>
		<option value="<?php echo $query['district_id']; ?>"> <?php echo $query['district']; ?></option>
        <?php
        	}
        ?>
      </select>
  </div>
	
	<div class="form-group">
	 <label for="sel2">Location:</label>
      <select class="form-control" id="sel2" name="name">
       
      </select> 
	</div>
	<div class="form-group">
     <label>RMC Name:</label><br>
      <input id="name" type="text" class="form-control" name="location">
    </div>
	<div class="form-group">
	<label>Members:</label><br>
	<input type="text" name="member" class="form-control" required>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 row">
	<button type="submit" name="submit" class="btn btn-primary" style="margin-top: 50px; margin-left:500px; margin-bottom: 30px;">Add</button>    
	</div>
	</div>
</div>
</form>
</div>

	<script>
		$(document).ready(function(){
$("#sel1").change(function(){
			var dist_id=$(this).val();
			
			$.ajax({

				url:'dist_block.php',
				type:'POST',
				data:{dist_id:dist_id},
				success:function(result){
					$('#sel2').html(result);
			
                      }

				});
			});

		});

	</script>
</body>

<?php
// navbar area
include_once ("footer.php");
?>

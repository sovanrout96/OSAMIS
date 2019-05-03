
<?php
// Carosole Area
include ("navbar.php");



// Body Area
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
<body style="background-color: teal;">
	<h3 class="text-white text-center">MYC Registration & Login info</h3>
	<div class="container c">
	<form class= m-auto b" method="post" enctype="multipart/form-data" class="col-lg-6" action="myc_registration_data.php">
		<div class="page-header">
		<h3>MYC Registration info</h3>
		
	</div>
		<div class="form-group">
			<label for="select" class="control-label">Select a District</label>
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
	 <label for="sel2">RMC Name:</label>
      <select class="form-control" id="sel2" name="rmcname">
       
      </select> 
      <div class="form-group">
	 <label for="sel2">MYC Name:</label>
      <select class="form-control" id="sel3" name="mycnameid">
       
      </select> 
	</div>
	<div class="page-header">
		<h3>Member pesonal info</h3>
		
	</div>
	<div class="form-group">
		<label for="name" class=" control-label">Name</label>
		
			<input type="text" class="form-control" name="fname" id="name" placeholder="name">
		
	</div>
	<div class="form-group">
		<label for="email" class="control-label">E-mail</label>
		
		<input type="email" class="form-control" name="email" id="email" placeholder="email">
		
	</div>
	<div class="form-group">
		<label for="phone" class=" control-label">phone</label>
		
		<input type="number" class="form-control" name="phone" id="phone" placeholder="phone">
		
	</div>
	<div class="form-group">
		<label for="address" class=" control-label">Address</label>
		
			<input type="text" name="address" class="form-control" id="address" placeholder="address">
		</div>
		<div class="input-group">
	<label>Postal pin</label><br>
	<input type="textarea" name="pin" class="form-control" placeholder="Enter postal pin" required>
	</div>
	<div class="form-group">
		<label for="photo" class=" control-label">photo</label>
		
	<input type="file" class="form-control" name="photo" id="photo" placeholder="photo">
	</div>

	<div class="form-group">
		<label for="" class="control-label">gender:</label>
		<label class="radio-inline">
<input type="radio" name="gender" id="gender1" value="male">Male
</label>
<label class="radio-inline">
<input type="radio" name="gender" id="gender2" value="female">Female
</label>	
	
	</div>
	<div class="page-header">
		<h3>Login info</h3>
		
	</div>
	<div class="form-group">
		<label for="userid" class="control-label">Userid</label>
		
		<input type="text" class="form-control" name="uname" id="userid" placeholder="userid">
		
	</div>
	<div class="form-group">
		<label for="password" class=" control-label">password</label>
		
			<input type="password" name="pass1" id="password" class="form-control" placeholder="password" value='' data-bv-excluded="false" required>
		
			
</div>
<div class="form-group">
<label for="passwd" class=" control-label">confirm Password</label>

<input type="password" name="pass2" class="form-control" id="passwd" placeholder="Password" data-bv-excluded="false" data-match="#password" required>

</div>
<div class="form-group">
	 <label for="sel1"> Select Security_Question</label>
      <select class="form-control" id="sel1" name="s1">
        <option>What is your favourite pets name?</option>
        <option>What is your favourite food name?</option>
        <option>What is your favourite book name?</option>
        <option>What is your nick name?</option>
      </select>
  </div>
	<div class="form-group">
	<label>Security_answer:</label><br>
	<input type="text" name="sa" class="form-control" placeholder="Answer" required>
	</div>
<div class="form-group">
<div class=" col-lg-6 col-sm-10">
<button type="submit" name="submit" class="btn btn-success" >Sign Up</button>
</div>
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

				url:'rmcname.php',
				type:'POST',
				data:{dist_id:dist_id},
				success:function(result){
					$('#sel2').html(result);
			
                      }

				});
			});
$("#sel2").change(function(){
			var rmc_id=$(this).val();
			
			$.ajax({

				url:'mycname.php',
				type:'POST',
				data:{rmc_id:rmc_id},
				success:function(result){
					$('#sel3').html(result);
			
                      }

				});
			});

		});

</script>

</body>
</html>
<?php
// Footer Area
include ("footer.php");
?>


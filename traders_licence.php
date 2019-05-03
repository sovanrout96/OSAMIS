<?php include_once("traders_navbar.php"); ?>
<html>
<head>
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
	<div class="container c">
	<form class= m-auto b" method="post" enctype="multipart/form-data" class="col-lg-6" action="traders_licence_data.php">
		<div class="page-header ">
		<h3 class="text-center text-success">Apply Licence for Traders</h3>
		
	</div>
		
		<h3>Member pesonal info</h3>
		
		<div class="input-group">
	<label>Annual Turn over:</label><br>
	<input type="textarea" name="annual" class="form-control" placeholder="Enter your annual turn over" required>
	</div>
	<div class="form-group">
		<label for="photo" class=" control-label">Audited Balance Sheet:</label>
		
	<input type="file" class="form-control" name="auditphoto" id="auditphoto">
	</div>	
	<div class="form-group">
		<label for="photo" class=" control-label">Income Certificate:</label>
		
	<input type="file" class="form-control" name="incomecert" id="auditphoto">
	</div>	
	<div class="form-group">
		<label for="photo" class=" control-label">IT Return:</label>
		
	<input type="file" class="form-control" name="itreturn" id="auditphoto">
	</div>	
	<div class="form-group">
		<label for="photo" class=" control-label">PAN Card Details:</label>
		
	<input type="file" class="form-control" name="pancard" id="auditphoto">
	</div>	
		
<div class="form-group">
<div class=" col-lg-6 col-sm-10">
<button type="submit" name="submit" class="btn btn-success" >Apply</button></br></br>
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
<?php include_once("footer.php"); ?>
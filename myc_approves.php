<?php
include_once("rmc_navbar.php");

?>
<html>
<head>
	<style>
		.c{
			border:2px solid black;
			background-color: orange;
		}

	</style>

</head>
<body style="background-color: teal;">
	<div class="container c">
	<form class= m-auto b" method="post" enctype="multipart/form-data" class="col-lg-6" action="myc_approves_data.php">
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
      <select class="form-control" id="sel2" name="r_name">
       
      </select> 
	</div>
	<div class="form-group">
	 <label for="sel2">MYC Name:</label>
      <select class="form-control" id="sel3" name="m_name">
       
      </select> 
	</div>
	<div class="col-lg-6">
	<button type="submit" name="sub"  class="btn btn-primary">Search</button>
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
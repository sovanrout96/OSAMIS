<?php
session_start();

include_once("rmc_navbar.php");
include_once("dbcon.php");
?>

<body>
<!-- Body Area -->
<h2 class="text-danger text-center">MYC CREATION </h2>
<div class="container c">
	<form class= m-auto b" method="post" action="myc_creation_info.php">
	<div class="col-lg-12 col-md-12 row">
	<div class="col-lg-6 col-md-6">
<div class="page-header">
	<h2 class="text-primary">MYC Creation Page</h2>
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
      <select class="form-control" id="sel2" name="location">
       
      </select> 
	</div>
	<div class="form-group">
     <label>RMC Name:</label>
      <select id="sel3"  class="form-control" name="rmcname">

      </select>
    </div>
    <div class="form-group">
	<label>MYC Name:</label>
	<input type="text" name="mycname" class="form-control" required>
	</div>
	<div class="form-group">
	<label>Members:</label><br>
	<input type="text" name="member" class="form-control" value="Only 1 Member for 1 MYC" disabled>
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

$("#sel2").change(function(){
			var rmc_id=$(this).val();
			
			$.ajax({

				url:'rmc_block.php',
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

<?php
// navbar area
include_once ("footer.php");
?>
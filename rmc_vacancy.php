<?php
include_once("navbar.php");

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
	<form class= m-auto b" method="post" enctype="multipart/form-data" class="col-lg-6">
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
	<div class="col-lg-6">
	<button type="submit" name="submit" class="btn btn-primary">Search</button>
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

		});

</script>
<?php
if(isset($_POST['submit'])){
	$con=mysqli_connect('localhost','root','','oamis');
	$rid=$_POST['r_name'];
	$q="select * from rmc_creates_info where rmc_id=$rid";
	$result=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($result)){
		?>
		 <div class="container col-lg-12 row">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped table-condensed">
								<thead>
									<tr>
										<th>RMC id</th>
										<th>District id</th>
										<th>RMC Name</th>
										<th>Member</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><?php echo $row['rmc_id'];?> </td>
										<td><?php echo $row['1'];?> </td>
										<td><?php echo $row['3'];?> </td>
										<td><?php echo $row['4'];?> </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
<?php
}
}
?>
</body>
</html>
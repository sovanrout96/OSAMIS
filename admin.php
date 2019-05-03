<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:director_login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin home</title>
</head>
<style>
.a{
	border:2px solid orange;
	border-radius: 10px;
	width: 350px;
}
</style>

<body>
	<?php
	// navbar area
include_once ("admin_navbar.php");
// carosole area
include_once("carosole.php");
	?>
	<div class="container-fluid">
<h1 style="color: red;text-align: center;">Admin Panel<h1>
	<h3>Wellcome <?php echo $_SESSION['username']; ?> </h3>
<div class=" container col-lg-4 a" style="float:left;">
<ul>
<li><h4><a href="rmc_creation.php">RMC Creation</a></h4></li>
<li><h4><a href="rmc_approves.php">RMC Approves</a></h4></li>
<li><h4><a href="item_setup.php">Item Creation</a></h4></li>
<li><h4><a href="#">Some Extra Function</a></h4></li>
</ul>
</div>

<!-- dropdown Example -->
<div class="container-fluid col-lg-4 row" style="float: right;">
  <h3>More Links</h3>                                         
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Extra Work <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
</div>
</div>

<?php
// Footer Area
include_once ("footer.php");
?>
<!-- Footer area -->
</body>
</html>
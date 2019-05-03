	<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:rmc_login.php');
}
?>
<style>
.a{
	border:2px solid orange;
	border-radius: 10px;
	width: 350px;
}
</style>

	<?php
	// navbar area
include_once ("rmc_navbar.php");
// carosole area
include_once("carosole.php");
	?>
	<div class="container-fluid">
<h1 style="color: red;text-align: center;">RMC PANEL<h1>
	<h3>Wellcome <?php echo $_SESSION['username']; ?> </h3>
<div class=" container col-lg-4 a" style="float:left;">
<ul>
<li><h4><a href="myc_creation.php">MYC Creation</a></h4></li>
<li><h4><a href="myc_approves.php">MYC Aproves</a></h4></li>
<li><h4><a href="traders_approves.php">Traders Aproves</a></h4></li>
<li><h4><a href="rmc_trad_lisence_approves.php">Traders Lisence Approves</a></h4></li>
<li><h4><a href="#">Traders Lisence Renewal</a></h4></li>
<li><h4><a href="item_setup.php">Item Creation</a></h4></li>
</ul>
</div>
</div>
<?php
include_once("footer.php");
?>

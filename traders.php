	<?php
session_start();
if(!isset($_SESSION['tusername'])){
	header('location:traders_login.php');
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
include_once ("traders_navbar.php");
// carosole area
include_once("carosole.php");
	?>
	<div class="container-fluid">
<h1 style="color: red;text-align: center;">TRADERS PANEL<h1>
	<h3>Welcome <?php echo $_SESSION['tusername']; ?> </h3>

<div class=" container col-lg-4 a" style="float:left;">
<ul>
<li><h4><a href="traders_licence.php">Apply Licence</a></h4></li>
<li><h4><a href="#">Renewal Licence</a></h4></li>
<li><h4><a href="#">Participate in Auction</a></h4></li>

</ul>
</div>
</div>
<?php
include_once("footer.php");
?>

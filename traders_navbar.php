<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="icon"href="images/odisha.png"type="image/x-icon">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">OAMIS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="nav-item dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown">Market Report
        <span class="caret"></span></a>     
        <ul class="dropdown-menu">
          <li><a href="rmc_vacancy.php">RMC Market Report</a></li>
          <li><a href="#">MYC Market Report</a></li>
          <li><a href="#">Traders Market Report</a></li>
        </ul>
      </li>
        <li class="nav-item dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown">Services
        <span class="caret"></span></a>     
        <ul class="dropdown-menu">
          <li><a href="item_indx.php">All Details of Item</a></li>
          <li><a href="activated_rmc_list.php">All Activated RMC List in Odisha</a></li>
          <li><a href="activated_myc_list.php">All Activated MYC List in Odisha</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Registration
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Director</a></li>
          <li><a href="rmc_registration.php">RMC</a></li>
          <li><a href="#">MYC</a></li>
          <li><a href="#">Trader</a></li>
        </ul>
      </li>
     <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a> -->
      	<li class="dropdown">
      	<a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout
        <span class=""></span></a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
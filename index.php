
<?php
include_once("navbar.php");
// Carosole Area
include ("carosole.php");
// Footer Area

// Body Area
?><h1 class="text-danger text-center">Welcome to OAMIS...</h1>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>

</head>
<body>

<!-- side scroll notification bar -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 " style="float:right;">
<h3 style="font-family:courier new;color:blue;font-size:20px;font-weight:bold;margin-left:20px;margin-right:20px;">Latest News Updates</h3>
<marquee direction=up>
<h4 style="font-family:sans-serif;font-size:15px;font-weight:bold;text-align:justify;margin-left:20px;color:red;margin-right:20px;margin-buttom:20px;">1.Welcome new Members...</h4>
<h4 style="font-family:sans-serif;font-size:15px;font-weight:bold;text-align:justify;margin-left:20px;color:red;margin-right:20px;margin-buttom:20px;">2.New RMC members of Odisha Agriculter Market Information gather at common room.</h4>
<h4 style="font-family:sans-serif;font-size:15px;font-weight:bold;text-align:justify;margin-left:20px;color:red;margin-right:20px;margin-buttom:20px;">3.Vacancy for RMC post</h4>
<h4 style="font-family:sans-serif;font-size:15px;font-weight:bold;text-align:justify;margin-left:20px;color:red;margin-right:20px;margin-buttom:20px;">4.Top Selling Products in Odisha Market.</h4>
<h4 style="font-family:sans-serif;font-size:15px;font-weight:bold;text-align:justify;margin-left:20px;color:red;margin-right:20px;margin-buttom:20px;">5.OAMIS Annual function:- 1st May 2019</h4>
</marquee>
</div>
<!-- Information Area -->
<div class="container col-lg-3">
<?php include_once("information.php");?>
</div>
<!-- News & advt. area -->
<?php
$con=mysqli_connect('localhost','root','','oamis');
$q="select * from news";
$run=mysqli_query($con,$q);
if($run){
?>
<div class="container col-lg-6">
  <div class="table-responsive">
  <table class="table table-bordered table-hover table-striped table-condensed">
    <thead>
      <tr>
        <th class="text-warning"><h5>File no.</h5></th>
         <th class="text-warning"><h5>Date</h5></th>
        <th class="text-warning"><h5>All Tenders & Advertisements</h5></th>
      </tr>
      </thead>
      <?php
      while($rows=mysqli_fetch_array($run))
      {
        ?>
    <tbody>
      <tr>
        <td><h5><?php echo $rows['file_no']; ?></h5></td>
         <td><h5><?php echo $rows['date']; ?></h5></td>
        <td><h5><?php echo $rows['news']; ?></h5></td>
      </tr>
    </tbody>
  <?php
      }
  ?>
  </table>
  <?php
}
  ?>
</div>
</div>

<!-- Google map Area -->
<div id="googleMap" style="width:100%;height:400px;"></div>

<script>
    function myMap() {
      var myCenter = new google.maps.LatLng(20.2487398,85.8004262);
      var mapProp = {center:myCenter, zoom:12, scrollwheel:true, draggable:true, mapTypeId:google.maps.MapTypeId.ROADMAP};
      var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
      var marker = new google.maps.Marker({position:myCenter});
      marker.setMap(map);
    }
  </script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD37LyYD5lvkgO_0GeAOKdQxMXRDFT-Jao&callback=myMap"></script>


</body>
</html>

<!-- Footer area -->
<div class="col-lg-12"><?php include ("footer.php"); ?> </div> 
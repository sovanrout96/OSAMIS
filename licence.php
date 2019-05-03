<?php
session_start();
$_SESSION['id']=$_GET['id'];

include_once('rmc_navbar.php');

?>

<div class="container col-lg-6">
          <h4><span class="glyphicon glyphicon-lock"></span> Generate Licence ID... </h4>
          <form method="post" action="licence_data.php">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-search"></span>Licence No:</label>
            

<?php

$no1=rand(65,90);
$no2=rand(65,90);
$no3=rand(97,122);
$no4=rand(97,122);
$no5=rand(11,99);
$no6=rand(22,99);


$c1=chr($no1);
$c2=chr($no2);
$c3=chr($no3);
$c4=chr($no4);

$final_number=$c2.$no5.$c1.$c3.$no6.$c4;
if(isset($final_number))
{
	
?>

<input type="text"name="number"class="form-control"readonly value='<?php echo $final_number;?>'>
<?php
}
?>
<!-- <input type="submit" name="submit"> -->

            </div>
          
            <div class="form-group"> 
              <label for=""><span class="glyphicon glyphicon-calendar"></span> Issued On:</label>
              <input type="date" name="issued" class="form-control" id="psw" placeholder="Enter date">
            </div>
            <div class="form-group"> 
              <label for=""><span class="glyphicon glyphicon-calendar"></span> Valid Upto:</label>
              <input type="date" name="valid" class="form-control" id="psw" placeholder="Enter date">
            </div>
            
              <input  type="submit" class="btn btn-success btn-block" value="Generate" name="lsubmit">
          </form>
        </div>


        
      

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Navbar Properties

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="nav-item dropdown">
         <a class="dropdown-toggle" data-toggle="dropdown">Page 1
        <span class="caret"></span></a>     
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another Action</a></li>
          <li><a href="#">Some Extra</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Registration
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Director</a></li>
          <li><a href="#">RMC</a></li>
          <li><a href="#">MYC</a></li>
          <li><a href="#">Trader</a></li>
        </ul>
      </li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav> -->


<!-- Carosole Properties -->

  <div class="container-fluid">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/agr1.jpg" alt="Los Angeles" style="width:100%;height:300px;">
        <div class="carousel-caption">
          <h3>Agriculture Quotes</h3>
          <p>"Agriculture is not crop production as popular belief holds - it's the production of food and fiber from the world's land and waters..."!!!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/agriculture.jpg" alt="Chicago" style="width:100%;height:300px;">
        <div class="carousel-caption">
          <h3>Agriculture Quotes</h3>
          <p>“I believe in the future of agriculture, with a faith born not of words but of deeds.”!!!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/un1.jpg" alt="New York" style="width:100%;height:300px;">
        <div class="carousel-caption">
          <h3>Agriculture Quotes</h3>
          <p>"Someday we shall look back on this dark era of agriculture and shake our heads. How could we have ever believed that it was a good idea to grow our food..."!!!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>

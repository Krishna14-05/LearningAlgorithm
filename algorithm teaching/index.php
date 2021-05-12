
<!DOCTYPE html>
<html>
<head>
	<title>Interactive Teaching Tools </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style >
  	body {

		  background-image: url("bgimg.jpg");
		  background-repeat: no-repeat;
		  background-position: right top;
		  background-attachment: fixed; 
		  z-index: -1;
		}
	.jumbotron
		{
          color:black;
          
          text-align: center;
          position: fixed;
          color: black;

		}
	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }

  </style>
</head>
<body>
	<nav class="navbar navbar-inverse" style="height: 60px; position: relative;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style=" background-color: rgb(255,77,77); color: white; height: 60px; text-align: center; "><marquee><h4  class="text-primary" style="font-size: 30px;"><b>Building Interactive Tools to Teach Algorithm</b></h4></marquee></a>
    </div>
    <ul class="nav navbar-nav" >
      <li class="active"><a href="http://localhost/Bio%20Insp%20Design/">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="text-primary"><b>Algorithms </b></span><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="ant-swarm-method/">Ant Swarm Algorithm</a></li>
          <li><a href="smith.py">Smith Waterman Algorithm</a></li>
          <li><a href="sortings/">Sortings Algorithms</a></li>
        </ul>
      </li>
      <li><a href="#">Learn About Us</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="jumbotron" >
 

	<h3><b> Presenting</b></h3>
	<h1><b><big>Building Interactive Tools to Teach Algorithm</big></b></h1>
	
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div class="container"  style="background-attachment: fixed;">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="ant.jpg" alt="Ant colony optimization algorithms" width="460" height="345">
        <div class="carousel-caption">
          <h3 style="color: orange;">Ant colony optimization algorithms</h3>
          <p style="color: blue;">In computer science and operations research, the (ACO) ant colony optimization is a probabilistic technique for solving computational problems which can be reduced to finding good paths through graphs. Artificial Ants stand for multi-agent methods inspired by the behavior of real ants.</p>
        </div>
      </div>

      <div class="item">
        <img src="smith.jpg" alt="Smith waterman algorithm" width="460" height="345">
        <div class="carousel-caption" style="background-color: black;">
          <h3 style="color: orange;">Smith water man Algorithm</h3>
          <p style="color: blue;">The Smith–Waterman algorithm performs local sequence alignment; that is, for determining similar regions between two strings of nucleic acid sequences or protein sequences. Instead of looking at the entire sequence, the Smith–Waterman algorithm compares segments of all possible lengths and optimizes the similarity measure.</p>
        </div>
      </div>
    
      <div class="item">
        
        <div class="carousel-caption">
          
        </div>
      </div>

      <div class="item">
        
        <div class="carousel-caption">
          <h3></h3>
          <p></p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>

    </a>
  </div>
</div>
<footer style="background-color: grey; height: 120px;">
	<h2 style="color: #ff0066; text-align: center; margin-bottom: 55px; background background-attachment: fixed;"><b>Enjoy Learning!</b></h2>
	
</footer>
</body>
</html>

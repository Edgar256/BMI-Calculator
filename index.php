<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/cal.js"></script>

  <script type="text/javascript">
     function computeBMI() {
      //Obtain user inputs
     var height = Number(document.getElementById("height").value);
     var heightunits = document.getElementById("heightunits").value;
     var weight = Number(document.getElementById("weight").value);
     var weightunits = document.getElementById("weightunits").value;


     //Convert all units to metric
     if (heightunits == "inches") height /= 39.3700787;
     if (weightunits == "lb") weight /= 2.20462;

     //Perform calculation
     var BMI = weight / Math.pow(height, 2);
     //Display result of calculation
      document.getElementById("output").innerHTML = Math.round(BMI * 100)/100;
           if (BMI < 18.5) document.getElementById("comment").innerHTML = "Underweight";
           if (BMI >= 18.5 && BMI <= 25) document.getElementById("comment").innerHTML = "Normal";
           if (BMI >= 25 && BMI <= 30) document.getElementById("comment").innerHTML = "Obese";
           if (BMI > 30) document.getElementById("comment").innerHTML = "Overweight";
           document.getElementById("answer").value = output;
       }
  </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">PROJECTS</a></li>
        <!--<li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://www.pixabits.co.nf/profile"><span class="glyphicon glyphicon-log-in"></span> Contact Edgar</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>BMI CALCULATOR PROJECT #ID0041</h1>      
    <p>In this project we are designing a Web App that will help users find their Body Mass Index (BMI) by entering your weight and height, and the App will be able to tell you your health status. </p>
  </div>
</div>

<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-2 text-cm">Enter your height:</div>
  <div class="col-sm-4 text-cx">
      <input type="text" id="height" class="txtHeight" />
          <select type="multiple" id="heightunits" class="dimHeight">
              <option value="metres" selected="selected">metres</option>
              <option value="inches">inches</option>
          </select>
  </div>
  <div class="col-sm-3"></div>
</div>

<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-2 text-cm">Enter your weight:</div>
  <div class="col-sm-4 text-cx">
      <input type="text" id="height" class="txtHeight" />
          <select type="multiple" id="weightunits" class="dimHeight">
              <option value="kg" selected="selected">kilograms</option>
              <option value="lb">pounds</option>
          </select>
  </div>
  <div class="col-sm-3"></div>
</div>

<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-3">
    <input type="button" class="btn btnCal" value="computeBMI" onclick="computeBMI()">
  </div>
  <div class="col-sm-5"></div>
</div>

<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6 txtBMI">
      Horray !!! , Your Body Mass Index is <span id="output"> ?</span>
  </div>
  <div class="col-sm-3"></div>
</div>

</div><br><br>

<footer class="container-fluid text-center stick-bottom">
  <p><a href="http://www.pixabits.co.nf/profile"> Copyright  2018  Edgar Tinkamanyire Edgar </a></p>
</footer>

</body>

</body>
</html>

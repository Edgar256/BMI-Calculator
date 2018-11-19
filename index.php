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
  <script src="js/call.js"></script>

  <script>    

    $(document).ready(function () {

      function computeBMI() {
        var ht = document.getElementById("height").value ;
        var wt = document.getElementById("weight").value ;
        var comment;
        var sqHt = ht * ht;
        var bmi = wt/sqHt;
        
        document.getElementById("result").innerHTML = bmi;


        if(bmi<18.5){
           comment = "You are Underweight, please see a doctor immediately";
        }
        else if(bmi>18.5 && bmi<24.9){
           comment = "You are in the normal weight range, keep it up";
        }
        else if(bmi>25 && bmi<29.9){
           comment = "You are in the overweight range, please watch your diet";
        }
        else if(bmi>30){
           comment = "You are grossly overweight, please see a doctor immediately";
        }
        else{
          comment = "Please enter your weight and height";
        }

        document.getElementById("comMsg").innerHTML = comment;
           
    }
    /*$('#multipleA').change(function () {
              if ($('#multipleA').val() == 'meters') {
                  ht = ht;
              }
              if ($('#multipleA').val() == 'feet') {
                  ht = ht * 3.280839895;
              }
               
              
     });*/


     
});

   
   

    /*function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }*/

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
      <input type="text" id="height" class="txtHeight" min="0" />
          <select type="multipleA" id="heightunits" class="dimHeight">
              <option value="metres" selected="selected">metres</option>
              <option value="feet">inches</option>
          </select>
  </div>
  <div class="col-sm-3"></div>
</div>

<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-2 text-cm">Enter your weight:</div>
  <div class="col-sm-4 text-cx">
      <input type="text" id="weight" class="txtHeight" min="0" />
          <select type="multipleB" id="weightunits" class="dimHeight">
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
      Horray !!! , Your Body Mass Index is <span id="result"> ?</span>
  </div>
  <div class="col-sm-3"></div>
</div>
<div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-6 txtBMI " id="comMsg">
      
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

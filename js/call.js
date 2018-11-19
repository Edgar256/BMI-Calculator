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
    $('#multipleA').change(function () {
              if ($('#multipleA').val() == 'meters') {
                  ht = ht;
              }
              if ($('#multipleA').val() == 'feet') {
                  ht = ht * 3.280839895;
              }
               
              
     });


     
});
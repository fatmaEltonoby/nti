<!DOCTYPE html>
<html>
<head>
  <title>Largest Number</title>
</head>
<body><!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
          <div class="row ">
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                 Max & Min
              </div>
              <div class="col-4 offset-4 mt-5">

          <form method="post" action="">
          
          <input type="numeric" name="num1" class="form-control col-12 mb-3" placeholder="Enter first number"><br>
          
          <input type="numeric " name="num2" class="form-control col-12 mb-3" placeholder="Enter first number"><br>
          
          <input type="numeric" name="num3" class="form-control col-12 mb-3" placeholder="Enter first number">
          <br>
          <input type="submit" name="submit" class="btn btn-outline-primary col-12" placeholder="Enter first number">
        
          </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


</body>
</html>
  <?php

   if(isset($_POST["submit"])){
       $num1=$_POST["num1"];
       $num2=$_POST["num2"];
       $num3=$_POST["num3"];
       if($num1>$num2 && $num1>$num3){
         echo "$num1 :is the max number" ;
       }
       else{
         if($num2>$num1 && $num2>$num3){
           echo "$num2 :is the max number";
         }
         else
           echo " $num3 : is the max number";
       }
   } 
   

   if(isset($_POST["submit"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num3=$_POST["num3"];
    if($num1< $num2 && $num1<$num3){
      echo "$num1 :is the min number";
    }
    else{
      if($num2< $num1 && $num2 <$num3){
        echo "$num2 :is the min number";
      }
      else
        echo " $num3 : is the min number";
    }
}  
?>

<!doctype html>
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
                  calculator
              </div>
              <div class="col-4 offset-4 mt-5">
                  <form method="post" action="">
                      <div class="form-group">
                          <label for="num1">number1</label>
                          <input type="numeric" name="number1" id="num1" >
                      </div>

                      <div class="form-group">
                          <label for="num2">number2</label>
                          <input type="numeric" name="number2" id="num2" >
                      </div>

                       <!-- <div class="form-group">
                          <label for="result">Result</label>
                          <input type="numeric" id="result" name="result"  class="ml-4" value="<?= $result ?>" > 
                      </div>  -->

                      <div class="text-center">
                          <input class="btn btn-outline-primary" type="submit" value="+" name="add">
                          <input class="btn btn-outline-primary" type="submit" value="-" name="sub">
                          <input class="btn btn-outline-primary" type="submit" value="*" name="mult">
                          <input class="btn btn-outline-primary" type="submit" value="/" name="div">  
                          <input class="btn btn-outline-primary" type="submit" value="%" name="mod">                      
                      </div>

                     

                  </form>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


<?php


if(isset($_POST['add'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $a=$number1+$number2;
    echo $a;
}

if(isset($_POST['sub'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $s=$number1 - $number2;
    echo $s;
}

if(isset($_POST['mult'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $m=$number1 * $number2;
    echo $m;
}
if(isset($_POST['div'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $d=$number1 / $number2;
    echo $d;
}
if(isset($_POST['mod'])){
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $l=$number1 % $number2;
    echo $l;
}
   
  

    // switch($operation){
    //     case '+': $result = $number1 + $number2;
    //     break; 
    //     case '-': $result = $number1 - $number2;
    //     break; 
    //     case '*': $result = $number1 * $number2;
    //     break; 
    //     case '/': $result = $number1 / $number2;
    //     break; 
    //     case '%': $result = $number1 % $number2;
    //     break; 
    // }
    


?>
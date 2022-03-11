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
              student grade
            </div>
            <div class="col-4 offset-4 mt-5">
              <form method="POST">
                <input type="numeric" name="sub1" class="col-12 mb-2 " placeholder="please enter physics grade">
                <input type="numeric" name="sub2" class="col-12 mb-2 " placeholder="please enter math grade">
                <input type="numeric" name="sub3" class="col-12 mb-2 " placeholder="please enter chemistry grade ">
                <input type="numeric" name="sub4" class="col-12 mb-2 " placeholder="please enter biology grade">
                <input type="numeric" name="sub5" class="col-12 mb-2 " placeholder="please enter computer grade">
                <button type="submit" name="btn" class=" btn btn-outline-primary col-12 text-primary text-center mt-3">submit</button>
              </form> 
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

// $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
// $average = $total / 5.0;
// $percentage = ($total / 250.0) * 100;
// $grade = '';
if($_POST){
  if(isset($_POST['btn'])){
      $sub1 = $_POST['sub1'];
      $sub2 = $_POST['sub2'];
      $sub3 = $_POST['sub3'];
      $sub4 = $_POST['sub4'];
      $sub5 = $_POST['sub5'];

      $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
      $average = $total / 5.0;
      $percentage = ($total / 250.0) * 100;
      $grade = '';
      define('maxgrade',50);

      if($sub1 > maxgrade || $sub1 < 0){
        $message = 'please enter a valid degree';
      }elseif($sub2 > maxgrade || $sub2 < 0){
        $message = 'please enter a valid degree';
      }
      elseif($sub3 > maxgrade || $sub3 < 0){
        $message = 'please enter a valid degree';
      }
      elseif($sub4 > maxgrade || $sub4 < 0){
        $message = 'please enter a valid degree';
      }
      elseif($sub5 > maxgrade || $sub5< 0){
        $message = 'please enter a valid degree';
      }

   
        
      

    if ($average >= 40)
    $grade = "A";
    else if ($average >= 35 && $average < 40)
        $grade = "B";
    else if ($average >= 25 && $average < 35)
        $grade = "C";
    else if ($average >= 20 && $average < 25)
        $grade = "D";
    else if($average >= 15 && $average < 20)
        $grade = "E";
        else{
            $grade = "F";
        }
      }
  
  echo "The Total marks   = " . $total . "/250\n" . "<br>";
  echo "The Average marks = " . $average . "\n" . "<br>";
  echo "The Percentage    = " . $percentage . "%\n" . "<br>";
  echo "The Grade         = '" . $grade . "'\n" . "<br>";

 
  

    }
 
?>
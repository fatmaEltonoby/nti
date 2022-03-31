<?php
session_start();
$errors = [];
$errors['phone-required'] ="";
if($_POST){
    // $phone= $_POST['phone'];
  
    
    // if(isset($_POST['btn'])){
        if(!empty($_POST['phone'])){
           header("location:Review.php");
            // echo $errors['phone-required'];

        }else{
          $errors['phone-required'] =  "<div  class='text-danger font-weight-bold my-1  col-12'>  * phone Is Required </div>" ;
        }
}
// }



?>





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
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3  pt-5">
                 Hospital
              </div>
              <div class="col-4 offset-4 mt-5 pt-0">

                <form method="POST" action="">
                  <input type="number" name="phone" class="col-12 " placeholder="" >

                  <?php 
                 
                        echo $errors['phone-required'];
                    
                 ?>
                
                  <button type="submit" name="btn" class=" btn btn-primary col-3  text-white text-center mt-3">submit</button>
                  
                </form> 
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
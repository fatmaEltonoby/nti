<?php
session_start();
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
              <div class="col-12 mt-5 text-center text-primary font-weight-bold   pt-5">
                      Result
                <table class="table table-primary table-striped ">

                    <thead>
                        <tr>
                        <th scope="col">questions?</th>
                        <th colspan="3"></th>
                        <th scope="col">Reviews</th>
                        </tr>
                    </thead>
                    <tbody>    
                        <tr>
                        <th scope="row"> Are you satisfied with hte level of cleanless?</th>
                        <th colspan="3"></th>
                        <th> <?php  echo $_SESSION ['flexRadioDefault']; ?></th>
                        </tr>
                        <tr>
                        <th scope="row"> Are you satisfied with service prices?</th>
                        <th colspan="3"></th>
                        <th> <?php echo $_SESSION ['flexRadioDefault1']; ?></th>
                        </tr>
                        <tr>
                        <th scope="row"> Are you satisfied with the nursing services?</th>
                        <th colspan="3"></th>
                        <th> <?php echo $_SESSION ['flexRadioDefault2']; ?></th>
                        </tr>
                        <tr>
                        <th scope="row"> Are you satisfied with the level of the doctor?</th>
                        <th colspan="3"></th>
                        <th> <?php echo $_SESSION ['flexRadioDefault3']; ?></th>
                        </tr>
                        <tr>
                        <th scope="row"> Are you satisfied with the calmness in the hospital?</th>
                        <th colspan="3"></th>
                        <th> <?php echo $_SESSION ['flexRadioDefault4']; ?></th>
                        </tr>
                        <tr>
                          <th colspan="2"> </th>
                          <th colspan="2"></th>
                          <th><?php echo $_SESSION["$total"]  ?></th>

                        </tr>
                        <tr>
                          <th colspan="2"> </th>
                          <th colspan=""><?php if ($_SESSION[$total] > 25){
                                     echo "thank you";
                          } ?>
                          else{
                             <?php  echo"  we will call you on $_SESSION[$phone]";

                            ?> }
                           
                           </th>
                          <th></th>

                        </tr>

                    </tbody>

                    <!-- <?php echo $_SESSION['flexRadioDefault']?>;
                    <?php echo $_SESSION['flexRadioDefault1']?>;
                    <?php echo $_SESSION['flexRadioDefault2']?>;
                    <?php echo $_SESSION['flexRadioDefault3']?>;
                    <?php echo $_SESSION['flexRadioDefault4']?>; -->
                  

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
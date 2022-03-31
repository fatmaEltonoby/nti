<?php
session_start();
// echo $_SESSION['phone']  ;

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

                <table class="table table-primary table-striped ">

                    <thead>
                        <tr>
                        <th scope="col">questions?</th>
                        <th scope="col">bad</th>
                        <th scope="col">good</th>
                        <th scope="col">very good</th>
                        <th scope="col">Excellent</th>
                        </tr>
                    </thead>

                    <form  method="POST">
                    <tbody>
                        <tr>
                        <th scope="row"> Are you satisfied with hte level of cleanless?</th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="bad"  >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="good" >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="veryGood">                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" value="excellent">                    
                        </div>
                        </th>
                        
                        </tr>
                        <tr>
                        <th scope="row"> Are you satisfied with service prices?</th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" value="bad" >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" value="good" >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" value="veryGood">                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault1" value="excellent">                    
                        </div>
                        </th>
                        
                        </tr>
                        <tr>
                        <th scope="row">Are you satisfied with the nursing services?</th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="bad" >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="good">                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="veryGood" >                    
                        </div>
                        </th>
                        <th scope="row"> <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault2" value="excellent" >                    
                        </div></th>
                        
                        </tr>
                        <tr>
                        <th scope="row">Are you satisfied with the level of the doctor?</th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" value="bad" >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" value="good">                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" value="veryGood" >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault3" value="excellent" >                    
                        </div>
                        </th>
                        
                        </tr>
                        <tr>
                        <th scope="row">Are you satisfied with the calmness in the hospital?</th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault4" value="bad"  >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault4" value="good" >                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault4" value="veryGood">                    
                        </div>
                        </th>
                        <th scope="row">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault4" value="excellent">                    
                        </div>
                        </th>
                        
                        </tr>
                        <tr>
                          <th colspan="2"> </th>
                          <th colspan="2"></th>

                          
                              <th> <form action="Result.php"> <input type="submit" name="submit" vlaue="Get Values"> </form>
                             </th>
                             <!-- <th><a class="btn btn-primary" href="Result.php" role="button" name="submit" type="submit" value="Get Values">submit</a></th> -->
                         

                        </tr>
                    </tbody>
                   
                         
                    </form>
                    

                        
                        
                       
                    
              <?php
                if(isset($_POST['submit'])){
                if(!empty($_POST['flexRadioDefault'])&&!empty($_POST['flexRadioDefault1'])&&!empty($_POST['flexRadioDefault2'])&&!empty($_POST['flexRadioDefault3'])&&!empty($_POST['flexRadioDefault4'])) {
                     $total=0;
                     if($_POST['flexRadioDefault'] == 'good' ){
                        $_SESSION[$total]= $total +3;
                         $_SESSION['flexRadioDefault']= 'good';
                         
                     }elseif($_POST['flexRadioDefault'] == 'veryGood'){
                        $_SESSION[$total]= $total +5;
                         $_SESSION['flexRadioDefault']= 'very good';

                     }elseif($_POST['flexRadioDefault'] == 'excellent'){
                        $_SESSION[$total]= $total +10;
                         $_SESSION['flexRadioDefault']= 'excellent';

                     }else{
                        $_SESSION['flexRadioDefault']= 'bad';
                     }
                     

                     if($_POST['flexRadioDefault1'] == 'good' ){
                        $_SESSION[$total]= $total +3;
                        $_SESSION['flexRadioDefault1']= 'good';

                        
                    }elseif($_POST['flexRadioDefault1'] == 'veryGood'){
                        $_SESSION[$total]= $total +5;
                        $_SESSION['flexRadioDefault1']= 'very good';

                    }elseif($_POST['flexRadioDefault1'] == 'excellent'){
                        $_SESSION[$total]= $total +10;
                        $_SESSION['flexRadioDefault1']= 'excellent';
                    }else{
                        $_SESSION['flexRadioDefault1']= 'bad';
                    }
                    
                    if($_POST['flexRadioDefault2'] == 'good' ){
                        $_SESSION[$total]= $total +3;
                        $_SESSION['flexRadioDefault2']= 'good';
                        
                    }elseif($_POST['flexRadioDefault2'] == 'veryGood'){
                        $_SESSION[$total]= $total +5;
                        $_SESSION['flexRadioDefault2']= 'very good';

                    }elseif($_POST['flexRadioDefault2'] == 'excellent'){
                        $_SESSION[$total]= $total +10;
                        $_SESSION['flexRadioDefault2']= 'excellent';
                    }else{
                        $_SESSION['flexRadioDefault2']= 'bad';
                    }

                    if($_POST['flexRadioDefault3'] == 'good' ){
                        $_SESSION[$total]= $total +3;
                        $_SESSION['flexRadioDefault3']= 'good';
                        
                    }elseif($_POST['flexRadioDefault3'] == 'veryGood'){
                        $_SESSION[$total]= $total +5;
                        $_SESSION['flexRadioDefault3']= 'very good';

                    }elseif($_POST['flexRadioDefault3'] == 'excellent'){
                        $_SESSION[$total]== $total +10;
                        $_SESSION['flexRadioDefault3']= 'excellent';
                    }else{
                        $_SESSION['flexRadioDefault3']= 'bad';
                    }

                    if($_POST['flexRadioDefault4'] == 'good' ){
                        $_SESSION[$total]== $total +3;
                        $_SESSION['flexRadioDefault4']= ' good';
                        
                    }elseif($_POST['flexRadioDefault4'] == 'veryGood'){
                        $_SESSION[$total]== $total +5;
                        $_SESSION['flexRadioDefault4']= ' very good';

                    }elseif($_POST['flexRadioDefault4'] == 'excellent'){
                        $_SESSION[$total]== $total +10;
                        $_SESSION['flexRadioDefault4']= ' excellent';
                    }else{
                        $_SESSION['flexRadioDefault4']= ' bad';
                        
                    }
                    echo $total;

                    

                    //  $option1=$_POST[];

                    
                    

                    

                   
                    echo $_SESSION['flexRadioDefault'];
                    echo $_SESSION['flexRadioDefault1'];
                    echo $_SESSION['flexRadioDefault2'];
                    echo $_SESSION['flexRadioDefault3'];
                    echo $_SESSION['flexRadioDefault4'];
                    
                } else {
                    echo 'Please select the value.';
                }
                }
             ?>

                </table>

              </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
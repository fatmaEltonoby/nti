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


    <?php
    $result_str = $result = '';
    if (isset($_POST['unit-submit'])) {
        $units = $_POST['units'];
        if (!empty($units)) {
            $result = calculate_bill($units);
            $result_str = 'Total amount of ' . $units . ' - ' . $result;
        }
    }
    /**
     * To calculate electricity bill as per unit cost
     */
    function calculate_bill($units) {
        $unit_cost_first = 0.5;
        $unit_cost_second = 0.75;
        $unit_cost_third = 1.20;
        $unit_cost_fourth = 1.50;
    
        if($units <= 50) {
            $bill = $units * $unit_cost_first;
        }
        else if($units > 50 && $units <= 100) {
            $str_price = 50 * $unit_cost_first;
            $remaining_units = $units - 50;
            $bill = $str_price + ($remaining_units * $unit_cost_second);
        }
        else if($units > 100 && $units <= 200) {
            $str_price = (50 * 0.5) + (100 * $unit_cost_second);
            $remaining_units = $units - 150;
            $bill = $str_price + ($remaining_units * $unit_cost_third);
        }
        else {
            $str_price = (50 * 0.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
            $remaining_units = $units - 250;
            $bill = $str_price + ($remaining_units * $unit_cost_fourth);
        }
        return number_format((float)$bill, 2, '.', '');
    }
    
    ?>

<div class="container">
          <div class="row ">
              <div class="col-12 mt-5 text-center text-primary font-weight-bold h3">
                 Electricity bill
              </div>
              <div class="col-4 offset-4 mt-5">
                <form method="POST">
                  <input type="number" name="units" class="col-12 " placeholder="Please enter no. of Units">
                  <button type="submit" name="unit-submit" class=" btn btn-outline-primary col-12 text-primary text-center mt-3">submit</button>
                </form>

                <div class="">
                <?php echo '<br />' . $result_str; ?>
                </div>














      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>






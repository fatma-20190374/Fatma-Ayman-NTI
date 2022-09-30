<?php

if($_SERVER['REQUEST_METHOD']=='post' && $_POST){
    $loan= $_POST['loan'];
    $years= $_POST['years'];
    if($years <= 3){
        $interset = $loan * 0.1;
        $interset *= $years;
        $result = $loan + $interset;
        $result /= (12 * $years);
    }
    else{
        $interset = $loan * 0.15;
        $interset *= $years;
        $result = $loan + $interset;
        $result /= (12 * $years);
    }

    $massage = " 
    <table>
    <th>User name</th>
    <th>interest rate</th>
    <th>Monthly</th>
    <tr>
    <td>{$_POST['name']}</td>
    <td>{$interest}</td>
    <td>{$result}</td>
    </tr>
    </table>";
    echo $massage;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Bank</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>
  <div class="container" id="container">
        <div class="row">
            <div class="col-12 text-center h1 mt-5">Bank</div>
            <div class="col-4 offset-4 my-5">
                <form action="" method='post'>
                    <div class="form-group">
                        <label name="name">Username</label>
                        <input name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label name="loan">Loan</label>
                        <input name="loan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label name="years">Years</label>
                        <input name="years" class="form-control" required>
                    </div>
                    <br>
                    <div class="form-group text-center">
                        <button name="calc" class="btn btn-outline-success btn-sm">Calculate</button>
                    </div>
                    <br>     
                </form>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
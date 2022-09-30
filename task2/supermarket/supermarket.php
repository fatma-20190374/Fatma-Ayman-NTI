<?php
$receipt="";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $table .= "
        <table class='table'>
    <thead>
    <tr>
        <th scope='col'>Product Name</th>
        <th scope='col'>Product Price</th>
        <th scope='col'>Product Quantity</th>
    </tr>
    </thead>
    <tbody>";
    for ($i = 0; $i < $_POST["products"]; $i++) {
        $table .= "
    <tr>
        <td><input type='text' name='productName{$i}'> </td>
        <td><input type='number' name='productPrice{$i}'> </td>
        <td><input type='number' name='productQuantity{$i}'> </td>
    </tr>";
    }
    $table .= "</tbody>
    </table><button class='form-control' name='receipt' value='Receipt'>Receipt</button>";
}

$subTotal = 0;

function delivery($city)
{
    if ($city == "Cairo") {
        $delivery = 0;
    } else if ($city == "Giza") {
        $delivery = 30;
    } else if ($city == "Alex") {
        $delivery = 50;
    } else {
        $delivery = 100;
    }
    return $delivery;
}


function discount($subTotal)
{
    if ($subTotal < 1000) {
        $discountValue=0;
    } else if ($subTotal < 3000) {
        $discountValue=10;
    } else if ($subTotal < 4500) {
        $discountValue=15;
    } else if ($subTotal > 4500) {
        $discountValue=20;
        
    }
    $discount = ($discountValue / 100) * $subTotal;
    return $discount;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["receipt"])) {
    $receipt .= "<table class='table x'>
            <thead>
                <tr>
                    <th scope='col'>Product Name</th>
                    <th scope='col'>Price</th>
                    <th scope='col'>Quantities</th>
                    <th scope='col'>Sub Total</th>
                </tr>
            </thead>
            <tbody>";

    for ($i = 0; $i < $_POST["products"]; $i++) {
        $_POST['productTotalPrice'.$i] = $_POST['productQuantity'.$i] * $_POST['productPrice'.$i];
        $subTotal += $_POST['productTotalPrice'.$i];
        $receipt .= "
        <tr>
            <td ><input class='col-11' type='text' name='productName{$i}' value='" . $_POST['productName' . $i] . "'></td>
            <td ><input class='col-11' type='number' name='productPrice{$i}' value='" . $_POST['productPrice' . $i] . "'></td>
            <td ><input class='col-11' type='number' name='productQuantity{$i}' value='" . $_POST['productPrice' . $i] . "'></td>
            <td ><input class='col-11' type='number' name='productSubTotal{$i}' value='" . $_POST['productTotalPrice' . $i] . "'><br></td>
        </tr>";
    }
    $receipt .= "
            </tbody>
            </table><br><br><br>";

    $receipt .= "<table class='table'>
    <tbody>";
    $receipt .= "<tr><td>Client Name</td><td>" . $_POST["name"] . "</td></tr>";
    $receipt .= "<tr><td>City</td><td>" . $_POST["city"] . "</td></tr>";
    $receipt .= "<tr><td>Delivery</td><td>" . delivery($_POST['city']) . "</td></tr>";
    $receipt .= "<tr><td>Total</td><td>" . $subTotal . " </td></tr>";
    $receipt .= "<tr><td>Discount</td><td>" . discount($subTotal) . " </td></tr>";
    $receipt .= "<tr><td>Total after Discount</td><td>" . $subTotal - discount($subTotal) . " </td></tr>";
    $receipt .= "<tr><td>Total Order</td><td>" . delivery($_POST['city']) + $subTotal - discount($subTotal) . " </td></tr>";
}

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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../Css/style.css">
</head>

<body>
            <div class="container">
                <div class="center">
                    <h1>Supermarket</h1>
                </div>
            </div>
        <div class="form">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="form-group">
                            <form action="" method="post">
                                <label  for="name">Username</label>
                                <input class="form-control" type="text" name="name" value="<?= empty($_POST["name"]) ? "" : $_POST["name"] ?>">
                                <br>
                                <label for="city">City</label>
                                <select class="form-control" name="city" id="city">
                                    <option value="" ></option>
                                    <option <?php if (isset($_POST["city"]) && $_POST["city"] == "cairo") { ?>selected="true" <?php }; ?> value="cairo">Cairo</option>
                                    <option <?php if (isset($_POST["city"]) && $_POST["city"] == "giza") { ?>selected="true" <?php }; ?> value="giza">Giza</option>
                                    <option <?php if (isset($_POST["city"]) && $_POST["city"] == "alex") { ?>selected="true" <?php }; ?> value="alex">Alex</option>
                                    <option <?php if (isset($_POST["city"]) && $_POST["city"] == "other") { ?>selected="true" <?php }; ?> value="other">Other</option>
                                </select>
                                <br>
                                <label  for="products">Number of Products</label>
                                <input  type="number" name="products" value="<?= empty($_POST["products"]) ? "" : $_POST["products"] ?>">
                                <br><br>
                                <button class="form-control" name="submit" value="Submit">Submit</button>
                                <?= empty($table) ? " " : $table; ?>
                                <?= empty($receipt) ? " " : $receipt; ?>
                            </form>
                        </div>
                    </div>
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
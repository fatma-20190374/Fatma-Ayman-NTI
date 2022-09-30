<?php 
include "layouts/header.php";
$title = "Phone Number";
if ($_SERVER["REQUEST_METHOD"]=='POST' && $_POST){

    if(!empty($_POST['phone'])){
        $_SESSION['phone'] = $_POST['phone']; 
        header('location:review.php');
    }

}
?>

<!doctype html>
<header>
    <h1 > Hospital </h1>
</header>

<body>
    <div class="col-4 offset-4 my-5">
    <form method='POST' action="review.php">
        <label for="phone">Enter your phone number:</label><br>
        <input type="number" id="phone" name="phone" required> <br><br>
        <input class="btn btn-primary" type="submit" value="Submit"> 
    </form>
    </div>
</body>
<?php
 include "layouts/scripts.php";
 ?>
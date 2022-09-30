<?php 
$title="Games";
include "layouts/header.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST"  && $_POST){
$_SESSION["memberusername"]=$_POST['names'];
    header('location:result.php');
}
switch('game'){
    case 'Football':
        $price=300;
        break;
    case 'Swimming':
        $price=250;
    break;
    case 'Volleyball':
        $price=150;
        break;
    case 'others':
        $price=100;
        break;
}

?>
<div class="container  mt-4">
<form method="POST">
<?php

for($i=1;$i <=$_SESSION['num_of_family'];$i++){ ?>
<h1 class=".text-primary">Member <?php echo $i. "<br>";   ?></h1> 
<div class="form-group ">
<input type="text" name="names" class="form-control" id="names">
</div>
<div class="custom-control custom-checkbox mr-sm-2 mt-3">
<input type="checkbox" id="football" name="football" value="Football">
  <label for="football"> Football <strong>300LE.</strong></label><br>
  <input type="checkbox" id="Swimming" name="Swimming" value="Swimming">
  <label for="Swimming"> Swimming  <strong>250LE.</strong></label><br>
  <input type="checkbox" id="Volleyball" name="Volleyball" value="Volleyball">
  <label for="Volleyball">Volleyball <strong>150LE.</strong></label><br>
  <input type="checkbox" id="Others" name="Others"  value="Others">
  <label for="Others"> Others <strong>100LE.</strong></label><br>
</div>
<?php } ?>
<button type="submit" class="btn btn-primary col-md-12  mt-5">Calculate</button>
</form>
</div>
<?php include "layouts/scripts.php" ?>
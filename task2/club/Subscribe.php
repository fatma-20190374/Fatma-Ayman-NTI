<?php
$title="Club";
include "layouts/header.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST"  && $_POST ){
    $_SESSION['num_of_family']=$_POST['num_of_family'];
    header('location:Games.php');
}

?>
<section class="container mt-5">
    <div class="col-md-12 h1 text-center font-weight-blod text-primary">Club</div>
    <div class="d-flex justify-content-between mt-5">
        <section class="col-md-6 ">
            <form  method="post">
                <div class="form-group ">
                    <label for="username" class="font-weight-bold">Username</label>
                    <input type="text" name="username" value="<?php echo $_POST['username'] ?? ""; ?>" class="form-control" id="username" required>
                    
                </div>
                <div class="form-group ">
                    <label for="num_of_family" class="font-weight-bold">Family Members Count</label>
                    <input type="number" name="num_of_family" value="<?php echo $_POST['num_of_family'] ?? ""; ?>" class="form-control" id="num_of_family" required >
                    <small class="text-primary ">Club Subscription Start With 10.000 LE , Each Member Costs 2.500 LE</small>
                </div>
                <button type="submit" class="btn btn-primary col-md-12 ">Submit</button>
            </form>
        </section>
    </div>
</section>
<?php include "layouts/scripts.php" ?>
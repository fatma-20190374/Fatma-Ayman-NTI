<?php
include "layouts/header.php";
$title = "Result";

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST){

    $review_1 = $_POST['question_1'];
    $review_2 = $_POST['question_2'];
    $review_3 = $_POST['question_3'];
    $review_4 = $_POST['question_4'];
    $review_5 = $_POST['question_5'];
    
   $array_review = array($review_1, $review_2 ,$review_3 ,$review_4 , $review_5);
   $total_review= array_sum($array_review);

   if($total_review < 25 ){
    echo "<div class='alert alert-danger' role='alert'>Total review is bad, we will call you later on {$_SESSION['phone']}</div> ";
   }
   else{
    echo "<div class='alert alert-success' role='alert'>Total review is good, THANK YOU!</div> ";
   }
}
?>
<!DOCTYPE html>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<form method="post">
    <table class="table">
        <thead>
            <tr>
                <th>Question</th>
                <th>Review</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Are you satisfied with the level of hygiene?</th>
                <td> <?php
                if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
                    
                    if($review_1  == 0){
                        echo "Bad";
                    }
                    else if( $review_1 ==3){
                        echo "Good";
                    }
                    else if( $review_1 ==5){
                        echo "Very good";
                    }
                    else if($review_1 ==10){
                        echo "Excellant";
                    }
                    else{
                        echo "Error";
                    }
                } ?>
                </td>
            </tr>

            <tr>
                <th>Are you satisfied with the price of services?</th>
                <td> <?php
                if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
                    
                    if($review_2 == 0){
                        echo "Bad";
                    }
                    else if( $review_2 ==3){
                        echo "Good";
                    }
                    else if( $review_2 ==5){
                        echo "Very good";
                    }
                    else if($review_2 ==10){
                        echo "Excellant";
                    }
                    else{
                        echo "Error";
                    }
                } ?>
                </td>
            </tr>

            <tr>
                <th>Are you satisfied with the nursing service? </th>
                <td> <?php
                if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
                    
                    if($review_3  == 0){
                        echo "Bad";
                    }
                    else if( $review_3 ==3){
                        echo "Good";
                    }
                    else if( $review_3 ==5){
                        echo "Very good";
                    }
                    else if($review_3 ==10){
                        echo "Excellant";
                    }
                    else{
                        echo "Error";
                    }
                } ?>
                </td>
            </tr>

            <tr>
                <th>Are you satisfied with the level of the doctors? </th>
                <td> <?php
                if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
                    
                    if($review_4  == 0){
                        echo "Bad";
                    }
                    else if( $review_4 ==3){
                        echo "Good";
                    }
                    else if( $review_4 ==5){
                        echo "Very good";
                    }
                    else if($review_4 ==10){
                        echo "Excellant";
                    }
                    else{
                        echo "Error";
                    }
                } ?>
                </td>
            </tr>

            <tr>
                <th>Are you satisfied with the calmness in the hospital? </th>
                <td> <?php
                if($_SERVER['REQUEST_METHOD']=='POST' && $_POST){
                    
                    if($review_5  == 0){
                        echo "Bad";
                    }
                    else if( $review_5 ==3){
                        echo "Good";
                    }
                    else if( $review_5 ==5){
                        echo "Very good";
                    }
                    else if($review_5==10){
                        echo "Excellant";
                    }
                    else{
                        echo "Error";
                    }
                } ?>
                </td>
            </tr>
        </tbody>
    </table>
</form>
</body>

<?php
session_destroy();
 include "layouts/scripts.php";
 ?>
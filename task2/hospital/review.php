<?php
include "layouts/header.php";
 $title = "Review";

?>

<!doctype html>
<head>
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
</head>

<body>
<form action="result.php" method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Bad</th>
                                        <th>Good</th>
                                        <th>Very Good</th>
                                        <th>Excellent</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Are you satisfied with the level of hygiene?</th>
                                        <td><input type="radio" name="question_1" value="bad"></td>
                                        <td><input type="radio" name="question_1" value="good"></td>
                                        <td><input type="radio" name="question_1" value="veryGood"></td>
                                        <td><input type="radio" name="question_1" value="excellent"></td>
                                    </tr>
                                    <tr>
                                        <th>Are you satisfied with the price of services?</th>
                                        <td><input type="radio" name="question_2" value="0"></td>
                                        <td><input type="radio" name="question_2" value="3"></td>
                                        <td><input type="radio" name="question_2" value="5"></td>
                                        <td><input type="radio" name="question_2" value="10"></td>
                                    </tr>
                                    <tr>
                                        <th>Are you satisfied with the nursing service? </th>
                                        <td><input type="radio" name="question_3" value="0"></td>
                                        <td><input type="radio" name="question_3" value="3"></td>
                                        <td><input type="radio" name="question_3" value="5"></td>
                                        <td><input type="radio" name="question_3" value="10"></td>
                                    </tr>
                                    <tr>
                                        <th>Are you satisfied with the level of the doctors? </th>
                                        <td><input type="radio" name="question_4" value="0"></td>
                                        <td><input type="radio" name="question_4" value="3"></td>
                                        <td><input type="radio" name="question_4" value="5"></td>
                                        <td><input type="radio" name="question_4" value="10"></td>
                                    </tr>
                                    <tr>
                                        <th>Are you satisfied with the calmness in the hospital? </th>
                                        <td><input type="radio" name="question_5" value="0"></td>
                                        <td><input type="radio" name="question_5" value="3"></td>
                                        <td><input type="radio" name="question_5" value="5"></td>
                                        <td><input type="radio" name="question_5" value="10"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-primary">Submit</button>
                        </form>
</body>
<?php
 include "layouts/scripts.php";
 ?>
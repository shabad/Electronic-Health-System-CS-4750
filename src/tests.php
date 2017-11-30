<?php
include "db.php";
if(isset($_POST['addtest'])){
  $id = $_POST["id"];
  $testname = $_POST["testname"];
  $testdate = $_POST["testdate"];
  $testdoctor = $_POST["testdoctor"];
  $cost = $_POST["cost"];


  $sql = "INSERT INTO Tests (Test, Test_Date, Cost, Patient_ID, Doctor_ID)
VALUES ('$testname', '$testdate','$cost', '$id', '$testdoctor')";

if (!$result = $mysqli->query($sql)) {
    $error = true;
}


echo '<div class="alert alert-success" role="alert">';
echo 'Test has been created';
echo '</div>';


}

 header( 'Location: http://localhost:8000/src/pages-profile.php?id='.$id ) ;
 ?>
 <button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>

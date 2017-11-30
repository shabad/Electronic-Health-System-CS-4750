<?php
include "db.php";
if(isset($_POST['addprocedure'])){
  $id = $_POST["id"];
  $procedurename = $_POST["procedurename"];
  $doctorid = $_POST["doctorid"];
  $cost = $_POST["cost"];

echo $id;
echo '<br>';
echo $procedurename;
echo '<br>';
echo $doctorid;
echo '<br>';
echo $cost;
echo '<br>';


$sql = "INSERT INTO `Procedure` (Name, Cost, Patient_ID, Doctor_ID)
VALUES ('$procedurename', '$cost', '$id','$doctorid');";

if (!$result = $mysqli->query($sql)) {
    $error = true;
    echo 'eror';

}





}

 header( 'Location: http://localhost:8000/src/pages-profile.php?id='.$id ) ;
 ?>
 <button onclick="goBack()">Go Back</button>

<script>
function goBack() {
    window.history.back();
}
</script>

<?php
$student_id = $_POST['id'];
$str = implode(",", $student_id);
include "config.php";
$sql = "DELETE FROM form WHERE id IN ($str)";
if(mysqli_query($conn,$sql)){
  echo 1;
}else{
  echo 0;
}
?>

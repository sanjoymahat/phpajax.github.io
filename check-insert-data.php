<?php
include "config.php";
$name = $_POST['name'];
$language = $_POST['languages'];
$sql="INSERT INTO `lang`(`name`, `language`) VALUES('{$name}','{$language}')";
if(mysqli_query($conn,$sql)){
    echo "Successfully save data";
}else{
    echo "Does't Save data";
}
?>
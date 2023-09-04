<?php
include "config.php";
$sql="SELECT distinct(city) FROM city";
//distinct(city) ekta city repeating ta bondo kore comon city show kore
$result = mysqli_query($conn , $sql) or die("unsuccessfully:".mysqli_error($conn));
if(mysqli_num_rows($result) > 0){
    $output = mysqli_fetch_all($result , MYSQLI_ASSOC);
    echo json_encode($output);

}else{
    echo "NO record Found";
}
?>
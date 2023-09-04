<?php
include "config.php";
$seach_term = $_POST['city'];
$sql = "SELECT distinct(city) FROM city WHERE city LIKE '%{$seach_term}%'";
//distinct(city) ekta city repeating ta bondo kore comon city show kore
$result = mysqli_query($conn , $sql) or die("unsuccessfully:".mysqli_error($conn));
$output="<ul>";
if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
        $output .= "<li>{$row['city']}</li>";
    }

}else{
    $output .= ' <li>  "NO record Found"</li>';
}
$output .='</ul>';
echo $output;
?>
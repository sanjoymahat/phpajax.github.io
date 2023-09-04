<?php
include "config.php";
$sql= "SELECT * FROM city WHERE city= '{$_POST['city']}'";
$resut=mysqli_query($conn,$sql) or die("unsuccessful result:".mysqli_error($conn));
$output="";
if(mysqli_num_rows($resut) > 0){
    $output .= "<table border='0' width='100%' cellspacing='0' cellpadding='10px'>
    <tr>
    <th width='60px'>ID</th>
    <th width='90px'>Name</th>
    <th width='90px'>Age</th>
    <th width='90px'>Cityr</th>
    </tr>";
    while($row = mysqli_fetch_assoc($resut)){
        $output.="<tr>
        <td align ='center'>{$row['id']}</td>
        <td align = 'center'>{$row['student_name']}</td>
        <td align = 'center'>{$row['age']}</td>
        <td align = 'center'>{$row['city']}</td>
        </tr>";   
    }

    $output.="</table>";
    echo $output;
}else{
    echo "No records Found";
}
?>
<?php
include "config.php";
$sql = "SELECT * FROM form";
$result = mysqli_query($conn , $sql) or die("SQL Query Failed: " . mysqli_error($conn));
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output .= "<table border='0' width='100%' cellpadding='10px' cellspacing='2'>
              <tr>
                <th width='30px'></th>
                <th width='60px'>Id</th>
                <th width='90px'>Name</th>
                <th width='90px'>Age</th>
                <th width='90px'>Gender</th>
                <th width='90px'>Country</th>
              </tr>";     
  while($row = mysqli_fetch_assoc($result)){
    $output .= "<tr>
                <td align='center'><input type='checkbox' class='checkboxToDelete' value='{$row['id']}'></td>
                <td align='center'>{$row['id']}</td>
                <td align='center'>{$row['name']}</td>
                <td align='center'>{$row['age']}</td>
                <td align='center'>{$row['gender']}</td>
                <td align='center'>{$row['country']}</td>
              </tr>";
  } 
  $output .= "</table>";

  echo $output;                      
}else{
  echo "<h2>No Record Found.</h2>";
}
?>

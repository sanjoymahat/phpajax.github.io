<?php
header('Content-Type: application/json');
//this header api generate type;
header('Access-Control-Allow-Origin: *');
//this header api generate which site access this api here two parametter one Access-Control-Allow-Origin: and second * its mean all wite access if meantion any website then only this site access this api;
header('Access-Control-Allow-Methods:PUT');
//this header use insert data in post method
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');
//,Authorization:-its means we are authorize this api for any site use,X-Requested-with':-its meansthis header use security check for which headers only allowed to be used 
$data = json_decode(file_get_contents("php://input"), true);
//json_decode:-json data ke array te convert kore , (file_get_contents("php://input"), true);:-je kono row datake read korte pare seti json xml ba ono ki6u hok;
$student_id = $data['sid'];
$student_name = $data['sname'];
$student_age = $data['sage'];
$student_gender = $data['sgender'];
$student_country = $data['scountry'];
include "config.php";
$sql = "UPDATE form SET name = '{$student_name}', age = '{$student_age}', gender = '{$student_gender}', country = '{$student_country}' WHERE id = '{$student_id}'";

if(mysqli_query($conn,$sql)){
    echo json_encode(array('message'=>'student records Updated  successfully','status'=>'true'));
}else{
    echo json_encode(array('message'=>'student records Not Updated ','status'=>'false'));
}
?>


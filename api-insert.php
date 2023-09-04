<?php
header('Content-Type: application/json');
//this header api generate type;
header('Access-Control-Allow-Origin: *');
//this header api generate which site access this api here two parametter one Access-Control-Allow-Origin: and second * its mean all wite access if meantion any website then only this site access this api;
header('Access-Control-Allow-Methods:POST');
//this header use insert data in post method
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-with');
//,Authorization:-its means we are authorize this api for any site use,X-Requested-with':-its meansthis header use security check for which headers only allowed to be used 
$data = json_decode(file_get_contents("php://input"), true);
//(file_get_contents("php://input"), true);:-je kono row datake read korte pare seti json xml ba ono ki6u hok;
$student_name = $data['sname'];
$student_age = $data['sage'];
$student_gender = $data['sgender'];
$student_country = $data['scountry'];
include "config.php";
$sql = "INSERT INTO form(name,age,gender,country) VALUES ('{$student_name}','{$student_age}','{$student_gender}','{$student_country}')";

if(mysqli_query($conn,$sql)){
    echo json_encode(array('message'=>'student records insert  successfully','status'=>'true'));
}else{
    echo json_encode(array('message'=>'student records Not insert','status'=>'false'));
}
?>

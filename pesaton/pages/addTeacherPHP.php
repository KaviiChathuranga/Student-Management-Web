<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$name=$student[3]['value'];
$batch=$student[4]['value'];
$address=$student[5]['value'];
$nic=$student[6]['value'];
$age=$student[7]['value'];
$school=$student[8]['value'];
$tel=$student[9]['value'];
$dob=$student[10]['value'];
$email=$student[11]['value'];


$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"INSERT INTO Teacher VALUES(0,'{$name}','{$batch}','{$address}','{$nic}','{$age}','{$school}','{$tel}','{$dob}','{$email}')");
    if(mysqli_affected_rows($connection)>0){
        echo "Teacher has been added";
    }else{
        echo "Teacher has been failed".mysqli_error($connection);
    }
    mysqli_close($connection);
}
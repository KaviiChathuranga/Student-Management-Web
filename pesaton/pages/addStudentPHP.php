<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$name=$student[0]['value'];
$address=$student[2]['value'];
$batch=$student[1]['value'];
$age=$student[4]['value'];
$nic=$student[3]['value'];
$tel=$student[6]['value'];
$dob=$student[7]['value'];
$email=$student[8]['value'];
$school=$student[5]['value'];
$today=$student[9]['value'];

$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"INSERT INTO addstudent VALUES(0,'{$name}','{$address}','{$batch}','{$age}','{$nic}','{$tel}','{$dob}','{$email}','{$school}','{$today}')");
    if(mysqli_affected_rows($connection)>0){
        echo "Student has been added";
    }else{
        echo "student has been failed";
    }
    mysqli_close($connection);
}
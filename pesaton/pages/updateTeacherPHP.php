<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$txtTID=$student[0]['value'];
$name=$student[1]['value'];
$batch=$student[2]['value'];
$address=$student[3]['value'];
$nic=$student[4]['value'];
$age=$student[5]['value'];
$school=$student[6]['value'];
$tel=$student[7]['value'];
$dob=$student[8]['value'];
$email=$student[9]['value'];


$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"Update Teacher set name='{$name}', batch='{$batch}', address='{$address}', nic='{$nic}',age='{$age}',school='{$school}', tel='{$tel}', dob='{$dob}',email='{$email}' where id='{$txtTID}'");
    if(mysqli_affected_rows($connection)>0){
        echo "Teacher has been Updated";
    }else{
        echo "Teacher has been failed".mysqli_error($connection);
    }
    mysqli_close($connection);
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$eid=$student[0]['value'];
$name=$student[1]['value'];
$batch=$student[2]['value'];
$subject=$student[3]['value'];
$date=$student[4]['value'];
$fromTime=$student[5]['value'];
$toTime=$student[6]['value'];


$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"INSERT INTO Exam VALUES('{$eid}','{$name}','{$batch}','{$subject}','{$date}','{$fromTime}','{$toTime}')");
    if(mysqli_affected_rows($connection)>0){
        echo "Exam has been added";
    }else{
        echo "Exam has been failed" . mysqli_error($connection);
    }
    mysqli_close($connection);
}
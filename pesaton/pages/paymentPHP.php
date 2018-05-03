<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");


$batch=$student[0]['value'];
$subject=$student[1]['value'];
$name=$student[2]['value'];
$month=$student[3]['value'];
$date=$student[4]['value'];
$fee=$student[5]['value'];


$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"INSERT INTO Payment VALUES(0,'{$batch}','{$subject}','{$name}','{$month}','{$date}','{$fee}')");
    if(mysqli_affected_rows($connection)>0){
        echo "Payment has been added";
    }else{
        echo "Payment has been failed".mysqli_error($connection);
    }
    mysqli_close($connection);
}
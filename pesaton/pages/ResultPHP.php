<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$eId=$student[0]['value'];
$sId=$student[1]['value'];
$eName=$student[2]['value'];
$eBatch=$student[3]['value'];
$eSubject=$student[4]['value'];
$eDate=$student[5]['value'];
$marks=$student[6]['value'];



$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"INSERT INTO Result VALUES(0,'{$eId}','{$sId}','{$eName}','{$eBatch}','{$eSubject}','{$eDate}','{$marks}')");
    if(mysqli_affected_rows($connection)>0){
        echo "Result has been added";
    }else{
        echo "Result has been failed";
    }
    mysqli_close($connection);
}
<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$id=$student[0]['value'];



$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"select id from batch where name='{$id}'");
    if(mysqli_affected_rows($connection)>0){
        echo "Exam has been added";
    }else{
        echo "Exam has been failed";
    }
    mysqli_close($connection);
}
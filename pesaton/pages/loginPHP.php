<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

//$lid=$student[0]['value'];
$name=$student[0]['value'];
$password=$student[1]['value'];
$types=$student[2]['value'];


$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"INSERT INTO login VALUES(0,'{$name}','{$password}','{$types}')");
    if(mysqli_affected_rows($connection)>0){
        echo "User has been added";
    }else{
        echo "User has been failed";
    }
    mysqli_close($connection);
}
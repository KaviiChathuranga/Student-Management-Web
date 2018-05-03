<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */

$tid=$_GET['tid'];

$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$name=$student[0]['value'];
$types=$student[1]['value'];
$date=$student[2]['value'];


$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"INSERT INTO Subject VALUES(0,'{$name}','{$tid}','{$types}','{$date}')");
    if(mysqli_affected_rows($connection)>0){
        echo "Subject has been added";
    }else{
        echo "Subject has been failed".mysqli_error($connection);
    }
    mysqli_close($connection);
}
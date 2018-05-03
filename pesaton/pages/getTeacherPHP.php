<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");



$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $resultSet=mysqli_query($connection,"SELECT * FROM Teacher WHERE id =(SELECT MAX(id) FROM Teacher)");
    $result=mysqli_fetch_all($resultSet);
    foreach ($result as $teacher){

        echo $teacher[0];

    }


    mysqli_close($connection);
}
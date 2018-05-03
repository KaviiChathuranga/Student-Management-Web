<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/9/2018
 * Time: 9:04 AM
 */
$json=file_get_contents("php://input");
$student=json_decode($json,"true");

$id=$_GET['l'];
$connection=mysqli_connect("localhost","root","kavinduk0","stu","3306");

if(!$connection){
    echo "something went wrong with the connection";
    die;
}else{
    $result=mysqli_query($connection,"select * from Teacher where id='$id'");
    if (mysqli_num_rows($result)){
        $array=mysqli_fetch_all($result,MYSQLI_ASSOC);
        echo json_encode($array);
    }else{
        echo mysqli_error($connection);
    }
    mysqli_close($connection);
}
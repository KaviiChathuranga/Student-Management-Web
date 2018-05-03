<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kavindu
 * Date: 1/20/2018
 * Time: 5:48 PM
 */
$name=$_COOKIE['userName'];
$password=$_COOKIE['password'];

session_start();
session_destroy();
setcookie('userName',$name,time()-1);
setcookie('password',$password,time()-1);

echo "Success";
return;


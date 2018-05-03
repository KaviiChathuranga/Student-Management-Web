<?php
$name=$_POST["name"];
$password=$_POST["password"];

?>
<?php
//$resultSet=mysqli_query($connection,"select * from Login");
//$result=mysqli_fetch_all($resultSet);

$userName='kavi';
$pass='0000';

if($userName == $name AND $pass == $password){
    if(isset($_POST['login-remember-me'])){
        setcookie('userName',$userName,time()+60*60*7);
        setcookie('password',$pass,time()+60*60*7);
    }else{


        if(isset($_COOKIE['userName']) AND isset($_COOKIE['password'])){
            session_start();
            session_destroy();
            setcookie('userName',$name,time()-1);
            setcookie('password',$password,time()-1);

        }
    }
    session_start();
    $_SESSION['userName']=$userName;
    echo "Idetified";
}else{
    echo "Cannot Login Error !";
}

?>

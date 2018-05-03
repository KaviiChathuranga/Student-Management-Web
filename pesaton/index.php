<?php
session_start();
if(!isset($_SESSION['kavi'])){
    header("location","index.php");
}else{
    header("location","main.html");
}
?>
<?php

$connection=mysqli_connect('localhost','root','kavinduk0','stu');



?>
<!DOCTYPE HTML>
<!--

-->
<html>
<head>
    <title>Orient Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>


<header id="header" class="alt">
    <div class="logo"><a href="main.html">Orient <span>by Student Admin</span></a></div>
    <a href="#menu" class="toggle"><span>Menu</span></a>
</header>


<nav id="menu">
    <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="generic.html">Generic</a></li>
        <li><a href="elements.html">Elements</a></li>
    </ul>
</nav>


<section id="banner" data-video="images/banner">

    <div class="inner">
        <h1></h1>
        <p>Nothing in this world can take the place of persistence. Talent will not: nothing is more common than unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will not:<br />
            built by <a href="https://templated.co/">Orient</a> and released under the <a href="https://templated.co/license">Creative Commons</a>.</p>
        <a href="#one" class="button special scrolly">Get Started</a>
    </div>
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div>
            <div class="box">
                <div class="image fit">
                    <img src="images/Add-thumb-1920-476792-2.jpg" alt="" />
                </div>
                <div class="content">
                    <header class="align-center">
                        <h2>Orient Student Login</h2>
                        <p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
                    </header>
                    <hr />
                    <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
                    <p>Vivamus fermentum nibh vel pharetra blandit. Cras a purus urna. Sed et libero ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse id hendrerit felis. Nulla viverra tempor dui at congue. Pellentesque quis nulla ornare, congue nisi id, finibus nulla. Aliquam sit amet hendrerit purus. Donec libero massa, posuere fermentum eros sit amet, maximus fringilla augue. Maecenas at rhoncus lorem. Vivamus ultricies consequat est, efficitur convallis libero. Vivamus rutrum semper mauris, vitae consequat eros tempor ac. Pellentesque et ornare sapien</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style3">
    <div class="inner">
        <div id="flexgrid">
            <div>
                <header>
                    <h3>Student League</h3>
                </header>
                <p>Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu</p>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </div>
            <div>
                <header>
                    <h3>Teacher Panel</h3>
                </header>
                <p>Ut convallis, sem sit amet interdum consectetuer, odio augue aliquam leo, nec dapibus tortor nibh sed </p>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </div>
            <div>
                <header>
                    <h3>Admin Says</h3>
                </header>
                <p>Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula.</p>
                <ul class="actions">
                    <li><a href="#" class="button alt">Learn More</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/pic02.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>Lorem ipsum dolor</h2>
                            <p>maecenas feugiat ex purus, quis volutpat lacus placerat</p>
                        </header>
                        <hr />
                        <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img src="images/pic03.jpg" alt="" />
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2>Vestibulum sit amet</h2>
                            <p>mattis sapien pretium tellus venenatis</p>
                        </header>
                        <hr />
                        <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Four -->
<section id="four" class="wrapper style3">
    <div class="inner">

        <header class="align-center">
            <h2>Morbi interdum mollis sapien</h2>
            <p>Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
        </header>

    </div>
</section>

<!-- Footer -->
<footer id="footer" class="wrapper">
    <div class="inner">
        <section>
            <div class="box">
                <div class="content">
                    <h2 class="align-center">Login Form</h2>
                    <hr />
                    <form id="formLogin">
                        <div class="field half first">
                            <label for="name">User Name</label>
                            <input name="name" id="name" type="text" placeholder="User Name">
                        </div>

                        <div class="field half">
                            <label for="password">Password</label>
                            <input name="password" id="password" type="password" placeholder="password">
                        </div>

                        <div class="field half">
                        <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                            <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                            <span></span>
                        </label>
                        </div>

                        <div class="field">
                            <label for="dept">Department</label>
                            <div class="select-wrapper">
                                <select name="types" id="dept">
                                    <option value="">- Category -</option>
                                    <option value="1">Reception</option>
                                    <option value="1">Manager</option>
                                    <option value="1">Administrator</option>
                                    <option value="1">Human Resources</option>
                                </select>
                            </div>
                        </div>

                        <ul class="actions align-center">
                            <li><input value="Login" name="loginBtn" id="loginBtn" class="button special" type="button"></li>
                            <li><input value="SignIn" name="signBtn" id="signBtn" class="button special" type="button" style="background-color: red"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
        <div class="copyright">
            &copy; Untitled Design: <a href="">Oriented</a>. Images <a href="">Unsplash</a>. Video <a href="">Coverr</a>.
        </div>
    </div>
</footer>

<!-- Scripts -->
<script>

</script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="js/register.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
<script>
<?php
if(isset($_COOKIE['userName']) AND isset($_COOKIE['password'])){
    $uName=$_COOKIE['userName'];
    $pass=$_COOKIE['password'];

    echo "<script>
        document.getElementById('name').value = '$uName';
        document.getElementById('password').value = '$pass';
    </script>";
}
?>
</script>
<!--<script src="js/pages/login.js"></script>-->
<!--<script>$(function(){ Login.init(); });</script>-->
<?php
$connection = mysqli_connect("localhost", "root", "kavinduk0", "stu", "3306");
?>
<!DOCTYPE html>

<html>
<head>
    <title>Subjects</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
        #slideshow {
            text-align: center;
            font-family: "Times New Roman";
            position: relative;
            width: 200px;
            height: 15cm;
            margin-left: 3cm;

        }

        #slideshow > div {
            position: absolute;
            top: 0px;
            left: 0px;
            right: 0px;
            bottom: 0px;
        }

        #cancelBtn:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        #cancelBtn {
            background-color: red;
            font-family: "Times New Roman";
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;

            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }

        #subjectBtn:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        #subjectBtn {
            background-color: red;
            font-family: "Times New Roman";
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;

            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }

        #examBtn:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        #examBtn {
            background-color: red;
            font-family: "Times New Roman";
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;

            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }
        #resultBtn:hover {
            box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
        }

        #resultBtn {
            background-color: red;
            font-family: "Times New Roman";
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;

            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
        }

        #table {

            width: 100%;
            background-color: #D8F0DA;
            border: 1px;
            min-width: 100%;
            position: relative;
            opacity: 0.97;
            background: transparent;
            border-collapse: separate;
            border-spacing: 10px;
        }

        .table-wrapper {
            -webkit-overflow-scrolling: touch;
            overflow-x: auto;
        }

        table {
            margin: 0 0 2rem 0;
            width: 100%;
        }

        table tbody tr {
            border: solid 1px;
            border-left: 0;
            border-right: 0;
        }

        table td {
            padding: 0.75rem 0.75rem;
        }

        table th {
            font-size: 0.9rem;
            font-weight: 400;
            padding: 0 0.75rem 0.75rem 0.75rem;
            text-align: left;
        }

        table thead {
            border-bottom: solid 2px;
        }

        table tfoot {
            border-top: solid 2px;
        }

        table.alt {
            border-collapse: separate;
        }

        table.alt tbody tr td {
            border: solid 1px;
            border-left-width: 0;
            border-top-width: 0;
        }

        table.alt tbody tr td:first-child {
            border-left-width: 1px;
        }

        table.alt tbody tr:first-child td {
            border-top-width: 1px;
        }

        table.alt thead {
            border-bottom: 0;
        }

        table.alt tfoot {
            border-top: 0;
        }

        table tbody tr {
            border-color: rgba(144, 144, 144, 0.25);
        }

        table tbody tr:nth-child(2n + 1) {
            background-color: rgba(144, 144, 144, 0.075);
        }

        table th {
            color: white;
            text-align: center;
        }

        table thead {
            border-bottom-color: rgba(144, 144, 144, 0.25);
        }

        table tfoot {
            border-top-color: rgba(144, 144, 144, 0.25);
        }

        table.alt tbody tr td {
            border-color: rgba(144, 144, 144, 0.25);
        }

        .tbl {
            border-collapse: separate;
            border-spacing: 20px;
        }


    </style>

</head>

<body id="top">

<div class="bgded overlay"
     style="background-image:url('images/Add-Read-the-grammar-book-every-morning_1920x1080-2.jpg');">

    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">

            <div class="fl_left">
                <ul class="nospace">
                    <li><a href="#"><i class="fa fa-lg fa-home"></i></a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
            </div>
            <div class="fl_right">
                <ul class="nospace">
                    <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="fa fa-envelope-o"></i> www.orient.com</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="wrapper row1">
        <header id="header" class="hoc clear">

            <div id="logo" class="fl_left">
                <h1><a href="main.html">OrienT</a></h1>
            </div>
            <nav id="mainav" class="fl_right">
                <ul class="clear">
                    <li class="active"><a href="main.html">Home</a></li>
                    <li><a class="drop" href="#">Pages</a>
                        <ul>
                            <li><a href="pages/gallery.html">Gallery</a></li>
                            <li><a href="pages/full-width.html">Subjects</a></li>
                            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                        </ul>
                    </li>
                    <li><a class="drop" href="#">Dropdown</a>
                        <ul>
                            <li><a href="#">Level 2</a></li>
                            <li><a class="drop" href="#">Level 2 + Drop</a>
                                <ul>
                                    <li><a href="#">Level 3</a></li>
                                    <li><a href="#">Level 3</a></li>
                                    <li><a href="#">Level 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Level 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Link Text</a></li>
                    <li><a href="#">Link Text</a></li>
                </ul>
            </nav>

        </header>
    </div>

    <div id="pageintro" class="hoc clear">

        <article class="clear">
            <ul class="nospace clear">
                <li><a href="#"><i class="fa fa-usb"></i></a></li>
                <li><a href="#"><i class="fa fa-google-wallet"></i></a></li>
                <li><a href="#"><i class="fa fa-yelp"></i></a></li>
                <li><a href="#"><i class="fa fa-weibo"></i></a></li>
                <li><a href="#"><i class="fa fa-history"></i></a></li>
            </ul>
            <h2 class="heading">Orient Input Exam Marks  </h2>
            <p>Nothing in this world can take the place of persistence. Talent will not: nothing is more common than
                unsuccessful men with talent. Genius will not; unrewarded genius is almost a proverb. Education will
                not: the world is full of educated derelicts. Persistence and determination alone are omnipotent.
                .</p>
            <footer><a class="btn" href="#">WelCome</a></footer>
        </article>

    </div>

</div>

<div class="wrapper row3">
    <main class="hoc container clear">


        <div class="group cta">
            <article class="one_third first"><a href="#"><i class="fa fa-globe"></i></a>
                <h6 class="heading">Volutpat aliquam</h6>
                <p>Vel ipsum sit amet odio congue elit est morbi leo&hellip;</p>
            </article>
            <article class="one_third"><a href="#"><i class="fa fa-tripadvisor"></i></a>
                <h6 class="heading">Sagittis feugiat</h6>
                <p>Cras felis ligula ultrices et odio tincidunt eleifend&hellip;</p>
            </article>
            <article class="one_third"><a href="#"><i class="fa fa-ge"></i></a>
                <h6 class="heading">Ornare venenatis</h6>
                <p>Id felis fringilla accumsan nulla vel sollicitudin non&hellip;</p>
            </article>
        </div>


        <div class="clear"></div>
    </main>
</div>


<div class="wrapper row6" style="background-color: white">
    <div class="hoc container clear">

        <div class="center btmspace-50">
            <h3 class="font-x2 nospace">The Main Menu of Us</h3>
            <p class="nospace">Libero suscipit imperdiet mauris egestas nisl ut mi sollicitudin at iaculis odio <a
                        href="#">Orient Express</a>.</p>
            <br><br>
            <ul class="nospace group btmspace-50 elements">
                <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <form id="form-exam">
                    <table class="tbl">
                        <tr>
                            <td>Exam ID</td>
                            <td><input type="text" class="form-control" name="eid" ></td>
                        </tr>

                        <tr>
                            <td>Exam Name</td>
                            <td><input type="text" class="form-control" name="name"></td>
                        </tr>

                        <tr>
                            <td>Batch</td>
                            <td><select class="form-control" name="batch">
                                    <?php
                                    $resultSet = mysqli_query($connection, "select * from Batch");
                                    $result = mysqli_fetch_all($resultSet);
                                    foreach ($result as $batch) {
                                        ?>
                                        <option><?= $batch[1] ?></option>
                                        <?php
                                    }
                                    ?>
                                </select></td>

                        </tr>

                        <tr>
                            <td>Subject</td>
                            <td><select class="form-control" name="subject">
                                <?php
                                $resultSet = mysqli_query($connection, "select * from Subject");
                                $result = mysqli_fetch_all($resultSet);
                                foreach ($result as $batch) {
                                    ?>
                                    <option><?= $batch[1] ?></option>
                                    <?php
                                }
                                ?>
                                </select></td>
                        </tr>

                        <tr>
                            <td>Exam Date</td>
                            <td><input type="date" class="form-control" name="date"></td>
                        </tr>

                        <tr>
                            <td>Exam Duration</td>
                            <td><input type="text" class="form-control" name="fromTime"></td>
                            <td>To</td>
                            <td><input type="text" class="form-control" name="toTime"></td>
                        </tr>
                    </table>

                    <br><br>

                    <br><br>
                    <button class="btn btn-danger" id="examBtn" style="margin-left: 20cm;background-color: lawngreen"
                            type="button">Saving Exam
                    </button>
                    <br><br>
                    <button class="btn btn-danger" id="cancelBtn" style="margin-left: 20cm;background-color: red"
                            type="button">Cancel Exam
                    </button>
                    <br><br>
                </form>
                    <!--                //////////////////////////////////////////////////-->

                <form id="form-result">
                    <table>
                        <tr>
                            <td>Exam-Id</td>
                            <td><input type="text" class="form-control" id="eId" name="eId" onkeypress="return searchKeyPress(event);"></td>
                            <td>Student</td>
                            <td><input type="text" class="form-control" id="sId" name="sId"></td>
                        </tr>
                    </table>


                    <!--                    ///////////////////////////////////////-->
                    <table class="tbl">
                        <tr>
                            <td>Exam Name</td>
                            <td><input type="text" class="form-control" name="eName" id="eName"></td>
                        </tr>

                        <tr>
                            <td>Batch</td>
                            <td><input type="text" class="form-control" name="eBatch" id="eBatch"></td>
                        </tr>

                        <tr>
                            <td>Subject</td>
                            <td><input type="text" class="form-control" name="eSubject" id="eSubject"></td>
                        </tr>

                        <tr>
                            <td>Exam Date</td>
                            <td><input type="text" class="form-control" name="eDate" id="eDate"></td>
                        </tr>

                        <tr>
                            <td>Enter Marks</td>
                            <td><input type="text" class="form-control" name="marks" id="marks"></td>

                        </tr>
                    </table>
                    <br><br>

                    <br><br>
                    <button class="btn btn-danger" id="resultBtn" style="margin-left: 20cm;background-color: lawngreen"
                            type="button">Saving Result
                    </button>
                    <br><br><br>

                    who come to school "but never learn to swim," of "masculinity mimicked by men who grew up with no fathers." Beautiful, lyrical, chilling.
                    <!--                /////////////////////////////////////////////////////////////////-->
                    <br><br><br>

                    <div class="scrollable">
                        <table>
                            <thead>
                            <tr>
                                <th>Exam</th>
                                <th>Name</th>
                                <th>Batch</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>From Time</th>
                                <th>To Time</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $resultSet = mysqli_query($connection, "select * from Exam");
                            $result = mysqli_fetch_all($resultSet);
                            foreach ($result as $item) {
                                ?>
                                <tr>

                                    <td><?= $item[0] ?></td>
                                    <td><?= $item[1] ?></td>
                                    <td><?= $item[2] ?></td>
                                    <td><?= $item[3] ?></td>
                                    <td><?= $item[4] ?></td>
                                    <td><?= $item[5] ?></td>
                                    <td><?= $item[6] ?></td>
                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            </tbody>
                        </table>

                        <br><br>

                        <br><br>

                    </div>

                </form>
            </ul>
            <p class="nospace center"><a class="btn" href="#">Go To Next Page </a></p>

            <div class="clear"></div>
        </div>
    </div>


    <div class="wrapper row3">
        <section class="hoc container clear">

            <div class="center btmspace-50">
                <h3 class="font-x2 nospace">Now Select Your Level</h3>
                <p class="nospace">Congue orci maecenas faucibus sapien in bibendum ante velit semper dui id euismod <a
                            href="#">Orient Deploma</a>.</p>
            </div>
            <div class="group center">
                <article class="one_third first"><a href="#"><img class="btmspace-30"
                                                                  src="images/getting-your-degree.jpg" alt=""></a>
                    <time class="block font-xs" datetime="2045-04-06">6<sup>th</sup> April 2045</time>
                    <h2 class="nospace font-x1 bold">Certificate Level</h2>
                    <p>Semper neque vestibulum ut porttitor metus suspendisse hendrerit metus et diam gravida vestibulum
                        sed&hellip;</p>
                    <p class="nospace"><a href="#">Read More &raquo;</a></p>
                </article>
                <article class="one_third"><a href="#"><img class="btmspace-30" src="images/images.jpg" alt=""></a>
                    <time class="block font-xs" datetime="2045-04-05">5<sup>th</sup> April 2045</time>
                    <h2 class="nospace font-x1 bold">Deploma Level</h2>
                    <p>Feugiat porta diam quis fermentum in ullamcorper ex id aliquet cursus justo lectus egestas urna
                        vel tempor&hellip;</p>
                    <p class="nospace"><a href="#">Read More &raquo;</a></p>
                </article>
                <article class="one_third"><a href="#"><img class="btmspace-30" src="images/1.jpg" alt=""></a>
                    <time class="block font-xs" datetime="2045-04-04">4<sup>th</sup> April 2045</time>
                    <h2 class="nospace font-x1 bold">Basic Level</h2>
                    <p>Elit fusce maximus at mi ligula hendrerit cras ornare lorem sed arcu at gravida nulla lacinia
                        nunc id ante rhoncus&hellip;</p>
                    <p class="nospace"><a href="#">Read More &raquo;</a></p>
                </article>
            </div>

        </section>
    </div>

    <div class="wrapper row4 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
        <footer id="footer" class="hoc clear">

            <div class="clear center btmspace-80">
                <h6 class="title">Newsletter subscription</h6>
                <form class="clear" method="post" action="#">
                    <fieldset>
                        <legend>Newsletter:</legend>
                        <input type="text" value="" placeholder="Type Email Here&hellip;">
                        <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>
                    </fieldset>
                </form>
            </div>

            <div class="group">
                <div class="one_third first">
                    <h6 class="title">Quis risus ultricies</h6>
                    <p>Eleifend curabitur vel eros eget nunc sagittis vehicula a vitae tortor donec at nibh nisi ut eget
                        felis eu urna iaculis.</p>
                    <p class="btmspace-15">Cursus lacus ac nisl laoreet sed a lacus pharetra mattis nulla ut semper ex
                        etiam ornare maximus lacus eget.</p>
                    <ul class="faico clear">
                        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
                    </ul>
                </div>
                <div class="one_third">
                    <h6 class="title">Elementum luctus</h6>
                    <ul class="nospace linklist contact">
                        <li><i class="fa fa-map-marker"></i>
                            <address>
                                Street Name &amp; Number, Town, Postcode/Zip
                            </address>
                        </li>
                        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
                        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
                        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
                    </ul>
                </div>
                <div class="one_third">
                    <h6 class="title">Etiam convallis ante</h6>
                    <ul class="nospace linklist">
                        <li>
                            <article>
                                <h2 class="nospace font-x1"><a href="#">Pharetra facilisis</a></h2>
                                <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup>
                                    April 2045
                                </time>
                                <p class="nospace">Condimentum fusce justo ligula malesuada ut finibus at dictum sem
                                    nulla&hellip;</p>
                            </article>
                        </li>
                        <li>
                            <article>
                                <h2 class="nospace font-x1"><a href="#">Dapibus eros</a></h2>
                                <time class="font-xs block btmspace-10" datetime="2045-04-05">Thirsday, 5<sup>th</sup>
                                    April 2045
                                </time>
                                <p class="nospace">Lacinia sem vitae lorem etiam aliquet magna vitae cursus ultrices sed
                                    enim&hellip;</p>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>

        </footer>
    </div>


    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">

            <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Orient Student</p>
            <p class="fl_right"><a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">Admin
                    - Kavindu Chathuranga</a></p>

        </div>
    </div>


    <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>

    <script src="js/plugins.js"></script>
    <script src="js/validate.js"></script>
    <script>$(function () {
            FormsValidation.init();
        });</script>
    <script src="js/register.js"></script>
    <script src="layout/scripts/jquery.placeholder.min.js"></script>

    <script>

    </script>

</body>
</html>
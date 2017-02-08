
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start();?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>ASPMS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <!-- Graph CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- jQuery -->
        <!-- lined-icons -->
        <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
        <!-- //lined-icons -->
        <script src="js/jquery-1.10.2.min.js"></script>
        <!--clock init-->
    </head> 
    <body>
        <!--/login-->

        <div class="error_page">
            <!--/login-top-->

            <div class="error-top">
                <h2 class="inner-tittle page">ASPMS </h2>
                <h4 class="inner-tittle page">Automobile Spare Parts Management System</h4>

                <div class="login">
                    <h3 class="inner-tittle t-inner">Login</h3>
                    <div class="buttons login">

                    </div>
                    <form action="index.php" method="post">
                        <input type="text" name="username" /> 
                                                                                                                                                        <input type="password" name="password" />
                        <div class="submit">
                            <input type="submit" onclick="myFunction()" value="Login" name="login"></div>
                        <div class="clearfix"></div>

                        <!--																		<div class="new">
                                                                                                                                                                                <div class="clearfix"></div>
                                                                                                                                                                        </div>-->
                        <?php
                        include_once './_functions.php';
                        if (isset($_POST['login'])) {
                           if(doLogin()){
                               header('Location:home.php');
                           }else{
                           echo 'Invalid username or password';
                           }
                        }
                        ?>
                    </form>
                </div>


            </div>


            <!--//login-top-->
        </div>

        <!--//login-->
        <!--footer section start-->
        <div class="footer">
            <div class="error-btn">
            </div>
        </div>
        <!--footer section end-->
        <!--/404-->
        <!--js -->
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
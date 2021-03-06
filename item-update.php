     
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
        <script src="js/amcharts.js"></script>	
        <script src="js/serial.js"></script>	
        <script src="js/light.js"></script>	
        <script src="js/radar.js"></script>	
        <link href="css/barChart.css" rel='stylesheet' type='text/css' />
        <link href="css/fabochart.css" rel='stylesheet' type='text/css' />
        <!--clock init-->
        <script src="js/css3clock.js"></script>
        <!--Easy Pie Chart-->
        <!--skycons-icons-->
        <script src="js/skycons.js"></script>

        <script src="js/jquery.easydropdown.js"></script>

        <!--//skycons-icons-->
        <script src="js/highcharts.js" type="text/javascript"></script>
        <script src="js/exporting.js" type="text/javascript"></script>
    </head> 
    <body>
        <div class="page-container">
            <!--/content-inner-->
            <div class="left-content">
                <div class="inner-content">
                    <!-- header-starts -->
                    <div class="header-section">

                    </div>
                    <!-- //header-ends -->
                    <div class="outter-wp">

                        <div class="row">
                            <div class="col-md-12"> <i class="fa fa-car fa-3"></i>
                                <b> Automobile Spare Part Management System </b>
                                <p>Automotive ERP system</p>
                                <hr>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-10">
                                <div class="chrt">
                                    <b> Item Add</b>

                                    <form name="form1" method="post" action="">
                                        <table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                                <td width="15%">Item No</td>
                                                <td width="47%">1 </td>
                                                <td width="28%">Store Area</td>
                                                <td width="10%"><select name="select2" id="select2">
                                                        
                                                        <option>E1</option>
                                                        <option>E2</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Item Name</td>
                                                <td><input name="textfield" type="text" id="textfield" value="toyota 100 CC"></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td><select name="select" id="select">
                                                  <option>Engin</option>
                                                </select></td>
                                                <td>Buying Price</td>
                                                <td><input name="textfield3" type="text" id="textfield3" value="1500"></td>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td><input name="textfield2" type="text" id="textfield2" value="toyota"></td>
                                                <td>Selling Price</td>
                                                <td><input name="textfield4" type="text" id="textfield4" value="2500"></td>
                                            </tr>
                                            <tr>
                                                <td>Description</td>
                                                <td><textarea name="textarea" id="textarea"></textarea></td>
                                                <td>Qty</td>
                                                <td><input name="textfield5" type="text" id="textfield5" value="10"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" value="Update"/></td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-2">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">

                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table-bordered">
                                    <tr class="success">
                                      <td width="7%"><strong>Item No</strong></td>
                                        <td width="13%"><strong>Item Name</strong></td>
                                        <td width="8%"><strong>Category</strong></td>
                                        <td width="10%"><strong>Stock Area</strong></td>
                                        <td width="9%"><strong>Stock Qty</strong></td>
                                        <td width="43%"><strong>Category</strong></td>
                                        <td width="10%">&nbsp;</td>
                                        <td width="10%">&nbsp;</td>
                                    </tr>
                                    <tr>
                                      <td>1</td>
                                        <td>Engin-Toyota</td>
                                        <td>Engin</td>
                                        <td><span class="btn-primary"> E1 </span>&nbsp;</td>
                                        <td>10</td>
                                        <td>On  the Insert tab, the galleries include items that are designed </td>
                                        <td><a href="">Update</a></td>
                                        <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                        <td>Radiator-Toyota</td>
                                        <td>Radiator</td>
                                        <td><span class="btn-primary">E1 </span>&nbsp;</td>
                                        <td>20</td>
                                        <td>On  the Insert tab, the galleries include items that are designed </td>
                                        <td><a href="#">Update</a></td>
                                        <td><i class="fa fa-times" aria-hidden="true"></i></td>
                                    </tr>
                                    <tr>
                                      <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                </table>


                            </div>
                        </div>


                        <!--//outer-wp-->
                    </div>
                    <!--footer section start-->
                    <footer>
                        <p>&copy 2017 ASPMS. All Rights Reserved | Design by <a href="#" target="_blank">ASPMS Software.</a></p>
                    </footer>
                    <!--footer section end-->
                </div>
            </div>
            <!--//content-inner-->
            <!--/sidebar-menu-->
            <div class="sidebar-menu"> 
                <header class="logo">
                    <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>ASPMS</h1></span> 
                        <!--<img id="logo" src="" alt="Logo"/>--> 
                    </a> 
                </header>
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
                <!--/down-->
                <div class="down">	

                    <a href="index.html"><span class=" name-caret">Saman</span></a>
                    <p>Administrator</p>
                    <ul>
                        <li><a class="tooltips" href="index.html"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
                        <li><a class="tooltips" href="index.html"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
                        <li><a class="tooltips" href="index.html"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
                    </ul>
                </div>
                <!--//down-->
                <div class="menu">
                 <?php include('menu-customer.php')?>
                </div>
            </div>
            <div class="clearfix"></div>		
        </div>
        <script>
            var toggle = true;

            $(".sidebar-icon").click(function () {
                if (toggle)
                {
                    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
                    $("#menu span").css({"position": "absolute"});
                } else
                {
                    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
                    setTimeout(function () {
                        $("#menu span").css({"position": "relative"});
                    }, 400);
                }

                toggle = !toggle;
            });
        </script>
        <!--js -->
        <link rel="stylesheet" href="css/vroom.css">
        <script type="text/javascript" src="js/vroom.js"></script>
        <script type="text/javascript" src="js/TweenLite.min.js"></script>
        <script type="text/javascript" src="js/CSSPlugin.min.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>






    </body>
</html>
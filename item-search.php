<?php
session_start();
include './_functions.php';
?>
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
        <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
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
                                    <b> Search Item</b>

                                    <form name="form1" method="post" action="">
                                        <table width="100%" border="0" cellspacing="5" cellpadding="0">
                                            <tr>
                                                <td width="15%">Item Name</td>
                                                <td width="47%"><input type="text" name="item_name" id="item_name"></td>
                                                <td width="28%">Store Area</td>
                                                <td width="10%"><select name="store_area" id="store_area">
                                                        <option value="">--select--</option>
                                                        <option>E1</option>
                                                        <option>E2</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td><select name="category_code" id="category_code">
                                                        <option value="">--select--</option>
                                                        <option value="Engine">Engine</option>
                                                    </select></td>
                                                <td>Qty</td>
                                                <td><input type="text" name="qty" id="qty"></td>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td><input type="text" name="brand" id="brand"></td>
                                                <td></td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td><input type="submit" value="Search" name="btnsearch"/></td>
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



                                    <?php
                                    $con_s = getDBConnection();

                                    if (!isset($_POST['btnsearch'])) {

                                        //show item list
                                        $sql = "SELECT * FROM item";
                                        $result = mysqli_query($con_s, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // echo "id: " . $row["item_name"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["id"] ?></td>
                                                    <td><?php echo $row["item_name"] ?></td>
                                                    <td><?php echo $row["category_code"] ?></td>
                                                    <td><span class="btn-primary"> <?php echo $row["store_area"] ?> </span>&nbsp;</td>
                                                    <td><?php echo $row["qty"] ?></td>
                                                    <td><?php echo $row["description"] ?></td>
                                                    <td><a href="item-info.php">view</a></td>
                                                    <td></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                    } else if (isset($_POST['btnsearch'])) {
                                        


// do search 
                                        $item_name = $_POST['item_name'];
                                        $category_code = $_POST['category_code'];
                                        $brand = $_POST['brand'];
                                        $qty = $_POST['qty'];
                                        $store_area = $_POST['store_area'];

                                        $sql = "SELECT * FROM item ". dynamicWhereBuilder();
                                        echo 'SQL :'. $sql;
                                        
                                        
                                       
                                        
                                        $result = mysqli_query($con_s, $sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // echo "id: " . $row["item_name"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>";
                                                ?>
                                                <tr>
                                                    <td><?php echo $row["id"] ?></td>
                                                    <td><?php echo $row["item_name"] ?></td>
                                                    <td><?php echo $row["category_code"] ?></td>
                                                    <td><span class="btn-primary"> <?php echo $row["store_area"] ?> </span>&nbsp;</td>
                                                    <td><?php echo $row["qty"] ?></td>
                                                    <td><?php echo $row["description"] ?></td>
                                                    <td><a href="item-info.php">view</a></td>
                                                    <td></td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        
                                       
                                    }
                                    mysqli_close($con_s);

                                    function dynamicWhereBuilder() {
                                      
                                        $sql = "";
                                        $x = 0;
                                        
                                        $item_name = $_POST['item_name'];
                                        $category_code = $_POST['category_code'];
                                        $brand = $_POST['brand'];
                                        $qty = $_POST['qty'];
                                        $store_area = $_POST['store_area'];

                                        if ($_POST['item_name'] != "") {
                                            $sql = " item_name LIKE '%$item_name%' ";
                                            $x = 1;
                                        }
                                        
                                        if ($_POST['category_code'] != "") {
                                            if($x == 1){
                                              $sql = $sql . ' AND '  ;
                                            }
                                            $sql = $sql . " category_code = '$category_code' ";
                                            $x = 1;
                                        }
                                        
                                        if($sql!=''){
                                           $sql = ' WHERE ' . $sql; 
                                        }
                                        return $sql;
                                    }
                                    ?>






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
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)">
                    <input type="submit" value="Search Item"/>
                </div>
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
<?php include('menu-customer.php') ?>
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
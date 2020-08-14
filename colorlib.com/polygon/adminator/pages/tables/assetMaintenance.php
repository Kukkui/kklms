<!DOCTYPE html>   <?php include '../../../dbconnect.php'; ?>

<?php 
define('ROOT', 'localhost/kis');
include_once("../../../ImageUploadProject/StoreImage.php");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>SIMS REPORT</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
    <?php
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    $acctypecheck = $_SESSION['acctypepass'];
    $accidx = $_SESSION['accidpass'];

    $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "asset";
                                        $devicename="";
                                        $devicetype="";
                                        $amount="";
                                        $raminfo="";
                                        $mhzinfo="";
                                        $slot="";
                                        $currentram="";
                                        $maxram="";
                                        $building="";
                                        $floor="";
                                        $room="";
                                        $roomnum="";
                                        $type="";
                                        $rows=1;

                                        // Create connection
                                         
                                        $sql = "SELECT `purchase_date` FROM `hardware` WHERE 1";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {

                                                $paydate=$row["purchase_date"];
                                                $datetime1 = new DateTime();
                                                $datetime2 = new DateTime($paydate);
                                                $interval = $datetime1->diff($datetime2);
                                                $elapsed2 = $interval->format('%y');
                                                $sql2 = "UPDATE `hardware` set `age` ='$elapsed2' WHERE  `purchase_date`= '$paydate'";
                                                $result2 =  mysql_query($sql2);
                                                
                                                

                                            }

                                                  
                                            }
    ?>
    <!-- Page Loader -->
<?php include '../../../mainnav.php'; ?>


    <section class="content">

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>

                                MAINTENANCE DEVICE LIST
                            </h2>
                            
                        </div>
                        <div class="body">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">DEVICE-SPEC</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">DEVICE-LOCATION</a></li><!-- 
                                <li role="presentation"><a href="#messages" data-toggle="tab">PLACE-DEVICE</a></li>
                                <li role="presentation"><a href="#close" data-toggle="tab">CLOSE</a></li>
                                <li role="presentation"><a href="#close2" data-toggle="tab">CLOSEs</a></li> -->

                            </ul>
                            <!-- ///// -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <!-- paste here -->
                                    <div class="table-responsive"><!-- 
                                        <h5>HHELLO</h5> -->
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">

                                    <!-- table table-bordered table-striped table-hover dataTable js-exportable -->
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>DEVICE</th>
                                        <th>TYPE</th>
                                        <th>AMOUNT</th>
                                        <th>RAM(i)</th>
                                        <th>MHZ</th>
                                        <th>SLOT</th>
                                        <th>CRR RAM</th>
                                        <th>MAX RAM</th>
                                        <!--<th>BUILDING</th>
                                        <th>FLOOR</th>
                                        <th>ROOM NAME</th>
                                        <th>ROOM NUM</th>-->
                                        <th>AGE</th>
                                        <!--<th>USER TYPE</th>-->
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>DEVICE</th>
                                        <th>TYPE</th>
                                        <th>AMOUNT</th>
                                        <th>RAM(i)</th>
                                        <th>MHZ</th>
                                        <th>SLOT</th>
                                        <th>CRR RAM</th>
                                        <th>MAX RAM</th>
                                        <!--<th>BUILDING</th>
                                        <th>FLOOR</th>
                                        <th>ROOM NAME</th>
                                        <th>ROOM NUM</th>-->
                                        <th>AGE</th>
                                        <!--<th>USER TYPE</th>-->
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "asset";
                                        $devicename="";
                                        $devicetype="";
                                        $amount="";
                                        $raminfo="";
                                        $mhzinfo="";
                                        $slot="";
                                        $currentram="";
                                        $maxram="";
                                        $building="";
                                        $floor="";
                                        $room="";
                                        $roomnum="";
                                        $paydate="";
                                        $type="";
                                        $rows=1;

                                        // Create connection
                                         

                                        $sql = "SELECT * FROM hardware WHERE status='MAINTENANCE' AND  groups = 'HARDWARE'";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $idx=$row["id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn bg-cyan' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $devicename=$row["hw_name"];
                                                $devicetype=$row["hw_type"];
                                                $amount=$row["amount"];
                                                $raminfo=$row["ram_info"];
                                                $mhzinfo=$row["mhz_info"];
                                                $slot=$row["slot_number"];
                                                $currentram=$row["current_ram"];
                                                $maxram=$row["max_ram"];
                                                $building=$row["building"];
                                                $floor=$row["floor"];
                                                $room=$row["room_name"];
                                                $roomnum=$row["room_number"];
                                                $paydate=$row["purchase_date"];
                                                $type=$row["user_type"];
                                                // echo("<td>".."</td>");
                                                // <img width='100%' height='280px' src= <?php echo('/kis/ImageUploadProject/image.php?id=12)
                                                echo("<td>".$devicename."</td>");
                                                echo("<td>".$devicetype."</td>");
                                                echo("<td>".$amount."</td>");
                                                echo("<td>".$raminfo."</td>");
                                                echo("<td>".$mhzinfo."</td>");
                                                echo("<td>".$slot."</td>");
                                                echo("<td>".$currentram."</td>");
                                                echo("<td>".$maxram."</td>");
                                                #echo("<td>".$building."</td>");
                                                #echo("<td>".$floor."</td>");
                                                #echo("<td>".$room."</td>");
                                                #echo("<td>".$roomnum."</td>");
                                                #echo("<td>".$paydate."</td>");
                                                $datetime1 = new DateTime();
                                                $datetime2 = new DateTime($paydate);
                                                $interval = $datetime1->diff($datetime2);
                                                $elapsed = $interval->format('%yY/%mM/%dD');
                                                

                                                echo("<td>".$elapsed."</td>");
                                                #echo("<td>".$type."</td>");
                                                $rows++;

                                            }
                                            echo "</tr>";
                                        } else {
                                            echo " ";
                                        }
                                          
                                        ?>
                                </table>
                                </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                        <th>DEVICE</th>
                                        <th>TYPE</th>
                                        <th>AMOUNT</th>
                                        <!--<th>RAM(i)</th>
                                        <th>MHZ</th>
                                        <th>SLOT</th>
                                        <th>RAM</th>
                                        <th>MAX RAM</th>-->
                                        <th>BUILDING</th>
                                        <th>FLOOR</th>
                                        <th>ROOM NAME</th>
                                        <th>ROOM NUM</th>
                                        <!--<th>YEAR</th>
                                        <th>USER TYPE</th>-->
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                        <th>DEVICE</th>
                                        <th>TYPE</th>
                                        <th>AMOUNT</th>
                                        <!--<th>RAM(i)</th>
                                        <th>MHZ</th>
                                        <th>SLOT</th>
                                        <th>RAM</th>
                                        <th>MAX RAM</th>-->
                                        <th>BUILDING</th>
                                        <th>FLOOR</th>
                                        <th>ROOM NAME</th>
                                        <th>ROOM NUM</th>
                                        <!--<th>YEAR</th>
                                        <th>USER TYPE</th>-->
                                        </tr>
                                    </tfoot>
                                    
                                <tbody>
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "asset";
                                        $devicename="";
                                        $devicetype="";
                                        $amount="";
                                        $raminfo="";
                                        $mhzinfo="";
                                        $slot="";
                                        $currentram="";
                                        $maxram="";
                                        $building="";
                                        $floor="";
                                        $room="";
                                        $roomnum="";
                                        $paydate="";
                                        $type="";
                                        $rows=1;

                                        // Create connection
                                         

                                        $sql = "SELECT * FROM hardware WHERE status='MAINTENANCE' AND  groups='HARDWARE'";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $idx=$row["id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn bg-cyan' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $devicename=$row["hw_name"];
                                                $devicetype=$row["hw_type"];
                                                $amount=$row["amount"];
                                                $raminfo=$row["ram_info"];
                                                $mhzinfo=$row["mhz_info"];
                                                $slot=$row["slot_number"];
                                                $currentram=$row["current_ram"];
                                                $maxram=$row["max_ram"];
                                                $building=$row["building"];
                                                $floor=$row["floor"];
                                                $room=$row["room_name"];
                                                $roomnum=$row["room_number"];
                                                $paydate=$row["purchase_date"];
                                                $type=$row["user_type"];

                                                echo("<td>".$devicename."</td>");
                                                echo("<td>".$devicetype."</td>");
                                                echo("<td>".$amount."</td>");
                                                #echo("<td>".$raminfo."</td>");
                                                #echo("<td>".$mhzinfo."</td>");
                                                #echo("<td>".$slot."</td>");
                                                #echo("<td>".$currentram."</td>");
                                                #echo("<td>".$maxram."</td>");
                                                echo("<td>".$building."</td>");
                                                echo("<td>".$floor."</td>");
                                                echo("<td>".$room."</td>");
                                                echo("<td>".$roomnum."</td>");
                                                #echo("<td>".$paydate."</td>");
                                                #echo("<td>".$type."</td>");
                                                $rows++;


                                            }
                                            echo "</tr>";
                                        } else {
                                            echo " ";
                                        }
                                          
                                        ?>
                                    </table>
                                </div>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
        
  

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <script src="../../plugins/editable-table/mindmup-editabletable.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="../../plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/pages/ui/dialogs.js"></script>


    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>
    <script src="../../js/pages/tables/editable-table.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    

    <script type="text/javascript">
        function warntype(){
            alert("THIS TOOL CAN'T BE USE WITH YOUR ACCOUNT TYPE!");
        }
    </script>
    <script type="text/javascript">
        function toinfo(num){
            var idx = num;
            window.location.href = "/kis/admin1/hwinfo.php?idx="+idx+"&groups=hwtype";
        }
    </script>
    <script type="text/javascript">
        function toaccinfo(num){
            var idx = num;
            window.location.href = "/kis/admin1/accinfo.php?idx="+idx;
        }
    </script>
    <script type="text/javascript">
        function signout(){
            
            window.location.href = "/kis/admin1/index.php";
        }
    </script>
</body>

</html>

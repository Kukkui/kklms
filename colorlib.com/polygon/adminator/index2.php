<!DOCTYPE html> <?php include '../../../dbconnect.php'; ?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />



    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
    <?php
    session_start();
    
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    $acctypecheck = $_SESSION['acctypepass'];
    $accidx = $_SESSION['accidpass'];

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
                                        $result = mysqli_query($con,$sql);

                                        if (mysqli_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {

                                                $paydate=$row["purchase_date"];
                                                $datetime1 = new DateTime();
                                                $datetime2 = new DateTime($paydate);
                                                $interval = $datetime1->diff($datetime2);
                                                $elapsed2 = $interval->format('%y');
                                                $sql2 = "UPDATE `hardware` set `age` ='$elapsed2' WHERE  `purchase_date`= '$paydate'";
                                                $result2 =  mysqli_query($con,$sql2);
                                                
                                                

                                            }

                                                 
                                            }

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
                                     
                                       
                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE groups='HARDWARE') AS totalhardware , (SELECT COUNT(*) FROM hardware WHERE groups='ACCESSORY') AS totalaccessory,( SELECT COUNT(*) FROM hardware WHERE groups LIKE '%COMPONENT%') AS totalcompo";
                                        $result = mysqli_query($con,$sql);

                                        if (mysqli_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                $tthardware = $row["totalhardware"];
                                                $ttaccessory = $row["totalaccessory"];
                                                $ttcompo = $row["totalcompo"];
                                                
                                        }} else {
                                            echo " ";
                                        }

                                         

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "account";
                                        
                                     
                                        $sql = "SELECT( SELECT COUNT(*) FROM kisacc) AS totalacc";
                                        $result = mysqli_query($con,$sql);

                                        if (mysqli_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                $ttacc = $row["totalacc"];
                                                
                                        }} else {
                                            echo " ";
                                        }

                                         
                                    
    ?>
    <!-- Page Loader -->
    <?php include '../mainnav.php'; ?>


    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL ASSET</div>
                            <div class="number count-to" data-from="0" data-to=<?php echo($tthardware); ?> data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">ACCESSORY</div>
                            <div class="number count-to" data-from="0" data-to=<?php echo($ttaccessory); ?> data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">COMPONENT</div>
                            <div class="number count-to" data-from="0" data-to=<?php echo($ttcompo); ?> data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL MEMBER</div>
                            <div class="number count-to" data-from="0" data-to=<?php echo($ttacc); ?> data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                TICKET BOARD PREVIEW
                            </h2>
                            <?php 
                            if($acctypecheck!='USER'){
                                echo("<ul class='header-dropdown m-r--5'>
                                <li class='dropdown'>
                                    <a href='/kis/admin1/pages/ticket/replyticket.php'>
                                        <i class='material-icons'>more</i>
                                    </a>
                                    
                                </li>
                            </ul>");
                            }
                            else{
                                echo("");
                            }
                            
                            ?>
                        </div>


                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>TOPIC</th>
                                            <th>SENDER</th>
                                            <th>SENT DATE</th>
                                            <th>REPLY STATUS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
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
                                         

                                        $sql = "SELECT `sender`, `question_header`, `send_date`, `reply_content`FROM tkinfo ORDER BY `id` DESC";
                                        $result = mysqli_query($con,$sql);

                                        if (mysql_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $rows . "</th>";
                                                $sender=$row["sender"];
                                                $topic=$row["question_header"];
                                                $send_date=$row["send_date"];
                                                $reply_status=$row["reply_content"];
                                                

                                                #echo("<td>".$devicename."</td>");
                                                #echo("<td>".$devicetype."</td>");
                                                #echo("<td>".$amount."</td>");
                                                #echo("<td>".$raminfo."</td>");
                                                #echo("<td>".$mhzinfo."</td>");
                                                #echo("<td>".$slot."</td>");
                                                #echo("<td>".$currentram."</td>");
                                                #echo("<td>".$maxram."</td>");
                                                echo("<td>".$topic."</td>");
                                                echo("<td>".$sender."</td>");
                                                echo("<td>".$send_date."</td>");
                                                if($reply_status=='-'){
                                                     echo("<td>"."<span class='label bg-red'>"."IN-COMPLETE"."</span>"."</td>");
                                                }
                                                else{
                                                    echo("<td>"."<span class='label bg-green'>"."COMPLETE"."</span>"."</td>");
                                                }
                                                #echo("<td>".$paydate."</td>");
                                                #echo("<td>".$type."</td>");
                                                $rows++;
                                                if($rows>5){
                                                    break;
                                                }

                                            }
                                            echo "</tr>";
                                        } else {
                                            echo " ";
                                        }
                                         
                                        ?>
                                        <!-- 

                                        <tr>
                                            <td>1</td>
                                            <td>Task A</td>
                                            <td><span class="label bg-green">Doing</span></td>
                                            <td><?php echo($accname); ?></td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Task B</td>
                                            <td><span class="label bg-blue">To Do</span></td>
                                            <td><?php echo($accname); ?></td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Task C</td>
                                            <td><span class="label bg-light-blue">On Hold</span></td>
                                            <td><?php echo($accname); ?></td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Task D</td>
                                            <td><span class="label bg-orange">Wait Approvel</span></td>
                                            <td><?php echo($accname); ?></td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Task E</td>
                                            <td>
                                                <span class="label bg-red">Suspended</span>
                                            </td>
                                            <td><?php echo($accname); ?></td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <!-- <div class="card">
                            
                


                            <div class="body">
                                <div id="real_time_chart" class="dashboard-flot-chart"></div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- #END# CPU Usage -->
                
            <div class="row clearfix">
                <!-- Task Info -->
                

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                DEVICE CATEGORIES CHART
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="/kis/admin1/pages/tables/asset6.php">
                                        <i class="material-icons">more</i>
                                    </a>
                                    

                                </li>
                            </ul>
                        </div>
                        <div class="body">
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
                                     
                                       

                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE groups='HARDWARE' AND hw_type='COMPUTER') AS computers , (SELECT COUNT(*) FROM hardware WHERE groups='HARDWARE' AND hw_type='MONITOR') AS monitors, (SELECT COUNT(*) FROM hardware WHERE groups='HARDWARE' AND hw_type='PRINTER') AS printers, (SELECT COUNT(*) FROM hardware WHERE groups='HARDWARE' AND hw_type='SCANNER') AS scanners, (SELECT COUNT(*) FROM hardware WHERE groups='HARDWARE' AND hw_type='PROJECTOR') AS projectors, (SELECT COUNT(*) FROM hardware WHERE groups='HARDWARE' AND hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER') AS others";
                                        $result = mysqli_query($con,$sql);;

                                        if (mysql_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                $computersx = $row["computers"];
                                                $monitorsx = $row["monitors"];
                                                $printersx = $row["printers"];
                                                $scannersx = $row["scanners"];
                                                $projectorsx = $row["projectors"];
                                                $othersx=$row["others"];
                                        }} else {
                                            echo " ";
                                        }

                                         
                                        ?>
                                    <div id="chart_div" ></div>
                                    
                                    <!-- paste here -->
                                    
                            </div>
                        </div>
                            </div>
                <!-- #END# Task Info -->
                <!-- Browser Usage -->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                ACCESSORY CATEGORIES CHART
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="/kis/admin1/pages/tables/accessory6.php">
                                        <i class="material-icons">more</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
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
                                     
                                       
                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE groups='ACCESSORY' AND hw_type='EARPHONE') AS earphone , (SELECT COUNT(*) FROM hardware WHERE groups='ACCESSORY' AND hw_type='KEYBOARD') AS keyboard, (SELECT COUNT(*) FROM hardware WHERE groups='ACCESSORY' AND hw_type='MOUSE') AS mouse, (SELECT COUNT(*) FROM hardware WHERE groups='ACCESSORY' AND hw_type='SPEAKERS') AS speaker, (SELECT COUNT(*) FROM hardware WHERE groups='ACCESSORY' AND hw_type='MICROPHONE') AS microphone, (SELECT COUNT(*) FROM hardware WHERE groups='ACCESSORY' AND hw_type!='EARPHONE' AND hw_type!='KEYBOARD' AND hw_type!='MOUSE' AND hw_type!='SPEAKERS' AND hw_type!='MICROPHONE') AS others";
                                        $result = mysqli_query($con,$sql);;

                                        if (mysqli_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                $earphonex = $row["earphone"];
                                                $keyboardx = $row["keyboard"];
                                                $mousex = $row["mouse"];
                                                $speakerx = $row["speaker"];
                                                $microphonex = $row["microphone"];
                                                $othersx2=$row["others"];
                                        }} else {
                                            echo " ";
                                        }

                                         
                                        ?>
                                    <div id="chart_div2" ></div>
                                    
                                    <!-- paste here -->
                                    
                            </div>
                        </div>
                            </div>


<div class="row clearfix">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>RECENTLY UPDATE LOG / 25 LISTS PREVIEW</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                        <th>LIST</th>
                                        
                                        <th>DATE</th>
                                        <th>TIME</th>
                                        <th>ACC</th>
                                        <!--<th>DEVICE</th>
                                        <th>TYPE</th>
                                        <th>AMOUNT</th>
                                        <th>RAM(i)</th>
                                        <th>MHZ</th>
                                        <th>SLOT</th>
                                        <th>CRR RAM</th>
                                        <th>MAX RAM</th>
                                        <th>BUILDING</th>
                                        <th>FLOOR</th>
                                        <th>ROOM NAME</th>
                                        <th>ROOM NUM</th>
                                        <th>FROM YEAR</th>
                                        <th>USER TYPE</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
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
                                        $acc="";
                                        $date="";
                                        $time="";

                                        // Create connection
                                         

                                        $sql = "SELECT * FROM hardwares ORDER BY `id` DESC";
                                        $result = mysqli_query($con,$sql);

                                        if (mysqli_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<th scope='row'>" . $rows . "</th>";
                                                $acc=$row["account"];
                                                $date=$row["date"];
                                                $time=$row["time"];
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
                                                


                                                echo("<td>".$date."</td>");
                                                echo("<td>".$time."</td>");
                                                echo("<td>".$acc."</td>");
                                                /*
                                                echo("<td>".$devicename."</td>");
                                                echo("<td>".$devicetype."</td>");
                                                echo("<td>".$amount."</td>");
                                                echo("<td>".$raminfo."</td>");
                                                echo("<td>".$mhzinfo."</td>");
                                                echo("<td>".$slot."</td>");
                                                echo("<td>".$currentram."</td>");
                                                echo("<td>".$maxram."</td>");
                                                echo("<td>".$building."</td>");
                                                echo("<td>".$floor."</td>");
                                                echo("<td>".$room."</td>");
                                                echo("<td>".$roomnum."</td>");
                                                echo("<td>".$paydate."</td>");
                                                echo("<td>".$type."</td>");
                                                */
                                                $rows++;
                                                if($rows>25){
                                                    break;
                                                }

                                            }
                                            echo "</tr>";
                                        } else {
                                            echo " ";
                                        }
                                        
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->


            </div>
        </div>
    </section>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
    <script type="text/javascript">
        function warntype(){
            alert("THIS TOOL CAN'T BE USE WITH YOUR ACCOUNT TYPE!");
        }
    </script>
    <script type="text/javascript">
        function toinfo(num){
            var idx = num;
            window.location.href = "/kis/admin1/accinfo.php?idx="+idx;
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart2);


  function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['COMPUTER', <?php echo($computersx) ?> ],
          ['MONITOR', <?php echo($monitorsx) ?> ],
          ['PRINTER', <?php echo($printersx) ?> ],
          ['PROJECTOR', <?php echo($projectorsx) ?> ],
          ['SCANNER', <?php echo($scannersx) ?> ],
          ['OTHERS', <?php echo($othersx) ?> ]
        ]);

        // Set chart options
        var options = {title : 'RATIO IN PERCENTAGE','height':200};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
      function drawChart2() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['MOUSE', <?php echo($mousex) ?> ],
          ['KEYBOARD', <?php echo($keyboardx) ?> ],
          ['EARPHONE', <?php echo($earphonex) ?> ],
          ['SPEAKER', <?php echo($speakerx) ?> ],
          ['MICROPHONE', <?php echo($microphonex) ?> ],
          ['OTHERS', <?php echo($othersx2) ?> ]
        ]);

        // Set chart options
        var options = {title : 'RATIO IN PERCENTAGE','height':200};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }

    </script>
</body>

</html>

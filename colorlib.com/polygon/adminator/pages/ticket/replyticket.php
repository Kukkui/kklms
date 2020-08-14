<!DOCTYPE html> <?php include '../../../dbconnect.php'; ?>
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
    ?>
    <!-- Page Loader -->
     <?php include '../../../mainnav.php'; ?>    <section class="content">

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                Q/A TICKET
                            </h2>
                            
                        </div>
                        <div class="body">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">TICKET-LIST</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">AWAITING</a></li>
                                <li role="presentation"><a href="#messages" data-toggle="tab">CLOSE</a></li>

                            </ul>
                            <!-- ///// -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <!-- paste here -->
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SENDER</th>
                                        <th>TOPIC</th>
                                        <th>CONTENT</th>
                                        <th>SEND-DATE</th>
                                        <th>SEND-TO</th>
                                        <th>REPLY-CONTENT</th>
                                        <th>REPLY-BY</th>
                                        <th>DATE-REPLY</th>
                                </thead>
                                <tbody>
                                    <?php
                                        
                                        

                                        // Create connection
                                         

                                        $sql = "SELECT * FROM `tkinfo` WHERE 1 ORDER BY `id` DESC";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $idx=$row["id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn bg-cyan' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $sender=$row["sender"];
                                                $qheader=$row["question_header"];
                                                $qcontent=$row["question_content"];
                                                $sdate=$row["send_date"];
                                                $sto=$row["send_to"];
                                                $rcontent=$row["reply_content"];
                                                $rby=$row["reply_by"];
                                                $rdate=$row["reply_date"];
                                                

                                                echo("<td>".$sender."</td>");
                                                echo("<td>".$qheader."</td>");
                                                echo("<td>".$qcontent."</td>");
                                                echo("<td>".$sdate."</td>");
                                                echo("<td>".$sto."</td>");
                                                echo("<td>".$rcontent."</td>");
                                                echo("<td>".$rby."</td>");
                                                echo("<td>".$rdate."</td>");
                                                // $datetime1 = new DateTime();
                                                // $datetime2 = new DateTime($paydate);
                                                // $interval = $datetime1->diff($datetime2);
                                                // $elapsed = $interval->format('%yY/%mM/%dD');
                                                

                                                // echo("<td>".$elapsed."</td>");
                                                #echo("<td>".$type."</td>");
                                                

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
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SENDER</th>
                                        <th>TOPIC</th>
                                        <th>CONTENT</th>
                                        <th>SEND-DATE</th>
                                        <th>SEND-TO</th>
                                        <th>REPLY-CONTENT</th>
                                        <th>REPLY-BY</th>
                                        <th>DATE-REPLY</th>
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
                                         

                                        $sql = "SELECT * FROM `tkinfo` WHERE reply_content = '-'";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                               $idx=$row["id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn bg-cyan' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $sender=$row["sender"];
                                                $qheader=$row["question_header"];
                                                $qcontent=$row["question_content"];
                                                $sdate=$row["send_date"];
                                                $sto=$row["send_to"];
                                                $rcontent=$row["reply_content"];
                                                $rby=$row["reply_by"];
                                                $rdate=$row["reply_date"];
                                                

                                                echo("<td>".$sender."</td>");
                                                echo("<td>".$qheader."</td>");
                                                echo("<td>".$qcontent."</td>");
                                                echo("<td>".$sdate."</td>");
                                                echo("<td>".$sto."</td>");
                                                echo("<td>".$rcontent."</td>");
                                                echo("<td>".$rby."</td>");
                                                echo("<td>".$rdate."</td>");
                                                // $datetime1 = new DateTime();
                                                // $datetime2 = new DateTime($paydate);
                                                // $interval = $datetime1->diff($datetime2);
                                                // $elapsed = $interval->format('%yY/%mM/%dD');
                                                

                                                // echo("<td>".$elapsed."</td>");
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
                                <div role="tabpanel" class="tab-pane fade" id="messages">
                                    <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SENDER</th>
                                        <th>TOPIC</th>
                                        <th>CONTENT</th>
                                        <th>SEND-DATE</th>
                                        <th>SEND-TO</th>
                                        <th>REPLY-CONTENT</th>
                                        <th>REPLY-BY</th>
                                        <th>DATE-REPLY</th>
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
                                         

                                        $sql = "SELECT * FROM `tkinfo` WHERE reply_content != '-'";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result)) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $idx=$row["id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn bg-cyan' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $sender=$row["sender"];
                                                $qheader=$row["question_header"];
                                                $qcontent=$row["question_content"];
                                                $sdate=$row["send_date"];
                                                $sto=$row["send_to"];
                                                $rcontent=$row["reply_content"];
                                                $rby=$row["reply_by"];
                                                $rdate=$row["reply_date"];
                                                

                                                echo("<td>".$sender."</td>");
                                                echo("<td>".$qheader."</td>");
                                                echo("<td>".$qcontent."</td>");
                                                echo("<td>".$sdate."</td>");
                                                echo("<td>".$sto."</td>");
                                                echo("<td>".$rcontent."</td>");
                                                echo("<td>".$rby."</td>");
                                                echo("<td>".$rdate."</td>");
                                                // $datetime1 = new DateTime();
                                                // $datetime2 = new DateTime($paydate);
                                                // $interval = $datetime1->diff($datetime2);
                                                // $elapsed = $interval->format('%yY/%mM/%dD');
                                                

                                                // echo("<td>".$elapsed."</td>");
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

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    <script type="text/javascript">
        function toinfo(num){
            var idx = num;
            window.location.href = "/kis/admin1/tkinfo.php?idx="+idx;
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
    <script type="text/javascript">
        function warntype(){
            alert("THIS TOOL CAN'T BE USE WITH YOUR ACCOUNT TYPE!");
        }
    </script>
</body>

</html>

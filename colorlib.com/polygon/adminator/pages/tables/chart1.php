<!DOCTYPE html>   <?php include '../../../dbconnect.php'; ?>
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

<style type="text/css">
    
    table, th, td {
   border: 3px solid green;
   padding: 7px;
}
</style>
   
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
  <?php include '../../../mainnav.php'; ?>


    <section class="content">

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                DEVICE CATEGORIES CHART
                            </h2>
                            
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

                                        
                                         
                                       

                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE hw_type='COMPUTER' AND age>='5') AS computers , (SELECT COUNT(*) FROM hardware WHERE hw_type='MONITOR' AND age>='5') AS monitors, (SELECT COUNT(*) FROM hardware WHERE hw_type='PRINTER' AND age>='5') AS printers, (SELECT COUNT(*) FROM hardware WHERE hw_type='SCANNER' AND age>='5') AS scanners, (SELECT COUNT(*) FROM hardware WHERE hw_type='PROJECTOR' AND age>='5') AS projectors, (SELECT COUNT(*) FROM hardware WHERE hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER' AND age>='5') AS others";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $computers5 = $row["computers"];
                                                $monitors5 = $row["monitors"];
                                                $printers5 = $row["printers"];
                                                $scanners5 = $row["scanners"];
                                                $projectors5 = $row["projectors"];
                                                $others5=$row["others"];
                                        }} else {
                                            echo " ";
                                        }
                                        


                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE hw_type='COMPUTER' AND age='4') AS computers , (SELECT COUNT(*) FROM hardware WHERE hw_type='MONITOR' AND age='4') AS monitors, (SELECT COUNT(*) FROM hardware WHERE hw_type='PRINTER' AND age='4') AS printers, (SELECT COUNT(*) FROM hardware WHERE hw_type='SCANNER' AND age='4') AS scanners, (SELECT COUNT(*) FROM hardware WHERE hw_type='PROJECTOR' AND age='4') AS projectors, (SELECT COUNT(*) FROM hardware WHERE hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER' AND age='4') AS others";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $computers4 = $row["computers"];
                                                $monitors4 = $row["monitors"];
                                                $printers4 = $row["printers"];
                                                $scanners4 = $row["scanners"];
                                                $projectors4 = $row["projectors"];
                                                $others4=$row["others"];
                                        }} else {
                                            echo " ";
                                        }
                                        


                                         
                                        

                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE hw_type='COMPUTER' AND age='3') AS computers , (SELECT COUNT(*) FROM hardware WHERE hw_type='MONITOR' AND age='3') AS monitors, (SELECT COUNT(*) FROM hardware WHERE hw_type='PRINTER' AND age='3') AS printers, (SELECT COUNT(*) FROM hardware WHERE hw_type='SCANNER' AND age='3') AS scanners, (SELECT COUNT(*) FROM hardware WHERE hw_type='PROJECTOR' AND age='3') AS projectors, (SELECT COUNT(*) FROM hardware WHERE hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER' AND age='3') AS others";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $computers3 = $row["computers"];
                                                $monitors3 = $row["monitors"];
                                                $printers3 = $row["printers"];
                                                $scanners3 = $row["scanners"];
                                                $projectors3 = $row["projectors"];
                                                $others3=$row["others"];
                                        }} else {
                                            echo " ";
                                        }
                                        


                                         
                                        

                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE hw_type='COMPUTER' AND age='2') AS computers , (SELECT COUNT(*) FROM hardware WHERE hw_type='MONITOR' AND age='2') AS monitors, (SELECT COUNT(*) FROM hardware WHERE hw_type='PRINTER' AND age='2') AS printers, (SELECT COUNT(*) FROM hardware WHERE hw_type='SCANNER' AND age='2') AS scanners, (SELECT COUNT(*) FROM hardware WHERE hw_type='PROJECTOR' AND age='2') AS projectors, (SELECT COUNT(*) FROM hardware WHERE hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER' AND age='2') AS others";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $computers2 = $row["computers"];
                                                $monitors2 = $row["monitors"];
                                                $printers2 = $row["printers"];
                                                $scanners2 = $row["scanners"];
                                                $projectors2 = $row["projectors"];
                                                $others2=$row["others"];
                                        }} else {
                                            echo " ";
                                        }
                                        


                                         
                                        

                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE hw_type='COMPUTER' AND age='1') AS computers , (SELECT COUNT(*) FROM hardware WHERE hw_type='MONITOR' AND age='1') AS monitors, (SELECT COUNT(*) FROM hardware WHERE hw_type='PRINTER' AND age='1') AS printers, (SELECT COUNT(*) FROM hardware WHERE hw_type='SCANNER' AND age='1') AS scanners, (SELECT COUNT(*) FROM hardware WHERE hw_type='PROJECTOR' AND age='1') AS projectors, (SELECT COUNT(*) FROM hardware WHERE hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER' AND age='1') AS others";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $computers1 = $row["computers"];
                                                $monitors1 = $row["monitors"];
                                                $printers1 = $row["printers"];
                                                $scanners1 = $row["scanners"];
                                                $projectors1 = $row["projectors"];
                                                $others1=$row["others"];
                                        }} else {
                                            echo " ";
                                        }


                                         
                                        

                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE hw_type='COMPUTER' AND age='0') AS computers , (SELECT COUNT(*) FROM hardware WHERE hw_type='MONITOR' AND age='0') AS monitors, (SELECT COUNT(*) FROM hardware WHERE hw_type='PRINTER' AND age='0') AS printers, (SELECT COUNT(*) FROM hardware WHERE hw_type='SCANNER' AND age='0') AS scanners, (SELECT COUNT(*) FROM hardware WHERE hw_type='PROJECTOR' AND age='0') AS projectors, (SELECT COUNT(*) FROM hardware WHERE hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER' AND age='0') AS others";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $computers0 = $row["computers"];
                                                $monitors0 = $row["monitors"];
                                                $printers0 = $row["printers"];
                                                $scanners0 = $row["scanners"];
                                                $projectors0 = $row["projectors"];
                                                $others0=$row["others"];
                                        }} else {
                                            echo " ";
                                        }


                                         
                                        

                                        $sql = "SELECT( SELECT COUNT(*) FROM hardware WHERE hw_type='COMPUTER') AS computers , (SELECT COUNT(*) FROM hardware WHERE hw_type='MONITOR') AS monitors, (SELECT COUNT(*) FROM hardware WHERE hw_type='PRINTER') AS printers, (SELECT COUNT(*) FROM hardware WHERE hw_type='SCANNER') AS scanners, (SELECT COUNT(*) FROM hardware WHERE hw_type='PROJECTOR') AS projectors, (SELECT COUNT(*) FROM hardware WHERE hw_type!='COMPUTER' AND hw_type!='MONITOR' AND hw_type!='PRINTER' AND hw_type!='PROJECTOR' AND hw_type!='SCANNER') AS others";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
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
                                    <!-- paste here -->
                                    
                                    <table>
                                        <tr>

                                                <td><div id="chart_div" ></div></td>
                                                <td>
                                            <div class='content'>
                                            <?php echo "<button type='button' style='margin-top:20px;' class='btn bg-cyan btn-block btn-sm waves-effect' onclick='toinfo(".")'>COMPUTER : ".$computersx."</button>";

                                             echo "<button type='button' class='btn bg-cyan btn-block btn-sm waves-effect' onclick='toinfo(".")'>MONITOR : ".$monitorsx."</button>";

                                              echo "<button type='button'  class='btn bg-cyan btn-block btn-sm waves-effect' onclick='toinfo(".")'>PRINTER : ".$printersx."</button>";

                                               echo "<button type='button' class='btn bg-cyan btn-block btn-sm waves-effect' onclick='toinfo(".")'>SCANNER : ".$scannersx."</button>";

                                                echo "<button type='button' class='btn bg-cyan btn-block btn-sm waves-effect' onclick='toinfo(".")'>PROJECTOR : ".$projectorsx."</button>";

                                                 echo "<button type='button'  class='btn bg-cyan btn-block btn-sm waves-effect' onclick='toinfo(".")'>OTHERS : ".$othersx."</button>";
                                            ?>

                                        </div>
                                    </td>
                                    </tr>
                                           </table>
                                           
                                           <!-- <td>BBB</td> -->
                                            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="col-md-3">
                                                <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                                <label for="basic_checkbox_2">Filled In</label>
                                                </div>
                                                <div class="col-md-3">
                                                <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                                <label for="basic_checkbox_2">Filled In</label>
                                                </div>
                                                <div class="col-md-3">
                                                <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                                <label for="basic_checkbox_2">Filled In</label>
                                                </div>
                                                <div class="col-md-3">
                                                <input type="checkbox" id="basic_checkbox_2" class="filled-in" checked />
                                                <label for="basic_checkbox_2">Filled In</label>
                                                </div>
                                            </div>
                                           </td> -->


                                       

<!--   <body>
    Div that will hold the pie chart
    
  </body> -->

                                
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
        

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
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);
      google.charts.setOnLoadCallback(drawChart);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
         ['Year', 'COMPUTER', 'MONITOR', 'PRINTER', 'PROJECTOR', 'SCANNER','OTHERS'],
         ['0-1',  <?php echo($computers0) ?>,      <?php echo($monitors0) ?>,         <?php echo($printers0) ?>,             <?php echo($projectors0) ?>,          <?php echo($scanners0) ?>,          <?php echo($others0) ?>],
         ['1-2',  <?php echo($computers1) ?>,      <?php echo($monitors1) ?>,         <?php echo($printers1) ?>,             <?php echo($projectors1) ?>,          <?php echo($scanners1) ?>,          <?php echo($others1) ?>],
         ['2-3',  <?php echo($computers2) ?>,      <?php echo($monitors2) ?>,         <?php echo($printers2) ?>,             <?php echo($projectors2) ?>,          <?php echo($scanners2) ?>,          <?php echo($others2) ?>],
         ['3-4',  <?php echo($computers3) ?>,      <?php echo($monitors3) ?>,         <?php echo($printers3) ?>,             <?php echo($projectors3) ?>,          <?php echo($scanners3) ?>,          <?php echo($others3) ?>],
         ['4-5',  <?php echo($computers4) ?>,      <?php echo($monitors4) ?>,         <?php echo($printers4) ?>,             <?php echo($projectors4) ?>,          <?php echo($scanners4) ?>,          <?php echo($others4) ?>],
         ['5+',  <?php echo($computers5) ?>,      <?php echo($monitors5) ?>,         <?php echo($printers5) ?>,             <?php echo($projectors5) ?>,          <?php echo($scanners5) ?>,          <?php echo($others5) ?>]
      ]);

    var options = {
      title : 'Device Age in Each Period',
      width:900,height:500,
      vAxis: {title: 'AMOUNT'},
      hAxis: {title: 'AGE-YEARS'},
      seriesType: 'bars',
      series: {5: {type: 'line'}}
    };

    var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
  }

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
        var options = {title : 'RATIO IN PERCENTAGE','width':600,'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

    </script>


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
        function signout(){
            
            window.location.href = "/kis/admin1/index.php";
        }
    </script>
    <script type="text/javascript">
        function toaccinfo(num){
            var idx = num;
            window.location.href = "/kis/admin1/accinfo.php?idx="+idx;
        }
    </script>
</body>

</html>

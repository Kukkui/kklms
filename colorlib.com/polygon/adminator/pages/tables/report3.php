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
    <link href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
    <link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="../../css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="dist/tablesaw.css">
    <!-- <link rel="stylesheet" href="demo.css"> -->
    <link rel="stylesheet" href="//filamentgroup.github.io/demo-head/demohead.css">
    <script>
    TablesawConfig = {
        getColumnToggleLabelTemplate: function( text ) {
            
            return "<div class='input-group input-group-lg' style='margin-bottom:-15px;  padding-left:5px;' ><span class='input-group-addon'><input type='checkbox' class='filled-in' id='"+text+"'><label for='"+text+"' style='float:left;'>"+text+"</label></input></span></div>";

        }
    };
    </script>
    <script src="dist/tablesaw.js"></script>
    <script src="dist/tablesaw-init.js"></script>
    <script src="//filamentgroup.github.io/demo-head/loadfont.js"></script>
<style type="text/css">
        
        .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 30% auto; /* 15% from the top and centered */
    padding: 0px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close3 {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close4 {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Modal Body */
.modal-body {padding: 2px 16px;}

/* Modal Footer */
.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: 20%;
    padding: 0;
    border: 0px solid #888;
    width: 60%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@keyframes animatetop {
    from {top: -300px; opacity: 0}
    to {top: 0; opacity: 1}
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.close3:hover,
.close3:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.close4:hover,
.close4:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
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
    $array = array();
    $rows="";
    echo "<script>";
echo "var temp=[]";
echo "</script>";

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
                                COMPONENTS LIST REPORT
                            </h2>
                            
                        </div>
                        <div class="body">
                                
                            <!-- ///// -->
                            
                                    <!-- paste here -->
                                    
    <!-- <section class="content" style="margin-bottom: -40px">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            -->
            


<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
        
   <section class="">
        <!-- <form action="/kis/admin1/pages/tables/bulkedit.php" method='POST'> -->

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                        <div class="body">
                            
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-blue-grey">
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                        <i class="material-icons">perm_contact_calendar</i>#EDIT INFORMATION
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <p>
                                        <b>DEVICE NAME</b>
                                    </p>
                                    <input type='text' value='-' id='hwname2' class='form-control show-tick' data-live-search='true' placeholder='UN-SET'/>
                                       
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>DEVICE TYPE</b>
                                    </p>
                                    <select id="hwtype2" onclick="send_hwtype()" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE">
                                        
                                        <?php
                                        echo("<option value='-'>UN-CHANGE</option>");
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "kis";
                                        $hw="";

                                        // Create connection
                                         

                                        $sql = " SELECT list FROM hwtype WHERE list!='-' AND list!='' GROUP BY list";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $hw=$row["list"];
                                                echo("<option value='".$hw."'>".$hw."</option>");
                                               


                                            }
                                        } else {
                                            echo("0");
                                        }
                                          
                                        ?>


                                      

                                       
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>BUILDING</b>
                                    </p>
                                    <input type="text" value="-" id="building2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>FLOOR</b>
                                    </p>
                                    <input type="text" value="-" id="floor2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

                                                <div class="col-md-3">
                                    <p>
                                        <b>R-NUM</b>
                                    </p>
                                    <input type="text" value="-" id="roomnum2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                                <div class="col-md-3">
                                    <p>
                                        <b>R-NAME</b>
                                    </p>
                                    <input type="text" value="-" id="roomname2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

                                <div class="col-md-12"><hr></div>

                                <div class="col-md-3">
                                    <p>
                                        <b>AMOUNT</b>
                                    </p>
                                    <input type="text" value="-" id="amount2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE" />
                                       
                                </div>
                                 <div class="col-md-3">
                                    <p>
                                        <b>RAM INFO</b>
                                    </p>
                                    <input type="text" value="-" id="raminfo2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>MHZ INFO</b>
                                    </p>
                                    <input type="text" value="-" id="mhzinfo2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>SLOT</b>
                                    </p>
                                    <input type="text" value="-" id="slot2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>CRR RAM</b>
                                    </p>
                                    <input type="text" value="-" id="crrram2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>MAX RAM</b>
                                    </p>
                                    <input type="text" value="-" id="maxram2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>PAY DATE</b>
                                    </p>
                                    <input type="text" value="-" id="paydate2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>AGE</b>
                                    </p>
                                    <input type="text" value="-" id="age2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <div style="float: left;"class="col-md-6">
                                    <p4>
                                        <b>USAGE TYPE</b>
                                    </p4>
                                    <select id="acctype2">
                                        <option>USER</option>
                                        <option>EDITOR</option>
                                        <option>ADMIN</option>
                                    </select>
                               
                                       
                                </div>
                                
                                

<button onclick="okay()" type="submit" id='okayid' style="float: right;" class='btn btn-info btn-lg'>SAVE</button>
</div>
<p id="bulkid">-</p>
                     
                            
            </div>

        </div>
        
    </div>
                                      
                
                        </section>

                        </p>

                        </div>
                    </div>


                            <!-- 
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
                        </div> -->



<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close3">&times;</span>
    <p>
        
   <section class="">
        <!-- <form action="/kis/admin1/pages/tables/bulkedit.php" method='POST'> -->

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                        <div class="body">
                            
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-blue-grey">
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                        <i class="material-icons">perm_contact_calendar</i>#DELETE INFORMATION
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <p>Delete all information by id in the list below...
                            
                            <p id="bulkid2">-</p>

<button onclick="okay2()" type="submit" id='okayid2' style="float: right;" class='btn btn-info btn-lg'>DELETE</button>
                </div>

            </div>

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

                        </p>

                        </div>
                    </div>


                        
<div id="myModal4" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close4">&times;</span>
    <p>
        
   <section class="">
        <!-- <form action="/kis/admin1/pages/tables/bulkedit.php" method='POST'> -->

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                        <div class="body">
                            
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="panel-group full-body" id="accordion_19" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-col-blue-grey">
                                            <div class="panel-heading" role="tab" id="headingOne_19">
                                                <h4 class="panel-title">
                                                    <a role="button" data-toggle="collapse" href="#collapseOne_19" aria-expanded="true" aria-controls="collapseOne_19">
                                                        <i class="material-icons">perm_contact_calendar</i>#ADD INFORMATION
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne_19" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne_19">
                                                <div class="panel-body">
                                                        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <p>
                                        <b>DEVICE NAME</b>
                                    </p>
                                    <input type="text" value="-" id="hwname3" class="form-control show-tick" data-live-search="true" placeholder="UN-SET"/>
                                       
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>DEVICE TYPE</b>
                                    </p>
                                    <select id="hwtype3"  class="form-control show-tick" data-live-search="true" placeholder="UN-SET">
                                        
                                        <?php
                                        echo("<option value='-'>UN-CHANGE</option>");
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "kis";
                                        $hw="";

                                        // Create connection
                                         

                                        $sql = " SELECT list FROM hwtype WHERE list!='-' AND list!='' GROUP BY list";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                $hw=$row["list"];
                                                echo("<option value='".$hw."'>".$hw."</option>");
                                               


                                            }
                                        } else {
                                            echo("0");
                                        }
                                          
                                        ?>


                                      

                                       
                                    </select>
                                
                                <div style="float:left;" class="col-md-4">
                                    <p>
                                        <b>DATE</b>
                                    </p>
                                    <select id="dd" class="col-md-12">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                        <option>13</option>
                                        <option>14</option>
                                        <option>15</option>
                                        <option>16</option>
                                        <option>17</option>
                                        <option>18</option>
                                        <option>19</option>
                                        <option>20</option>
                                        <option>21</option>
                                        <option>22</option>
                                        <option>23</option>
                                        <option>24</option>
                                        <option>25</option>
                                        <option>26</option>
                                        <option>27</option>
                                        <option>28</option>
                                        <option>29</option>
                                        <option>30</option>
                                        <option>31</option>


                                    </select>

                                </div>
                                <div style="float:left;" class="col-md-4">
                                    <p>
                                        <b>MONTH</b>
                                    </p>
                                    <select id="mm" class="col-md-12">
                                        <option>January</option>
                                        <option>February</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>August</option>
                                        <option>September</option>
                                        <option>October</option>
                                        <option>November</option>
                                        <option>December</option>
                                    </select>
                                    
                                       
                                </div>
                                <div style="float:left;" class="col-md-4">
                                    <p>
                                        <b>YEAR</b>
                                    </p>
                                    <select id="yyyy" class="col-md-12">
                                    <?php 
                                    $count=1980;
                                    for($count=1980;$count<2018;$count++){
                                        echo "<option>".$count."</option>";
                                    }
                                    ?>
                                    </select>  
                                </div>
                            </div>
                                <br>
                                <div class="col-md-3">
                                    <p>
                                        <b>BUILDING</b>
                                    </p>
                                    <input type="text" value="-" id="building3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>FLOOR</b>
                                    </p>
                                    <input type="text" value="-" id="floor3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

                                                <div class="col-md-3">
                                    <p>
                                        <b>R-NUM</b>
                                    </p>
                                    <input type="text" value="-" id="roomnum3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                                <div class="col-md-3">
                                    <p>
                                        <b>R-NAME</b>
                                    </p>
                                    <input type="text" value="-" id="roomname3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

                                <div class="col-md-12"><hr></div>

                                <div class="col-md-3">
                                    <p>
                                        <b>AMOUNT</b>
                                    </p>
                                    <input type="text" value="-" id="amount3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE" />
                                       
                                </div>
                                 <div class="col-md-3">
                                    <p>
                                        <b>RAM INFO</b>
                                    </p>
                                    <input type="text" value="-" id="raminfo3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>MHZ INFO</b>
                                    </p>
                                    <input type="text" value="-" id="mhzinfo3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>SLOT</b>
                                    </p>
                                    <input type="text" value="-" id="slot3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>CRR RAM</b>
                                    </p>
                                    <input type="text" value="-" id="crrram3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

 <div class="col-md-3">
                                    <p>
                                        <b>MAX RAM</b>
                                    </p>
                                    <input type="text" value="-" id="maxram3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <b>LINK</b>
                                    </p>
                                    <input type="text" value="-" id="link3" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <div style="float: left;"class="col-md-6">
                                    <p4>
                                        <b>USAGE TYPE</b>
                                    </p4>
                                    <select id="acctype">
                                        <option>USER</option>
                                        <option>EDITOR</option>
                                        <option>ADMIN</option>
                                    </select>
                               
                                       
                                </div>
                                
                                



</div>
<button onclick="okay3()" type="submit" id='okayid3' style="float: right;" class='btn btn-info btn-lg'>ADD</button>
<p id="bulkid">-</p>
                     
                            
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

                        </p>

                        </div>
                    </div> 

                        <div class="body">
                            
                            <div class="table-responsive tablesaw-overflow">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable tablesaw" data-tablesaw-mode="columntoggle">
                                    <thead>
                                    <tr>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">ID</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">DEVICE</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">TYPE</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">AMOUNT</th>
                                        <!-- <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">RAM(i)</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">MHZ</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">SLOT</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="10">RAM</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="9">MAXRAM</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="8">BUILDING</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="7">FLOOR</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="5">ROOM NAME</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">ROOM NUM</th> -->
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="3">FROM YEAR</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">AGE</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1">USER TYPE</th>
                                    </tr>
                                </thead>
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
                                         

                                        $sql = "SELECT id,hw_name,hw_type,amount,ram_info,mhz_info,slot_number,current_ram,max_ram,spec_link,building,floor,room_name,room_number,purchase_date,age,user_type FROM hardware WHERE hw_name != '' AND deploy_date='-' AND groups LIKE '%COMPONENT%'";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                echo "<tr>";
                                                
                                                $deviceid=$row["id"];
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
                                                $age=$row["age"];
                                                $type=$row["user_type"];

                                                echo "<th>".$deviceid."</th>";
                                                // "<span class='input-group-addon'><input type='checkbox' class='filled-in' id='".$deviceid."' onclick='myFunction2(".$deviceid.")'><label for='".$deviceid."'></label></span>"
                                                                                                
                                                // above ------> <button type='button' id='".$deviceid."' onclick='myFunction3(".$deviceid.")' class='btn btn-info btn-lg waves-effect' data-toggle='modal' data-target='#myModal'>"."<i class='material-icons'>extension</i></button>
                                                
                                                echo("<td>".$devicename."</td>");
                                                echo("<td>".$devicetype."</td>");
                                                echo("<td>".$amount."</td>");
                                                // echo("<td>".$raminfo."</td>");
                                                // echo("<td>".$mhzinfo."</td>");
                                                // echo("<td>".$slot."</td>");
                                                // echo("<td>".$currentram."</td>");
                                                // echo("<td>".$maxram."</td>");
                                                // echo("<td>".$building."</td>");
                                                // echo("<td>".$floor."</td>");
                                                // echo("<td>".$room."</td>");
                                                // echo("<td>".$roomnum."</td>");
                                                echo("<td>".$paydate."</td>");
                                                $datetime1 = new DateTime();
                                                $datetime2 = new DateTime($paydate);
                                                $interval = $datetime1->diff($datetime2);
                                                $elapsed = $interval->format('%yY/%mM/%dD');
                                                

                                                echo("<td>".$elapsed."</td>");
                                                echo("<td>".$type."</td>");
                                                $rows++;

                                            }
                                            echo "</tr>";
                                        } else {
                                            echo " ";
                                        }
                                          
                                        ?>

                                    </tbody>
                                </table>
                           
                   
                                
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


    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
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
    <script src="../../js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>

    <script type="text/javascript">

    function okay() {
    var str = temp.join(',');
    console.log(str);
    var hwname2,hwtype2,building2,floor2,roomnum2,roomname2,amount2,raminfo2,mhzinfo2,slot2,crrram2,maxram2,paydate2,age2 = "";
    var hwname2=document.getElementById("hwname2").value;
    var e = document.getElementById("hwtype2");
    var hwtype2 = e.options[e.selectedIndex].value;
    building2=document.getElementById("building2").value;
    floor2=document.getElementById("floor2").value;
    roomnum2=document.getElementById("roomnum2").value;
    roomname2=document.getElementById("roomname2").value;
    amount2=document.getElementById("amount2").value;
    raminfo2=document.getElementById("raminfo2").value;
    mhzinfo2=document.getElementById("mhzinfo2").value;
    slot2=document.getElementById("slot2").value;
    crrram2=document.getElementById("crrram2").value;
    maxram2=document.getElementById("maxram2").value;
    paydate2=document.getElementById("paydate2").value;
    age2=document.getElementById("age2").value;
    var j = document.getElementById("acctype2");
    var acctypex = j.options[j.selectedIndex].value;

    // str= str+building2+floor2+roomnum2+roomname2;


    document.getElementById("bulkid").innerHTML=str;
    window.location.href = "/kis/admin1/pages/tables/bulkedit.php?hwname2="+hwname2+"&hwtype2="+hwtype2+"&building2="+building2+"&floor2="+floor2+"&roomnum2="+roomnum2+"&roomname2="+roomname2+"&amount2="+amount2+"&raminfo2="+raminfo2+"&mhzinfo2="+mhzinfo2+"&slot2="+slot2+"&crrram2="+crrram2+"&maxram2="+maxram2+"&paydate2="+paydate2+"&age2="+age2+"&acctypex="+acctypex+"&okid="+str;

    // prompt(document.getElementById("hwtype").value);
    // prompt(document.getElementById("amount").value);
    // prompt(document.getElementById("raminfo").value);
}
function okay2() {
    
        var str = temp.join(',');
    console.log(str);
    var hwname2,hwtype2,building2,floor2,roomnum2,roomname2,amount2,raminfo2,mhzinfo2,slot2,crrram2,maxram2,paydate2,age2 = "";
    var hwname2=document.getElementById("hwname2").value;
    var e = document.getElementById("hwtype2");
    var hwtype2 = e.options[e.selectedIndex].value;
    building2=document.getElementById("building2").value;
    floor2=document.getElementById("floor2").value;
    roomnum2=document.getElementById("roomnum2").value;
    roomname2=document.getElementById("roomname2").value;
    amount2=document.getElementById("amount2").value;
    raminfo2=document.getElementById("raminfo2").value;
    mhzinfo2=document.getElementById("mhzinfo2").value;
    slot2=document.getElementById("slot2").value;
    crrram2=document.getElementById("crrram2").value;
    maxram2=document.getElementById("maxram2").value;
    paydate2=document.getElementById("paydate2").value;
    age2=document.getElementById("age2").value;


    // str= str+building2+floor2+roomnum2+roomname2;

    document.getElementById("bulkid").innerHTML=str;
    window.location.href = "/kis/admin1/pages/tables/bulkdelete.php?hwtype2="+hwtype2+"&building2="+building2+"&floor2="+floor2+"&roomnum2="+roomnum2+"&roomname2="+roomname2+"&amount2="+amount2+"&raminfo2="+raminfo2+"&mhzinfo2="+mhzinfo2+"&slot2="+slot2+"&crrram2="+crrram2+"&maxram2="+maxram2+"&paydate2="+paydate2+"&age2="+age2+"&okid="+str;
    // prompt(document.getElementById("hwtype").value);
    // prompt(document.getElementById("amount").value);
    // prompt(document.getElementById("raminfo").value);
    
    
}
function okay3() {
    
    var str = temp.join(',');
    console.log(str);
    var hwname2,hwtype2,building2,floor2,roomnum2,roomname2,amount2,raminfo2,mhzinfo2,slot2,crrram2,maxram2,paydate2,age2,link2 = "";
    
    var hwname2=document.getElementById("hwname3").value;
    var f = document.getElementById("dd");
    var dds = f.options[f.selectedIndex].value;
    var g = document.getElementById("mm");
    var mms = g.options[g.selectedIndex].value;
    var h = document.getElementById("yyyy");
    var yyyys = h.options[h.selectedIndex].value;
    var i = document.getElementById("hwtype3");
    var hwtype2 = i.options[i.selectedIndex].value;
    var j = document.getElementById("acctype");
    var acctypex = j.options[j.selectedIndex].value;
    paydate2=yyyys+"-"+mms+"-"+dds;
    building2=document.getElementById("building3").value;
    floor2=document.getElementById("floor3").value;
    roomnum2=document.getElementById("roomnum3").value;
    roomname2=document.getElementById("roomname3").value;
    amount2=document.getElementById("amount3").value;
    raminfo2=document.getElementById("raminfo3").value;
    mhzinfo2=document.getElementById("mhzinfo3").value;
    slot2=document.getElementById("slot3").value;
    crrram2=document.getElementById("crrram3").value;
    maxram2=document.getElementById("maxram3").value;
    link2=document.getElementById("link3").value;

    // str= str+building2+floor2+roomnum2+roomname2;

    document.getElementById("bulkid").innerHTML=str;
    window.location.href = "/kis/admin1/pages/tables/bulkadd.php?hwname2="+hwname2+"&hwtype2="+hwtype2+"&building2="+building2+"&floor2="+floor2+"&roomnum2="+roomnum2+"&roomname2="+roomname2+"&amount2="+amount2+"&raminfo2="+raminfo2+"&mhzinfo2="+mhzinfo2+"&slot2="+slot2+"&crrram2="+crrram2+"&maxram2="+maxram2+"&paydate2="+paydate2+"&link2="+link2+"&acctypex="+acctypex;
    // prompt(paydate2);
    // prompt(document.getElementById("amount").value);
    // prompt(document.getElementById("raminfo").value);
    
    
}

</script>


<script>

function myFunction3(num) {
    
    alert(document.getElementById("mainTable").rows[num].cells.item(4).innerHTML,"ENTER");

}
function remove(array, element) {

    return array.filter(e => e !== element);
}

function getCheck(num) {
    
    alert(document.getElementById(num).value);

}

function myFunction2(num) {
    var check = temp.indexOf(num);
    if(check>=0){
        document.getElementById(num).innerHTML = "<i class='material-icons'>lock</i>";
        document.getElementById("myBtn2").innerHTML="EDIT";
        document.getElementById("myBtn3").innerHTML="DELETE";
        
        temp=remove(temp,num);
        if(temp.length>1){

        document.getElementById("myBtn2").innerHTML="BULK EDIT";
        document.getElementById("myBtn3").innerHTML="BULK DELETE";  
    }
    else{

        document.getElementById("myBtn2").innerHTML="EDIT";
        document.getElementById("myBtn3").innerHTML="DELETE";  
    }
    //     var nums=temp.length;
    //     for (i = 0; i < nums; i++) {

    //     alert(temp[i]);
    // }

    }
    else{
      document.getElementById(num).innerHTML = "<i class='material-icons'>verified_user</i>";

    temp.push(num);
    if(temp.length>1){

        document.getElementById("myBtn2").innerHTML="BULK EDIT";
        document.getElementById("myBtn3").innerHTML="BULK DELETE";  
    }
    else{

        document.getElementById("myBtn2").innerHTML="EDIT";
        document.getElementById("myBtn3").innerHTML="DELETE";  
    }
    //prompt(document.getElementById("mainTable").rows[num].cells.item(4).innerHTML,"ENTER");
    // var nums=temp.length;
    // for (i = 0; i < nums; i++) {
    
    // document.getElementById("bulkid").innerHTML=temp;
    // document.getElementById("bulkid2").innerHTML=temp;
    //alert(temp[i]);
    // }

    }
    var nums=temp.length;
    if(nums>0){
        for (i = 0; i < nums; i++) {
    
        document.getElementById("bulkid").innerHTML=temp;
        document.getElementById("bulkid2").innerHTML=temp;
        }
    }
    else{
        document.getElementById("bulkid").innerHTML="-";
        document.getElementById("bulkid2").innerHTML="-";
    }


}

var modal = document.getElementById('myModal2');

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

var modal4 = document.getElementById('myModal4');

// Get the button that opens the modal
var btn4 = document.getElementById("myBtn4");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];
// When the user clicks on the button, open the modal 
btn.onclick = function() {

    modal.style.display = "block";
}


btn3.onclick = function() {
    modal3.style.display = "block";
}

btn4.onclick = function() {
    modal4.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
span3.onclick = function() {
    modal3.style.display = "none";
}
span4.onclick = function() {
    modal4.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3 || event.target == modal || event.target == modal4) {

        modal.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
    }
}



</script>
<script type="text/javascript">
        function toinfo(num){
            var idx = num;
            window.location.href = "/kis/admin1/hwinfo.php?idx="+idx;
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

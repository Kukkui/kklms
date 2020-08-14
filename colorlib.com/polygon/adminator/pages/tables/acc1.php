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
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/kis/admin1/index2.php">KIS IT ASSET</a>
            </div>
            <!-- <!-- <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    
            </div>
        </div> 
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/kis/admin1/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo($accname) ?> </div>
                    
                    <div class="email"><?php echo($accemail) ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <?php
                                echo "<li><a href='javascript:toinfo(".$accidx.")'><i class='material-icons'>person</i>".$accidx."Profile</a></li>";
                            ?>
                            <li role="separator" class="divider"></li>
                            
                            <li><a href="javascript:signout();"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/kis/admin1/index2.php">
                            <i class="material-icons">home</i>
                            <span>DASHBOARD</span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">devices</i>
                            <span>ASSETS</span>
                        </a>
                        <ul class="ml-menu">
                            

                            
                            <!-- <li>
                                <a href="/kis/admin1/pages/tables/asset2.php">
                                    DEPLOY</a>
                                </a>
                            </li> -->
                            
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>DEVICE LIST</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetAll.php?">
                                            <span>ALL</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetActive.php?">
                                            <span>ACTIVE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetInactive.php?">
                                            <span>IN-ACTIVE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetLost.php">
                                            <span>LOST/STOLEN</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetMaintenance.php">
                                            <span>MAINTENANCE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetRemove.php">
                                            <span>ALREADY REMOVED</span>
                                        </a>
                                    </li>
                                    
                                    <!--<li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 2</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Menu Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Level - 3</span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span>Level - 4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>ACTION LIST</span>
                                </a>
                                <ul class="ml-menu">
                                    
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetDeploy.php">
                                            <span>DEPLOY</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetUnDeploy.php">
                                            <span>UN-DEPLOY</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/asset2Deploy.php">
                                            <span>READY DEPLOY</span>
                                        </a>
                                    </li>

                                    
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetArchive.php">
                                            <span>ALL ARCHIVED</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetPending.php">
                                            <span>ALL PENDING</span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="/kis/admin1/pages/tables/assetRequestable.php">
                                            <span>REQUESTABLE</span>
                                        </a>
                                    </li>

                                    <!--<li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 2</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Menu Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Level - 3</span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span>Level - 4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>GROUP FILTER</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/kis/admin1/pages/tables/asset3.php">
                                            AGE OF USE</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/asset6.php">
                                            DEVICE TYPE</a>
                                        </a>
                                    </li>
                                            
                                    <!--<li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 2</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Menu Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Level - 3</span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span>Level - 4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                                    
                            
                            <!-- <li>
                                <a href="/kis/admin1/pages/tables/asset4.php">
                                    INFO EDIT/DELETE</a>
                                </a>
                            </li> -->

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>ASSET TOOLS</span>
                                </a>
                                <ul class="ml-menu">
                                   
                                    <?php 

                                    if($acctypecheck != 'USER'){
                                        echo("<li>
                                                            <a href='/kis/admin1/add1.php'>ADD</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='/kis/admin1/pages/tables/edit1.php'>
                                                    EDIT</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='/kis/admin1/pages/tables/asset5.php'>
                                                    ADD/EDIT/DELETE</a>
                                                </a>
                                            </li>
                                            ");
                                    }
                                    else{

                                        echo("<li>
                                                            <a href='#' onclick='warntype();'>ADD</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='#' onclick='warntype();'>
                                                    EDIT</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='#' onclick='warntype();'>
                                                    ADD/EDIT/DELETE</a>
                                                </a>
                                            </li>
                                            ");
                                    }


                                    ?>
                                
                                </ul>
                            </li>
                            
                        </ul>
                    </li>
                    <!-- <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">gavel</i>
                            <span>LICENSE</span>
                        </a>
                        <ul class="ml-menu">
                            

                            <li>
                                <a href="/kis/admin1/pages/tables/report1.php">
                                    ACTIVITY REPORT</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/ticket/replyticket.php">
                                    DEVICE LOG</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/ticket/replyticket.php">
                                    CUSTOM ASSET REPORT</a>
                                </a>
                            </li>
                            
                        </ul>
                    </li> -->
                    
                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">extension</i>
                            <span>ACCESSORIES</span>
                        </a>
                        <ul class="ml-menu">
                            

                            
                            <!-- <li>
                                <a href="/kis/admin1/pages/tables/asset2.php">
                                    DEPLOY</a>
                                </a>
                            </li> -->
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>DEVICE LIST</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryAll.php">
                                            <span>ALL</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryActive.php">
                                            <span>ACTIVE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryInactive.php">
                                            <span>INACTIVE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryLost.php">
                                            <span>LOST/STOLEN</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryMaintenance.php">
                                            <span>MAINTENANCE</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryRemove.php">
                                            <span>ALREADY REMOVE</span>
                                        </a>
                                    </li>
                                    
                                    <!--<li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 2</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Menu Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Level - 3</span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span>Level - 4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>ACTION LIST</span>
                                </a>
                                <ul class="ml-menu">
                                    
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryDeploy.php">
                                            <span>DEPLOY</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryUnDeploy.php">
                                            <span>UNDEPLOY</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessory2Deploy.php">
                                            <span>READY DEPLOY</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryArchive.php">
                                            <span>ALL ARCHIVED</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryPending.php">
                                            <span>ALL PENDING</span>
                                        </a>
                                    </li>
                                    
                                    
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessoryRequestable.php">
                                            <span>REQUESTABLE</span>
                                        </a>
                                    </li>

                                    <!--<li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 2</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Menu Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Level - 3</span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span>Level - 4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                            

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>GROUP FILTER</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessory3.php">
                                            AGE OF USE</a>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/kis/admin1/pages/tables/accessory6.php">
                                            DEVICE TYPE</a>
                                        </a>
                                    </li>
                                            
                                    <!--<li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <span>Level - 2</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <span>Menu Item</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="menu-toggle">
                                                    <span>Level - 3</span>
                                                </a>
                                                <ul class="ml-menu">
                                                    <li>
                                                        <a href="javascript:void(0);">
                                                            <span>Level - 4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </li>
                                    
                            
                            <!-- <li>
                                <a href="/kis/admin1/pages/tables/asset4.php">
                                    INFO EDIT/DELETE</a>
                                </a>
                            </li> -->

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">label</i>
                                    <span>ACCESSORY TOOLS</span>
                                </a>
                                <ul class="ml-menu">
                                   
<?php 

                                    if($acctypecheck != 'USER'){
                                        echo("<li>
                                                            <a href='/kis/admin1/add2.php'>ADD</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='/kis/admin1/pages/tables/edit2.php'>
                                                    EDIT</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='/kis/admin1/pages/tables/accessory5.php'>
                                                    ADD/EDIT/DELETE</a>
                                                </a>
                                            </li>
                                            ");
                                    }
                                    else{

                                        echo("<li>
                                                            <a href='#' onclick='warntype();'>ADD</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='#' onclick='warntype();'>
                                                    EDIT</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='#' onclick='warntype();'>
                                                    ADD/EDIT/DELETE</a>
                                                </a>
                                            </li>
                                            ");
                                    }


                                    ?>



<!-- 

                                   <li>
                                <a href="/kis/admin1/add2.php">
                                    ADD</a>
                                </a>
                            </li>

                            <li>
                                <a href="/kis/admin1/pages/tables/edit2.php">
                                    EDIT</a>
                                </a>
                            </li>

                            <li>
                                <a href="/kis/admin1/pages/tables/asset5.php">
                                    DELETE</a>
                                </a>
                            </li>

                            <li>
                                <a href="/kis/admin1/pages/tables/accessory5.php">
                                    ADD/EDIT/DELETE</a>
                                </a>
                            </li>
                            -->
                                </ul>
                            </li> 
                            
                        </ul>
                    </li>

                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">opacity</i>
                            <span>CHECK IN/OUT</span>
                        </a>
                        <ul class="ml-menu">
                            

                            <?php 

                                    if($acctypecheck != 'USER'){
                                        echo("<li>
                                <a href='/kis/admin1/pages/tables/checkio.php'>
                                    HARDWARE</a>
                                </a>
                            </li>
                            <li>
                                <a href='/kis/admin1/pages/tables/checkioAccessory.php'>
                                    ACCESSORY</a>
                                </a>
                            </li>

                                            ");
                                    }
                                    else{

                                        echo("<li>
                                                            <a href='#' onclick='warntype();'>HARDWARE</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='#' onclick='warntype();'>
                                                    ACCESSORY</a>
                                                </a>
                                            </li>

                                            ");
                                    }


                                    ?>
                        </ul>
                    </li>

                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">dns</i>
                            <span>COMPONENTS</span>
                        </a>
                        <ul class="ml-menu">
                                   
<?php 

                                    if($acctypecheck != 'USER'){
                                        echo("<li>
                                                            <a href='/kis/admin1/pages/tables/compo1.php'>LIST-ALL</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='/kis/admin1/pages/tables/compo5.php'>
                                                    ADD/EDIT/DELETE</a>
                                                </a>
                                            </li>

                                            ");
                                    }
                                    else{

                                        echo("<li>
                                                            <a href='#' onclick='warntype();'>LIST-ALL</a>
                                                </a>
                                            </li>

                                            <li>
                                                <a href='#' onclick='warntype();'>
                                                    ADD/EDIT/DELETE</a>
                                                </a>
                                            </li>

                                            ");
                                    }


                                    ?>

                        </ul>
                        <ul class="ml-menu">
                            

                            <li>
                                <a href="/kis/admin1/pages/tables/compo1.php">
                                    LIST ALL</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/tables/compo5.php">
                                    ADD/EDIT/DELETE</a>
                                </a>
                            </li>
                            
                            
                        </ul>
                    </li>

                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">face</i>
                            <span>ACCOUNT</span>
                        </a>
                        <ul class="ml-menu">
                            

<?php 

                                    if($acctypecheck == 'ADMIN'){
                                        echo("<li>
                                <a href='/kis/admin1/pages/tables/acc2.php'>
                                    ACCOUNT LIST</a>
                                </a>
                            </li>
                            <li>
                                <a href='/kis/admin1/pages/tables/acc1.php'>
                                    ACCOUNT TOOLS</a>
                                </a>
                            </li>

                                            ");
                                    }
                                    else{

                                        echo("<li>
                                <a href='#' onclick='warntype();'>
                                    ACCOUNT LIST</a>
                                </a>
                            </li>
                            <li>
                                <a href='#' onclick='warntype();'>
                                    ACCOUNT TOOLS</a>
                                </a>
                            </li>
                                            ");
                                    }


                                    ?>

                         
                            
                            
                            
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Q/A TICKET</span>
                        </a>
                        <ul class="ml-menu">
                            

                            <li>
                                <a href="/kis/admin1/pages/ticket/ticket.php">
                                    SEND Q/A TICKET</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/ticket/replyticket.php">
                                    REPLY Q/A TICKET</a>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>SETTING</span>
                        </a>
                        <ul class="ml-menu">
                            

                            <li>
                                <a href="/kis/admin1/pages/tables/setting1.php">
                                   HARDWARE TYPE</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/tables/setting2.php">
                                    ACCESSORY TYPE</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/tables/setting3.php">
                                    COMPONENT TYPE</a>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li >
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>REPORT</span>
                        </a>
                        <ul class="ml-menu">
                            

                            <li>
                                <a href="/kis/admin1/pages/tables/report1.php">
                                    HARDWARE REPORT</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/tables/report2.php">
                                    ACCESSORY REPORT</a>
                                </a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/tables/report3.php">
                                    COMPONENTS REPORT</a>
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">pie_chart</i>
                            <span>Charts</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/kis/admin1/pages/tables/chart1.php">GROUP-TYPE</a>
                            </li>
                            <li>
                                <a href="/kis/admin1/pages/tables/chart2.php">AGE-OF-USE</a>
                            </li>
                            <!-- <li>
                                <a href="/kis/admin1/pages/tables/chart3.php">STATUS-ACTIVITY</a>
                            </li> -->
                            
                        </ul>
                    </li>
                    
                    <li>
                        <a href="../changelogs.html">
                            <i class="material-icons">update</i>
                            <span>Changelogs</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <!-- <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li> -->
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="/kis/admin1/index2.php">KIS IT ASSET</a>.
                </div>
                <div class="version">
                    <b>BETA Version: </b> 0.9.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>


    <section class="content">

        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header bg-cyan">
                            <h2>
                                ACCOUNT TOOLS
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
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">

                            <div class="header"><!-- 
                                <div class="col-md-3">
                            
The Modal
<button id="myBtn2" class='btn bg-cyan btn-block btn-sm waves-effect'>OPEN</button> -->
                                                
                                                <button id='myBtn4' class='btn btn-info btn-lg' >ADD</button>
                                                <button id='myBtn2' class='btn btn-info btn-lg' >EDIT</button>
                                                <button id='myBtn3' class='btn btn-info btn-lg' >DELETE</button>


<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>
        
   <section class="">
        <!-- <form action="/kis/admin1/pages/tables/accedit.php" method='POST'> -->

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
                                                        <i class="material-icons">perm_contact_calendar</i>#STEP-1
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
                                        <b>ACC-NAME</b>
                                    </p>
                                    <input type="text" value="-" id="name" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <p>
                                        <b>USERNAME</b>
                                    </p>
                                    <input type="text" value="-" id="username" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

                                                <div class="col-md-6">
                                    <p>
                                        <b>PASSWORD</b>
                                    </p>
                                    <input type="text" value="-" id="password" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                    <br>
                                    
                                       
                                </div>
                                                <div class="col-md-6">
                                    <p>
                                        <b>EMAIL</b>
                                    </p>
                                    <input type="text" value="-" id="email" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>


                                <div class="col-md-6">
                                    <p>
                                        <b>PHONE</b>
                                    </p>
                                    <input type="text" value="-" id="phone" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE" />
                                       
                                </div>
                                 <div class="col-md-12">
                                    <p>
                                        <b>ACC TYPE</b>
                                    </p>
                                    <select id="acctype" onclick="send_hwtype()" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE">
                                        
                                        <option value='user'>USER</option>;
                                        <option value='editor'>EDITOR</option>;
                                        <option value='admin'>ADMIN</option>;

                                      

                                       
                                    </select>
                                </div>
                                

<button onclick="okay()" type="submit" id='okayid' style="float: right;" class='btn btn-info btn-lg'>SAVE</button>
</form>
</div>
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
                                                        <i class="material-icons">perm_contact_calendar</i>#STEP-1
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
                                                        <i class="material-icons">perm_contact_calendar</i>#STEP-1
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
                                        <b>ACC-NAME</b>
                                    </p>
                                    <input type="text" value="-" id="name2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>
                                <br>
                                <div class="col-md-6">
                                    <p>
                                        <b>USERNAME</b>
                                    </p>
                                    <input type="text" value="-" id="username2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>

                                                <div class="col-md-6">
                                    <p>
                                        <b>PASSWORD</b>
                                    </p>
                                    <input type="text" value="-" id="password2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                    <br>
                                    
                                       
                                </div>
                                                <div class="col-md-6">
                                    <p>
                                        <b>EMAIL</b>
                                    </p>
                                    <input type="text" value="-" id="email2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE"/>
                                       
                                </div>


                                <div class="col-md-6">
                                    <p>
                                        <b>PHONE</b>
                                    </p>
                                    <input type="text" value="-" id="phone2" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE" />
                                       
                                </div>
                                 <div class="col-md-12">
                                    <p>
                                        <b>ACC TYPE</b>
                                    </p>
                                    <select id="acctype2" onclick="send_hwtype()" class="form-control show-tick" data-live-search="true" placeholder="UN-CHANGE">
                                        
                                        <option value='user'>USER</option>;
                                        <option value='editor'>EDITOR</option>;
                                        <option value='admin'>ADMIN</option>;

                                      

                                       
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
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">#</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="16">ACC-NAME</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="15">USERNAME</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="14">PASSWORD</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="13">EMAIL</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="12">PHONE</th>
                                        <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="11">TYPE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "account";
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
                                         

                                        $sql = "SELECT * FROM kisacc WHERE 1";
                                        $result = mysql_query($sql);

                                        if (mysql_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysql_fetch_array($result)) {
                                                echo "<tr>";
                                                $accid=$row["id"];
                                                $acc=$row["name"];
                                                $usr=$row["username"];
                                                $psw=$row["password"];
                                                $mail=$row["email"];
                                                $phone=$row["phone"];
                                                $type=$row["type"];
                                                
                                                echo "<th>"."<input type='checkbox' class='filled-in' id='".$accid."' onclick='myFunction2(".$accid.")'><label for='".$accid."'></label>"."</th>";
                                                // "<span class='input-group-addon'><input type='checkbox' class='filled-in' id='".$deviceid."' onclick='myFunction2(".$deviceid.")'><label for='".$deviceid."'></label></span>"
                                                                                                
                                                // above ------> <button type='button' id='".$deviceid."' onclick='myFunction3(".$deviceid.")' class='btn btn-info btn-lg waves-effect' data-toggle='modal' data-target='#myModal'>"."<i class='material-icons'>extension</i></button>
                                                
                                                echo("<td>".$acc."</td>");
                                                echo("<td>".$usr."</td>");
                                                echo("<td>".$psw."</td>");
                                                echo("<td><a href='mailto:'".$mail.">".$mail."</a></td>");
                                                echo("<td><a href='tel: +66'".substr($phone,1,9).">".$phone."</a></td>");
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
    var acc,usr,psw,mail,phone,type = "";
    
    var e = document.getElementById("acctype");
    var type = e.options[e.selectedIndex].value;
    usr=document.getElementById("username").value;
    psw=document.getElementById("password").value;
    mail=document.getElementById("email").value;
    phone=document.getElementById("phone").value;
    acc=document.getElementById("name").value;
    

    // str= str+building2+floor2+roomnum2+roomname2;


    document.getElementById("bulkid").innerHTML=str;
    window.location.href = "/kis/admin1/pages/tables/accedit.php?acc="+acc+"&usr="+usr+"&psw="+psw+"&mail="+mail+"&phone="+phone+"&type="+type+"&okid="+str;

    // prompt(document.getElementById("hwtype").value);
    // prompt(document.getElementById("amount").value);
    // prompt(document.getElementById("raminfo").value);
}
function okay2() {
    
        var str = temp.join(',');
    console.log(str);
    var acc,usr,psw,mail,phone,type = "";
    
    var e = document.getElementById("acctype2");
    var type = e.options[e.selectedIndex].value;
    usr=document.getElementById("username2").value;
    psw=document.getElementById("password2").value;
    mail=document.getElementById("email2").value;
    phone=document.getElementById("phone2").value;
    acc=document.getElementById("name2").value;
    

    // str= str+building2+floor2+roomnum2+roomname2;


    document.getElementById("bulkid2").innerHTML=str;
    window.location.href = "/kis/admin1/pages/tables/accdelete.php?acc="+acc+"&usr="+usr+"&psw="+psw+"&mail="+mail+"&phone="+phone+"&type="+type+"&okid="+str;

    // str= str+building2+floor2+roomnum2+roomname2;

    
    
    
}
function okay3() {
    
    var str = temp.join(',');
    console.log(str);
    var acc,usr,psw,mail,phone,type = "";
    
    var e = document.getElementById("acctype2");
    var type = e.options[e.selectedIndex].value;
    usr=document.getElementById("username2").value;
    psw=document.getElementById("password2").value;
    mail=document.getElementById("email2").value;
    phone=document.getElementById("phone2").value;
    acc=document.getElementById("name2").value;
    

    // str= str+building2+floor2+roomnum2+roomname2;


    document.getElementById("bulkid").innerHTML=str;
    window.location.href = "/kis/admin1/pages/tables/accadd.php?acc="+acc+"&usr="+usr+"&psw="+psw+"&mail="+mail+"&phone="+phone+"&type="+type+"&okid="+str;

    
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

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
                                echo "<li><a href='javascript:toaccinfo(".$accidx.")'><i class='material-icons'>person</i>Profile</a></li>";
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
                                ACCESSORY TYPE GROUP
                            </h2>
                            
                        </div>
                        <div class="body">
                                <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab">MOUSE</a></li>
                                <li role="presentation"><a href="#profile" data-toggle="tab">KEYBOARD</a></li>
                                <li role="presentation"><a href="#printer" data-toggle="tab">SPEAKER</a></li>
                                <li role="presentation"><a href="#projector" data-toggle="tab">MICROPHONE</a></li>
                                <li role="presentation"><a href="#scanner" data-toggle="tab">HEADPHONE</a></li>

                                <li role="presentation"><a href="#etc" data-toggle="tab">OTHERs</a></li>

                            </ul>
                            <!-- ///// -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <!-- paste here -->
                                    <div class="table-responsive"><!-- 
                                        <h5>HHELLO</h5> -->
                                <table class="table table-bordered table-striped table-hover  dataTable js-exportable">
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
                                         

                                        $sql = "SELECT id,hw_name,hw_type,amount,ram_info,mhz_info,slot_number,current_ram,max_ram,spec_link,building,floor,room_name,room_number,purchase_date,user_type FROM hardware WHERE hw_name != '' AND hw_type='MOUSE' AND  groups='ACCESSORY'";
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
                                <div role="tabpanel" class="tab-pane fade in" id="profile">
                                    <!-- paste here -->
                                    <div class="table-responsive"><!-- 
                                        <h5>HHELLO</h5> -->
                                <table class="table table-bordered table-striped table-hover js-exportable dataTable">
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
                                         

                                        $sql = "SELECT id,hw_name,hw_type,amount,ram_info,mhz_info,slot_number,current_ram,max_ram,spec_link,building,floor,room_name,room_number,purchase_date,user_type FROM hardware WHERE hw_name != '' AND hw_type='KEYBOARD' AND  groups='ACCESSORY'";
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
                                <div role="tabpanel" class="tab-pane fade in" id="printer">
                                    <!-- paste here -->
                                    <div class="table-responsive"><!-- 
                                        <h5>HHELLO</h5> -->
                                <table class="table table-bordered table-striped table-hover js-exportable dataTable">
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
                                         

                                        $sql = "SELECT id,hw_name,hw_type,amount,ram_info,mhz_info,slot_number,current_ram,max_ram,spec_link,building,floor,room_name,room_number,purchase_date,user_type FROM hardware WHERE hw_name != '' AND hw_type='SPEAKER' AND  groups='ACCESSORY'";
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
                                <div role="tabpanel" class="tab-pane fade in" id="projector">
                                    <!-- paste here -->
                                    <div class="table-responsive"><!-- 
                                        <h5>HHELLO</h5> -->
                                <table class="table table-bordered table-striped table-hover js-exportable dataTable">
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
                                         

                                        $sql = "SELECT id,hw_name,hw_type,amount,ram_info,mhz_info,slot_number,current_ram,max_ram,spec_link,building,floor,room_name,room_number,purchase_date,user_type FROM hardware WHERE hw_name != '' AND hw_type='MICROPHONE' AND  groups='ACCESSORY'";
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
                                
                                <div role="tabpanel" class="tab-pane fade in" id="scanner">
                                    <!-- paste here -->
                                    <div class="table-responsive"><!-- 
                                        <h5>HHELLO</h5> -->
                                <table class="table table-bordered table-striped table-hover js-exportable dataTable">
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
                                         

                                        $sql = "SELECT id,hw_name,hw_type,amount,ram_info,mhz_info,slot_number,current_ram,max_ram,spec_link,building,floor,room_name,room_number,purchase_date,user_type FROM hardware WHERE hw_name != '' AND hw_type='HEADPHONE' AND  groups='ACCESSORY'";
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
                                <div role="tabpanel" class="tab-pane fade in" id="etc">
                                    <!-- paste here -->
                                    <div class="table-responsive"><!-- 
                                        <h5>HHELLO</h5> -->
                                <table class="table table-bordered table-striped table-hover js-exportable dataTable">
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
                                         

                                        $sql = "SELECT id,hw_name,hw_type,amount,ram_info,mhz_info,slot_number,current_ram,max_ram,spec_link,building,floor,room_name,room_number,purchase_date,user_type FROM hardware WHERE hw_name != '' AND hw_type!='MOUSE' AND hw_type!='KEYBOARD' AND hw_type!='SPEAKER' AND hw_type!='MICROPHONE' AND hw_type!='HEADPHONE' AND  groups='ACCESSORY'";
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
                                <!-- <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <div class="table-responsive">
                                <div>   
                    <iframe src="/kis/admin1/pages/tables/bootgrid.php" width="100%" height="700px"></iframe> 
                </div>
                </div>
                            </div> -->
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
            window.location.href = "/kis/admin1/hwinfo.php?idx="+idx+"&groups=accessorytype";
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

<?php

// header("admin1/index.php");
// include 'dbconnect.php';


// if ($result === TRUE) {
//     echo '<script language="javascript">';
// 	echo 'alert("all tables created successfully")';
// 	echo '</script>';

// } else {
//     echo '<script language="javascript">';
// 	echo 'alert("Error creating tables")';
// 	echo '</script>';

// }
header("Location: http://".$_SERVER['HTTP_HOST'].'/kklms/dbcheck.php');


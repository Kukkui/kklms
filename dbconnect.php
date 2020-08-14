<?php 
include('fix_mysql.inc.php');
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "kklms";

$con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($DB_NAME, $con);

// include 'ImageUploadProject/Constants.php';

// $query = file_get_contents ('simsnewdb.sql');

// if (mysql_query($query)) {
//     echo "all tables created successfully <br/>";
// } else {
//     echo "Error creating tables: ". mysql_error();
// }

?>



<?php
include 'dbconnect.php';
$sql = "SELECT * FROM kisacc WHERE 1";
$val = mysql_query($sql);

// $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
//                                                   $url = str_replace('&amp;', '&', $url);
                                                   
//                                                   header("refresh: 0; url= '$url'" );
if($val !== FALSE)
{
   //DO SOMETHING! IT EXISTS!
	header("Location: http://".$_SERVER['HTTP_HOST'].'/kklms/colorlib.com/polygon/adminator/signin.php');
}
else
{
    header("Location: http://".$_SERVER['HTTP_HOST'].'/kklms/colorlib.com/polygon/adminator/signup.html');
}
?>
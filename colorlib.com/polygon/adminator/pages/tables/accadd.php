<?php        
    include '../../../dbconnect.php';     
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    // $devicetype = $_COOKIE['get_hwtype'];
    // $amount = $_COOKIE['get_amount'];
    
                                        $acc=$_GET["acc"];
                                        $usr=$_GET["usr"];
                                        $psw=$_GET["psw"];
                                        $mail=$_GET["mail"];
                                        $phone=$_GET["phone"];
                                        $type=$_GET["type"];
                                        $okidx=$_GET["okid"];
                                        $xarray=array();
                                        $xarray_size="";
                                        $rows=1;

                                        // echo '<script language="javascript">';
                                        // echo 'alert("'. $okidx. '")'; 
                                        // $building2.
                                        // $floor2.
                                        // $roomnum2.
                                        // $roomname2.
                                        // $amount2.
                                        // $raminfo2.
                                        // $mhzinfo2.
                                        // $slot2.
                                        // $crrram2.
                                        // $maxram2.
                                        // $paydate2.
                                        // $age2.
                                          //not showing an alert box.
                                        // echo '</script>';

                                        $xarray= explode(',', $okidx);
                                        //print_r($xarray);
                                        $xarray_size=count($xarray);
                                        
                                                   

                                                  $sql = "INSERT INTO `kisacc`(`name`,`username`, `password`, `email`, `phone`, `type`) VALUES ('".$acc."','".$usr."','".$psw."','".$mail."', '".$phone."', '".$type."')";
                                                  
                                                  $result = mysql_query($sql) or die("error to insert employee data1"); 
                                                            
                                                  
                                                    
                                                  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  header("refresh: 0; url= '$url'" );
                                   


?>
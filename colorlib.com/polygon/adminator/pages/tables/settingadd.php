<?php          
    include '../../../dbconnect.php';   
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    // $devicetype = $_COOKIE['get_hwtype'];
    // $amount = $_COOKIE['get_amount'];
                                        $hwnamex=$_GET["hwname2"];
                                        
                                        $groups=$_GET["groups"];
                                        $xarray=array();
                                        $xarray_size="";
                                        $rows=1;

                                        // $xarray= explode(',', $okidx);
                                        // //print_r($xarray);
                                        // $xarray_size=count($xarray);
                                                  //Create connection

                                                  $getDate = date("Y/m/d");
                                                  $getTime= date("H:i:s");
                                                   
                                                  $sql = "INSERT INTO `".$groups."`(`list`) VALUES ('".$hwnamex."')";
                                                  
                                                  $result = mysql_query($sql) or die("error to insert employee data1"); 
                                                            
                                                  //           }//end loop
                                                    
                                                  
                                                  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  header("refresh: 0; url= '$url'" );
                                   


?>
<?php          
    include '../../../dbconnect.php';   
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    // $devicetype = $_COOKIE['get_hwtype'];
    // $amount = $_COOKIE['get_amount'];
   
                                        $accid=$_GET["accid"];
                                        $hwid=$_GET["hwid"];
                                        $coutnum=$_GET["coutnum"];
                                        $avails=$_GET["avails"];
                                        $groupx=$_GET["groups"];
                                        $left=0;
                                        // $xarray= explode(',', $okidx);
                                        // //print_r($xarray);
                                        // $xarray_size=count($xarray);
                                                  $getDate = date("Y/m/d");
                                                  $getTime= date("H:i:s");
                                                   


                                                  $sql = "SELECT * from hardware WHERE id='".$hwid."'";
                                                  
                                                  $result = mysql_query($sql);
                                                  // $row = mysql_fetch_array($sql);
                                                  // $sum = $row['sumio'];
                                                  if (mysql_num_rows($result) > 0) {
                                                      // output data of each row
                                                      while($row = mysql_fetch_array($result)) {
                                                          
                                                          $amount=$row["amount"];
                                                          

                                                      }
                                                      
                                                  } else {
                                                      echo " ";
                                                  }
                                                  
                                                  



                                                  $left=(int)$avails-(int)$coutnum;
                                                  if($left>=0){



                                                  $sql = "INSERT INTO `hardwareio`(`accid`,`hwid`, `amount`, `odate`, `otime`, `iostatus`, `groups`)  VALUES ('".$accid."','".$hwid."','".$coutnum."','".$getDate."', '".$getTime."','"."out"."','".$groupx."')";

                                                  $result = mysql_query($sql) or die("error to insert employee data1"); 
                                                            
                                                  

                                                  $left=(int)$avails-(int)$coutnum;
                                                   

                                                  $sql = "UPDATE `hardware` SET `avail`= '$left' WHERE id='$hwid'";
                                                  
                                                  $result = mysql_query($sql) or die("error to insert employee data1"); 
                                                            
                                                  
                                                    

                                                  // $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  if($groupx=='HARDWARE'){
                                                    $url='/kis/admin1/pages/tables/checkio.php';
                                                  }
                                                  else{
                                                    $url='/kis/admin1/pages/tables/checkioAccessory.php';
                                                  }
                                                  // $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  header("refresh: 0; url= '$url'" );

                                                  }

                                                  else{

                                                     echo '<script language="javascript">';
                                                        echo 'alert("ENTER CHECK-OUT NUMBER AGAIN")'; 
                                                        
                                                        echo '</script>';

                                                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                    header("refresh: 0; url= '$url'" );
                                                  }


                                   


?>
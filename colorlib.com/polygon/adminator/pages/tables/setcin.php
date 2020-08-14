<?php
    include '../../../dbconnect.php';              
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    // $devicetype = $_COOKIE['get_hwtype'];
    // $amount = $_COOKIE['get_amount'];
    
                                        $accid=$_GET["accid"];
                                        $hwid=$_GET["hwid"];
                                        $cinnum=$_GET["cinnum"];
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
                                                    
                                                  



                                                  $left=(int)$avails+(int)$cinnum;
                                                  if($left<=$amount){

                                                                     
                                                                  // Check connection
                                                                  
                                                                  $sql = "INSERT INTO `hardwareio`(`accid`,`hwid`, `amount`, `idate`, `itime`, `iostatus`, `groups`) VALUES ('".$accid."','".$hwid."','".$cinnum."','".$getDate."', '".$getTime."','"."in"."','".$groupx."')";
                                                                  
                                                                  $result = mysql_query($sql) or die("error to insert check in record"); 
                                                                            
                                                                  


                                                                   
                                                                  // Check connection
                                                                  

                                                                  $sql = "UPDATE `hardware` SET `avail`= '$left' WHERE id='$hwid'";
                                                                  
                                                                  $result = mysql_query($sql) or die("error to update check in record"); 
                                                                            
                                                                  
                                                                    
                                                                  

                                                         
                                                        // Check connection
                                                        

                                                        $sql = "SELECT SUM(amount) AS sumout FROM hardwareio WHERE hwid = '$hwid' AND accid='$accid' AND iostatus='out'";
                                                        $result = mysql_query($sql);
                                                        // $row = mysql_fetch_array($sql);
                                                        // $sum = $row['sumio'];
                                                        if (mysql_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysql_fetch_array($result)) {
                                                                
                                                                $sumoutx=$row["sumout"];
                                                                

                                                            }
                                                            
                                                        } else {
                                                            echo " ";
                                                        }
                                                      




                                                         
                                                        // Check connection
                                                        

                                                        $sql = "SELECT SUM(amount) AS sumin FROM hardwareio WHERE hwid = '$hwid' AND accid='$accid' AND iostatus='in'";
                                                        $result = mysql_query($sql);
                                                        // $row = mysql_fetch_array($sql);
                                                        // $sum = $row['sumio'];
                                                        if (mysql_num_rows($result) > 0) {
                                                            // output data of each row
                                                            while($row = mysql_fetch_array($result)) {
                                                                
                                                                $suminx=$row["sumin"];
                                                                

                                                            }
                                                            
                                                        } else {
                                                            echo " ";
                                                        }


                                                        // echo '<script language="javascript">';
                                                        // echo 'alert("'. $accid."/".$hwid."/OUT=".$sumoutx."/IN=".$suminx.'")'; 
                                                        
                                                        // echo '</script>';


                                                        


                                                                  
                                                                    


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
                                                        echo 'alert("ENTER CHECK-IN NUMBER AGAIN")'; 
                                                        
                                                        echo '</script>';


                                                        

                                                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                    header("refresh: 0; url= '$url'" );

                                                  }
                                                            


                                   


?>
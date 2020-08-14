<?php       
    include '../../../dbconnect.php';       
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    // $devicetype = $_COOKIE['get_hwtype'];
    // $amount = $_COOKIE['get_amount'];
    $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "asset";
                                        $hwnamex=$_GET["hwname2"];
                                        $hwtypex=$_GET["hwtype2"];

                                        $buildingx=$_GET["building2"];
                                        $amountx=$_GET["amount2"];
                                        $raminfox=$_GET["raminfo2"];
                                        $mhzinfox=$_GET["mhzinfo2"];
                                        $slotx=$_GET["slot2"];
                                        $crrramx=$_GET["crrram2"];
                                        $maxramx=$_GET["maxram2"];
                                        $floorx=$_GET["floor2"];
                                        $roomnumx=$_GET["roomnum2"];
                                        $roomnamex=$_GET["roomname2"];
                                        $paydatex=$_GET["paydate2"];
                                        $speclinkx=$_GET["link2"];
                                        $typex=$_GET["acctypex"];

                                        $info3=$_GET["info3"];
                                        $brand3=$_GET["brand3"];
                                        $contact3=$_GET["contact3"];
                                        $xarray=array();
                                        $xarray_size="";
                                        $rows=1;

                                        echo '<script language="javascript">';
                                        echo 'alert("'.$hwtype2.
                                        $building2.
                                        $floor2.
                                        $roomnum2.
                                        $roomname2.
                                        $amount2.
                                        $raminfo2.
                                        $mhzinfo2.
                                        $slot2.
                                        $crrram2.
                                        $maxram2.
                                        $paydate2.
                                        $age2.
                                        $okid. '")';   //not showing an alert box.
                                        echo '</script>';

                                        // $xarray= explode(',', $okidx);
                                        // //print_r($xarray);
                                        // $xarray_size=count($xarray);
                                                  //Create connection

                                                  $getDate = date("Y/m/d");
                                                  $getTime= date("H:i:s");
                                                   
                                                  $coms='COMPONENT/'.$hwtypex;
                                                  $sql = "INSERT INTO `hardwares`(`account`,`date`, `time`, `hw_name`, `hw_type`, `amount`,`ram_info`, `mhz_info`, `slot_number`,`current_ram`, `max_ram`, `spec_link`,`building`, `floor`, `room_number`,`room_name`, `purchase_date`, `user_type`, `groups`,`info`,`brand`,`contact`) VALUES ('".$accname."','".$getDate."','".$getTime."','".$hwnamex."', '".$hwtypex."', '".$amountx."','".$raminfox."', '".$mhzinfox."','".$slotx."','".$crrramx."','".$maxramx."','".$speclinkx."','".$buildingx."','".$floorx."','".$roomnumx."','".$roomnamex."','".$paydatex."','".$typex."','".$coms."','".$info3."','".$brand3."','".$contact3."')";
                                                  
                                                  $result = mysql_query($sql) or die("error to insert employee data1"); 
                                                            
                                                  //           }//end loop
                                                    
                                                   

                                                  $sql = "INSERT INTO `hardware`(`hw_name`, `hw_type`, `amount`,`avail`,`ram_info`, `mhz_info`, `slot_number`,`current_ram`, `max_ram`, `spec_link`,`building`, `floor`, `room_number`,`room_name`, `purchase_date`, `user_type`, `groups`,`info`,`brand`,`contact`) VALUES ('".$hwnamex."', '".$hwtypex."', '".$amountx."','".$amountx."','".$raminfox."', '".$mhzinfox."','".$slotx."','".$crrramx."','".$maxramx."','".$speclinkx."','".$buildingx."','".$floorx."','".$roomnumx."','".$roomnamex."','".$paydatex."','".$typex."','".$coms."','".$info3."','".$brand3."','".$contact3."')";
                                                  
                                                  $result = mysql_query($sql) or die("error to insert employee data2"); 
                                                  
                                                            //end loop
                                                    
                                                  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  header("refresh: 0; url= '$url'" );
                                   


?>
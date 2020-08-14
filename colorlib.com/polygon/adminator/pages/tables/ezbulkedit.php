<?php      
    include '../../../dbconnect.php';        
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    $acctypecheck = $_SESSION['acctypepass'];
    // $devicetype = $_COOKIE['get_hwtype'];
    // $amount = $_COOKIE['get_amount'];
    if($acctypecheck == 'USER'){
      echo '<script language="javascript">';
                                        echo 'alert("'."USER CAN NOT EDIT THE DATA!". '")';   //not showing an alert box.
                                        echo '</script>';
      $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
      header("refresh: 0; url= '$url'" );
      exit;

    }
   
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
                                        $agex=$_GET["age2"];
                                        $okidx=$_GET["okid"];
                                        $typex=$_GET["acctypex"];
                                        $statusx=$_GET["statusx"];

                                        $info2=$_GET["info2"];
                                        $brand2=$_GET["brand2"];
                                        $contact2=$_GET["contact2"];
                                        $xarray=array();
                                        $xarray_size="";
                                        $rows=1;

                                        // echo '<script language="javascript">';
                                        // echo 'alert("'.$hwtype2.
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
                                        // $okid. '")';   //not showing an alert box.
                                        // echo '</script>';

                                        $xarray= explode(',', $okidx);
                                        //print_r($xarray);
                                        $xarray_size=count($xarray);
                                        
                                        if($xarray[0]=="" OR $xarray_size==0){
                                             $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                             header("refresh: 0; url= '$url'" );
                                             exit();

                                        }
                                        else{
                                                  for($i = 0; $i < $xarray_size; $i++) {

                                                  // print_r($xarray[$i]);
                                                  // print_r($hwtypex);
                                                  // print_r($buildingx);


                                                  //Create connection
                                                   

                                                  $sql = "SELECT * FROM `hardware` WHERE id='".$xarray[$i]."'";
                                                  $result = mysql_query($sql);

                                                  if (mysql_num_rows($result) > 0) {
                                                      // output data of each row
                                                      while($row = mysql_fetch_array($result)) {
                                                          $one=$row["hw_name"];
                                                          $two=$row["hw_type"];
                                                          $three=$row["amount"];
                                                          $four=$row["ram_info"];
                                                          $five=$row["mhz_info"];
                                                          $six=$row["slot_number"];
                                                          $seven=$row["current_ram"];
                                                          $eight=$row["max_ram"];
                                                          $nine=$row["building"];
                                                          $ten=$row["floor"];
                                                          $eleven=$row["room_number"];
                                                          $twelve=$row["room_name"];
                                                          $thirteen=$row["purchase_date"];
                                                          $fourteen=$row["user_type"];
                                                          $fifteen=$row["age"];
                                                          $sixteen=$row["deploy_date"];
                                                          $seventeen=$row["spec_link"];
                                                          $eightteen=$row["user_type"];
                                                          $nineteen=$row["status"];
                                                          $twenty=$row["info"];
                                                          $twentyone=$row["brand"];
                                                          $twentytwo=$row["contact"];


                                                          $speclink=$seventeen;

                                                          if($hwnamex=='-'){
                                                                 $hwname=$one;
                                                            }else{$hwname=$hwnamex;}
                                                          if($hwtypex=='-'){
                                                                 $hwtype=$two;
                                                            }else{$hwtype=$hwtypex;}
                                                          if($buildingx=='-'){
                                                                 $building=$nine;
                                                            }else{$building=$buildingx;}
                                                          if($floorx=='-'){
                                                                 $floor=$ten;
                                                            }else{$floor=$floorx;}
                                                            if($roomnumx=='-'){
                                                                 $roomnum=$eleven;
                                                            }else{$roomnum=$roomnumx;}
                                                            if($roomnamex=='-'){
                                                                 $roomname=$twelve;
                                                            }else{$roomname=$roomnamex;}
                                                            if($amountx=='-'){
                                                                 $amount=$three;

                                                            }else{$amount=$amountx;}
                                                            if($raminfox=='-'){
                                                                 $raminfo=$four;

                                                            }else{$raminfo=$raminfox;}
                                                            if($mhzinfox=='-'){
                                                                 $mhzinfo=$five;
                                                            }else{$mhzinfo=$mhzinfox;}
                                                            if($slotx=='-'){
                                                                 $slot=$six;
                                                            }else{$slot=$slotx;}
                                                            
                                                            if($crrramx=='-'){
                                                                 $crrram=$seven;

                                                            }else{$crrram=$crrramx;}
                                                            if($maxramx=='-'){
                                                                 $maxram=$eight;

                                                            }else{$maxram=$maxramx;}
                                                            if($paydatex=='-'){
                                                                 $paydate=$thirteen;
                                                            }else{$paydate=$paydatex;}
                                                            if($agex=='-'){
                                                                 $age=$fifteen;
                                                            }else{$age=$agex;}

                                                            if($typex=='-'){
                                                                 $type=$eightteen;
                                                            }else{$type=$typex;}

                                                            if($statusx=='-'){
                                                                 $status=$nineteen;
                                                            }else{$status=$statusx;}

                                                            if($info2=='-'){
                                                                 $info=$twenty;
                                                            }else{$info=$info2;}

                                                            if($brand2=='-'){
                                                                 $brand=$twentyone;
                                                            }else{$brand=$brand2;}

                                                            if($contact2=='-'){
                                                                 $contact=$twentytwo;
                                                            }else{$contact=$contact2;}

                                                            
                                                             //not showing an alert box.
                                                                }
                                                            } else {
                                                                echo("#".$xarray[$i]."#");
                                                            }
                                                            $coms='COMPONENT/'.$hwtype;

                                                            $sql = "UPDATE `hardware` SET `hw_name`='$hwname',`hw_type`='$hwtype',`amount`='$amount' ,`ram_info`='$raminfo' ,`mhz_info`='$mhzinfo' ,`slot_number`='$slot',`current_ram`='$crrram',`max_ram`='$maxram',`spec_link`='$speclink',`building`='$building',`floor`='$floor',`room_number`='$roomnum',`room_name`='$roomname',`purchase_date`='$paydate',`user_type`='$type',`age`='$age' ,`status`='$status',`groups`='$coms',`info`='$info',`brand`='$brand',`contact`='$contact' WHERE `id`='$xarray[$i]'";

                                                            
                                                            $result = mysql_query($sql) or die("error to insert employee data0"); 

                                                            // print_r("///ID:".$xarray[$i]."@HW-TYPE:".$hwtype."@HW-BUILD:".$building."@HW-FLOOR:".$floor."@HW-ROOMNUM:".$roomnum."@HW-ROOMNAME:".$roomname."@HW-AMOUNT:".$amount."@HW-RAMINFO:".$raminfo."@HW-MHZINFO:".$mhzinfo."@HW-SLOT:".$slot."@HW-CRRRAM:".$crrram."@HW-MAXRAM:".$maxram."@HW-PAYDATE:".$paydate."@HW-AGE:".$age."///"); 




                                                  $getDate = date("Y/m/d");
                                                  $getTime= date("H:i:s");

                                                  
                                                  // Create connection
                                                  
                                                  $sql = "INSERT INTO `hardwares`(`hwid`,`account`,`date`, `time`, `hw_name`, `hw_type`, `amount`,`ram_info`, `mhz_info`, `slot_number`,`current_ram`, `max_ram`, `spec_link`,`building`, `floor`, `room_number`,`room_name`, `purchase_date`, `user_type`,`status`,`groups`,`info`,`brand`,`contact`) VALUES ('".$xarray[$i]."','".$accname."','".$getDate."','".$getTime."','".$hwname."', '".$hwtype."', '".$amount."','".$raminfo."', '".$mhzinfo."','".$slot."','".$crrram."','".$maxram."','".$speclink."','".$building."','".$floor."','".$roomnum."','".$roomname."','".$paydate."','".$type."','".$status."','".$coms."','".$info."','".$brand."','".$contact."')";
                                                  
                                                  $result = mysql_query($sql) or die("error to insert employee data"); 
                                                            
                                                            }//end loop
                                                    
                                                  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  header("refresh: 0; url= '$url'" );
                                   }


?>
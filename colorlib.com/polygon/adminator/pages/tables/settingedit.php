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
                                        // $hwtypex=$_GET["hwtype2"];

                                        // $buildingx=$_GET["building2"];
                                        // $amountx=$_GET["amount2"];
                                        // $raminfox=$_GET["raminfo2"];
                                        // $mhzinfox=$_GET["mhzinfo2"];
                                        // $slotx=$_GET["slot2"];
                                        // $crrramx=$_GET["crrram2"];
                                        // $maxramx=$_GET["maxram2"];
                                        // $floorx=$_GET["floor2"];
                                        // $roomnumx=$_GET["roomnum2"];
                                        // $roomnamex=$_GET["roomname2"];
                                        // $paydatex=$_GET["paydate2"];
                                        // $agex=$_GET["age2"];
                                        $okidx=$_GET["okid"];
                                        // $typex=$_GET["acctypex"];
                                        $groups=$_GET["groups"];

                                        // $info2=$_GET["info2"];
                                        // $brand2=$_GET["brand2"];
                                        // $contact2=$_GET["contact2"];
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
                                                   


                                                  $sql = "SELECT * FROM `".$groups."` WHERE id='".$xarray[$i]."'";
                                                  $result = mysql_query($sql);

                                                  if (mysql_num_rows($result) > 0) {
                                                      // output data of each row
                                                      while($row = mysql_fetch_array($result)) {
                                                          $one=$row["list"];
                                                          

                                                          if($hwnamex=='-'){
                                                                 $hwname=$one;
                                                            }else{$hwname=$hwnamex;}
                                                          
                                                            
                                                             //not showing an alert box.
                                                                }
                                                            } else {
                                                                echo("#".$xarray[$i]."#");
                                                            }
                                                            // $coms='COMPONENT/'.$hwtype;

                                                            $sql = "UPDATE `".$groups."` SET `list`='$hwname' WHERE `id`='$xarray[$i]'";

                                                            
                                                            $result = mysql_query($sql) or die("error to insert employee data0"); 

                                                            // print_r("///ID:".$xarray[$i]."@HW-TYPE:".$hwtype."@HW-BUILD:".$building."@HW-FLOOR:".$floor."@HW-ROOMNUM:".$roomnum."@HW-ROOMNAME:".$roomname."@HW-AMOUNT:".$amount."@HW-RAMINFO:".$raminfo."@HW-MHZINFO:".$mhzinfo."@HW-SLOT:".$slot."@HW-CRRRAM:".$crrram."@HW-MAXRAM:".$maxram."@HW-PAYDATE:".$paydate."@HW-AGE:".$age."///"); 


                                                            
                                                            }//end loop
                                                    
                                                  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  header("refresh: 0; url= '$url'" );
                                   }


?>
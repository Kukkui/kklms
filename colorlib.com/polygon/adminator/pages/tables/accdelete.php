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
                                                   

                                                  $sql = "SELECT * FROM `kisacc` WHERE id='".$xarray[$i]."'";
                                                  $result = mysql_query($sql);

                                                  if (mysql_num_rows($result) > 0) {
                                                      // output data of each row
                                                      while($row = mysql_fetch_array($result)) {
                                                          $one=$row["name"];
                                                          $two=$row["username"];
                                                          $three=$row["password"];
                                                          $four=$row["email"];
                                                          $five=$row["phone"];
                                                          $six=$row["type"];
                                                          

                                                          if($acc=='-'){
                                                                 $accx=$one;
                                                            }else{$accx=$acc;}
                                                          if($usr=='-'){
                                                                 $usrx=$two;
                                                            }else{$usrx=$usr;}
                                                          if($psw=='-'){
                                                                 $pswx=$three;
                                                            }else{$pswx=$psw;}
                                                            if($mail=='-'){
                                                                 $mailx=$four;
                                                            }else{$mailx=$mail;}
                                                            if($phone=='-'){
                                                                 $phonex=$five;
                                                            }else{$phonex=$phone;}
                                                            if($type=='-'){
                                                                 $typex=$six;

                                                            }else{$typex=$type;}
                                                            
                                                            
                                                             //not showing an alert box.
                                                                }
                                                            } else {
                                                                echo("#".$xarray[$i]."#");
                                                            }


                                                             $sql = "DELETE FROM `kisacc`  WHERE id='".$xarray[$i]."'";
                                              
                                                        
                                                        $result = mysql_query($sql) or die("error to delete data"); 

                                                            // print_r("///ID:".$xarray[$i]."@HW-TYPE:".$hwtype."@HW-BUILD:".$building."@HW-FLOOR:".$floor."@HW-ROOMNUM:".$roomnum."@HW-ROOMNAME:".$roomname."@HW-AMOUNT:".$amount."@HW-RAMINFO:".$raminfo."@HW-MHZINFO:".$mhzinfo."@HW-SLOT:".$slot."@HW-CRRRAM:".$crrram."@HW-MAXRAM:".$maxram."@HW-PAYDATE:".$paydate."@HW-AGE:".$age."///"); 


                                                            
                                                            }//end loop
                                                    
                                                  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                                  header("refresh: 0; url= '$url'" );
                                   }


?>
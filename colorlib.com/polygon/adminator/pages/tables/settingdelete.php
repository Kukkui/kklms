<?php             
    include '../../../dbconnect.php';
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    // $devicetype = $_COOKIE['get_hwtype'];
    // $amount = $_COOKIE['get_amount'];
                                        $okidx=$_GET["okid"];
                                        $groups=$_GET["groups"];
                                        $type="";
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
                                               
                                              // Check connection
                                              

                                                  // output data of each row
                                                  

                                                       $sql = "DELETE FROM `".$groups."`  WHERE id='".$xarray[$i]."'";
                                              
                                                        
                                                        $result = mysql_query($sql) or die("error to delete data"); 

                                                        // print_r("///ID:".$xarray[$i]."@HW-TYPE:".$hwtype."@HW-BUILD:".$building."@HW-FLOOR:".$floor."@HW-ROOMNUM:".$roomnum."@HW-ROOMNAME:".$roomname."@HW-AMOUNT:".$amount."@HW-RAMINFO:".$raminfo."@HW-MHZINFO:".$mhzinfo."@HW-SLOT:".$slot."@HW-CRRRAM:".$crrram."@HW-MAXRAM:".$maxram."@HW-PAYDATE:".$paydate."@HW-AGE:".$age."///"); 



                                                        }//end loop
                                                
                                              $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                              header("refresh: 0; url= '$url'" );
                                      }

?>
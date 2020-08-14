<?php
                                        
    session_start();
    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    
                                        date_default_timezone_set("Asia/Bangkok");
                                        echo '<script language="javascript">';
                                        echo 'alert(message successfully sent)';  //not showing an alert box.
                                        echo '</script>';

                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "asset";
                                        $hw_name2 = $_POST['hw_name2'];
                                        $hw_type2 = $_POST['hw_type2'];
                                        $amount2 = $_POST['amount2'];
                                        $ram_info2 = $_POST['ram_info2'];
                                        $mhz_info2 = $_POST['mhz_info2'];
                                        $slot_number2 = $_POST['slot_number2'];
                                        $current_ram2 = $_POST['current_ram2'];
                                        $max_ram2 = $_POST['max_ram2'];
                                        $link2 = $_POST['link2'];
                                        $building2 = $_POST['building2'];
                                        $floor2 = $_POST['floor2'];
                                        $room_num2 = $_POST['room_num2'];
                                        $room_name2 = $_POST['room_name2'];
                                        $year2 = $_POST['year2'];
                                        $type2 = $_POST['type2'];
                                        $getDate = date("Y/m/d");
                                        $getTime= date("H:i:s");

                                        
                                        // Create connection
                                         
                                        // // // Check connection
                                        if ($conn->connect_error) {
                                             die("Connection failed: " . $conn->connect_error);
                                        } 

                                        $sql = "INSERT INTO `hardwares`(`account`,`date`, `time`, `hw_name`, `hw_type`, `amount`,`ram_info`, `mhz_info`, `slot_number`,`current_ram`, `max_ram`, `spec_link`,`building`, `floor`, `room_number`,`room_name`, `purchase_date`, `user_type`) VALUES ('".$accname."','".$getDate."','".$getTime."','".$hw_name2."', '".$hw_type2."', '".$amount2."','".$ram_info2."', '".$mhz_info2."','".$slot_number2."','".$current_ram2."','".$max_ram2."','".$link2."','".$building2."','".$floor2."','".$room_num2."','".$room_name2."','".$year2."','".$type2."')";
                                        
                                        $result = mysql_query($sql) or die("error to insert employee data");
                                        /*echo($hw_name2."', '".$hw_type2."', '".$amount2."','".$ram_info2."', '".$mhz_info2."','".$slot_number2."','".$current_ram2."','".$max_ram2."','".$link2."','".$building2."','".$floor2."','".$room_num2."','".$room_name2."','".$year2."','".$type2);*/

                                        // $pswdb = $row["password"];
                                        //         if($pswdb=$psw){'
                                        //             include("index2.html");
                                        //         }
                                        //         else{
                                        //             echo $usr.$psw."0 results";
                                        //         }
                                                
                                          
                                        $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                        header("refresh: 0; url= '$url'" );
                                        
                                        
?>
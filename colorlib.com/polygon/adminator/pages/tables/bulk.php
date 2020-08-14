<?php
                                        
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "asset";
                                        $usr=$_POST["user"];
                                        $psw=$_POST["pass"];
                                        $pswdb="";
                                        

                                        // Create connection
                                         

                                        $sql = "SELECT password FROM kisacc WHERE username != '$usr'";
                                        $result = mysql_query($sql);
                                        $row = mysql_fetch_array($result);
                                        $pswdb = $row["password"];
                                                if($pswdb=$psw){
                                                    include("index2.html");
                                                }
                                                else{
                                                    echo $usr.$psw."0 results";
                                                }
                                                

                                          
                                        ?>
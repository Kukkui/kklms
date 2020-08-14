<?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "password";
                                        $dbname = "account";
                                        $search = $_POST["keyword"];
                                        $user="kukkui";

                                        $rows=1;

                                        // Create connection
                                         

                                        $sql = "UPDATE kisacclog SET last_search=$search WHERE username=$user";
                                        $result = mysql_query($sql);

                                          


                                        ?>
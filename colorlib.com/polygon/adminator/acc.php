<?php
    include '../../../dbconnect.php';?>
<?php                                   
    session_start();               
                                        
                                        $usr=$_POST["user"];
                                        $psw=$_POST["pass"];
                                        // alert($usr);
                                        // alert($psw);


                                        $pswdb="";
                                        $accname="";
                                        $accemail = "";
                                        

                                        // Create connection
                                        

                                    
                                        $sql = "SELECT * FROM kisacc WHERE username='admin'";
                                        $result = mysqli_query($con,$sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $pswdb = $row["password"];
                                        $accname=$row["name"];
                                        $accemail=$row["email"];
                                        $acctype=$row["type"];
                                        $accid=$row["id"];
                                    }
                                        

                                                if($pswdb==$psw){
                                                    $_SESSION['accnamepass'] = $accname;
                                                    $_SESSION['accemailpass'] = $accemail;
                                                    $_SESSION['acctypepass'] = $acctype;
                                                    $_SESSION['accidpass'] = $accid;
                                                    header("Location:index.php");
                                                    // echo("<script type='text/javascript'>alert('$usr');</script>");
                                                    // echo("<script type='text/javascript'>alert('$psw');</script>");
                                                    // echo("<script type='text/javascript'>alert('TRUE');</script>");
                                                }
                                                else{
                                                    // header("Location:incorrect.php");

                                                    header("Location:signin2.php");
                                                }
                                                

                                        

                                        ?>
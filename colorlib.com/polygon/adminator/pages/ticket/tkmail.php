<?php
include '../../../dbconnect.php';
session_start();
    require("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
    
    $email=$_POST["email"];
    $header = $_POST["header"];
    $textarea = $_POST["textarea"];


    $accname = $_SESSION['accnamepass'];
    $accemail = $_SESSION['accemailpass'];
    if($accemail==$email){
        echo '<script language="javascript">';
    
echo 'alert("YOU ENTER YOUR EMAIL! IN [SEND TO]...ENTER AGAIN")';
echo '</script>';

$url = "/kis/admin1/pages/ticket/ticket.php";
        header("refresh: 0; url= '$url'" );
exit;
    }
    else{

                                        $devicename="";
                                        $devicetype="";
                                        $amount="";
                                        $raminfo="";
                                        $mhzinfo="";
                                        $slot="";
                                        $currentram="";
                                        $maxram="";
                                        $building="";
                                        $floor="";
                                        $room="";
                                        $roomnum="";
                                        $paydate="";
                                        $type="";
                                        $rows=1;
                                        $acc="";
                                        $getDate = date("Y/m/d");
                                        $getTime= date("H:i:s");

                                        // Create connection
                                         

                                        $sql = "INSERT INTO `tkinfo`(`sender`, `question_header`, `question_content`, `send_date`, `send_to`) VALUES ('$accname','$header','$textarea','$getDate','$email')";
                                        $result = mysql_query($sql);

                                        
                                         

    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "kuikuk2537@gmail.com"; // your GMail user name
    $mail->Password = "Kukkuikuikuk1609199425377554"; 
    
    $mail->AddAddress($email);
    // $mail->AddAttachment("uploads/banner-2.jpg"); // recipients email
    // $mail->FromName = $name; // readable name
    $path="";
    $mail->Subject = $header;
    $mail->Body    = $textarea; 


    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send()){
        echo '<script language="javascript">';
    
echo 'alert("Mailer Error: " . $mail->ErrorInfo);';
echo '</script>';
        }
    else{
        echo '<script language="javascript">';
    
echo 'alert("SENT COMPLETE")';
echo '</script>';
        $url = "/kis/admin1/index2.php";
        header("refresh: 0; url= '$url'" );
    }

};
?>


<?php
    require("phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
    $msg = $_POST["message"];
    $email=$_POST["email"];
    $name = $_POST["name"];
    $case = $_POST["submit"];



    // ---------- adjust these lines ---------------------------------------
    $mail->Username = "kukkui2537@gmail.com"; // your GMail user name
    $mail->Password = "Kukkuikuikuk1609199425377554"; 
    $mail->AddAddress($email); // recipients email
    $mail->FromName = $name; // readable name

    $mail->Subject = $case;
    $mail->Body    = $msg; 
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com"; // GMail
    $mail->Port = 465;
    $mail->IsSMTP(); // use SMTP
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent"." ".$msg." ".$email." ".$name." ".$case;

    ?>


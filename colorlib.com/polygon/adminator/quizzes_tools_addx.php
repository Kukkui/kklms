
<?php
    include '../../../dbconnect.php';


  

         session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         $qid = $_POST['qidx'];
         $cname = '';
         $sql = "INSERT INTO `quizzes`(`quizz_id`) VALUES ('$qid');";
         $result= mysqli_query($con, $sql);

          
          header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/quizzes_tools2.php?idx=".$qid);
           exit(0);
?>

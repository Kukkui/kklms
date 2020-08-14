
<?php
    include '../../../dbconnect.php';


	

         session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         $courseidx = $_POST['idx'];
         $cname = '';
         $sql = "INSERT INTO `courses`(`course_id`, `course_name`, `details`, `teacher_id`, `topic1`, `lesson1`, `topic2`, `lesson2`, `topic3`, `lesson3`, `topic4`, `lesson4`) VALUES ('$courseidx','','','$accidx','','','','','','','','');";
         $result= mysqli_query($con, $sql);

          
          header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/courses_tools2.php?idx=".$courseidx);
           exit(0);
?>

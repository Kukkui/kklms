
<?php
    include '../../../dbconnect.php';

         
         $type= $_POST['type'];

         if($type=="zero"){
          $courseidx = $_POST['cidx'];
          $cname = $_POST['course_name_id'];
          $cdetails= $_POST['editor1'];
          $sql = "UPDATE `courses` SET `course_name`='$cname',`details`='$cdetails' WHERE `course_id`='$courseidx'";
                                        $result = mysqli_query($con, $sql);
         }

         elseif ($type=="one") {
          $courseidx = $_POST['cidx'];
          $t1 = $_POST['topic1'];
          $l1= $_POST['editor2'];
          $sql = "UPDATE `courses` SET `topic1`='$t1',`lesson1`='$l1' WHERE `course_id`='$courseidx'";
                                        $result = mysqli_query($con, $sql);
         }
         
         elseif ($type=="two") {
          $courseidx = $_POST['cidx'];
          $t2 = $_POST['topic2'];
          $l2= $_POST['editor3'];
          $sql = "UPDATE `courses` SET `topic2`='$t2',`lesson2`='$l2' WHERE `course_id`='$courseidx'";
                                        $result = mysqli_query($con, $sql);
         }

         elseif ($type=="three") {
          $courseidx = $_POST['cidx'];
          $t3 = $_POST['topic3'];
          $l3= $_POST['editor4'];
          $sql = "UPDATE `courses` SET `topic3`='$t3',`lesson3`='$l3' WHERE `course_id`='$courseidx'";
                                        $result = mysqli_query($con, $sql);
         }
                                        
          elseif ($type=="four") {
          $courseidx = $_POST['cidx'];
          $t4 = $_POST['topic4'];
          $l4= $_POST['editor5'];
          $sql = "UPDATE `courses` SET `topic4`='$t4',`lesson4`='$l4' WHERE `course_id`='$courseidx'";
                                        $result = mysqli_query($con, $sql);
         }       

         else{
           echo("<script type='text/javascript'>alert('NO MODE');</script>");
         header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/courses_tools2.php?idx=".$courseidx);
           exit(0);
         }

         echo("<script type='text/javascript'>alert('DONE');</script>");
         header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/courses_tools2.php?idx=".$courseidx);
           exit(0);

         ?>

          <!-- < ?php header("Location: /kklms/colorlib.com/polygon/adminator/courses_tools2.php"); ?> -->
       </body>
      
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>


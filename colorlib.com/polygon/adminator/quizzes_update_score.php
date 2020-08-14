
<?php
    include '../../../dbconnect.php';

         session_start();
         $accname = $_SESSION['accnamepass'];

         // $newscrxx = $_SESSION['newscrx'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         // $qidx=$_GET['idx'];
         $type= $_POST['type'];
         $qnumx= $_POST['qnumx'];

         
         echo("<script type='text/javascript'>alert('$qnumx');</script>");
         if($type=="zero"){
          $qidx = $_POST['qidx'];
          // $cname = $_POST['course_name_id'];
          // $cdetails= $_POST['editor1'];
          // $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number) VALUES ('0')";

          //                               $result = mysqli_query($con, $sql);
         }

         elseif ($type=="one") {
          $qidx = $_POST['qidx'];
          
          $scorex = $_POST['scores1'];


           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '$scorex', `fullscores`= '$qnumx' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }
         
         elseif ($type=="two") {
          $qidx = $_POST['qidx'];
          $scorex = $_POST['scores2'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }

         elseif ($type=="three") {
          $qidx = $_POST['qidx'];
          $scorex = $_POST['scores3'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }
                                        
          elseif ($type=="four") {
            $qidx = $_POST['qidx'];
         $scorex = $_POST['scores4'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }
         elseif ($type=="five") {
          $qidx = $_POST['qidx'];
          $scorex = $_POST['scores5'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }      
         elseif ($type=="six") {
          $qidx = $_POST['qidx'];
          $scorex = $_POST['scores6'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         } 
         elseif ($type=="seven") {
          $qidx = $_POST['qidx'];
         $scorex = $_POST['scores7'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }     
         elseif ($type=="eight") {
          $qidx = $_POST['qidx'];
          $scorex = $_POST['scores8'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }   
         elseif ($type=="nine") {
          $qidx = $_POST['qidx'];
          $scorex = $_POST['scores9'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }   
         elseif ($type=="ten") {
          $qidx = $_POST['qidx'];
          $scorex = $_POST['scores10'];

           // $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        // $result = mysqli_query($con, $sql);

           $sql = "UPDATE `students_quizzes` SET `scores`= '".$scorex."' WHERE `quizzes_id`='".$qidx."' AND `students_id`='".$accidx."'";
                                       $result = mysqli_query($con, $sql);
          
         }
         else{
           echo("<script type='text/javascript'>alert('NO MODE');</script>");
         header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/quizzes_start.php?idx=$qidx&cnum=$qnumx");
           exit(0);
         }

         echo("<script type='text/javascript'>alert('DONE');</script>");
         header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/quizzes_start.php?idx=$qidx&cnum=$qnumx");
           exit(0);

         ?>

          <!-- < ?php header("Location: /kklms/colorlib.com/polygon/adminator/courses_tools2.php"); ?> -->
       </body>
      
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>


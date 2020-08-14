
<?php
    include '../../../dbconnect.php';

         
         $type= $_POST['type'];

          // $qidx = $_POST['qidx'];
         if($type=="zero"){
          $qidx = $_POST['qidx'];
          // $cname = $_POST['course_name_id'];
          // $cdetails= $_POST['editor1'];
          $sql = "INSERT INTO quizzes(quizz_id) VALUES ('".$qidx."');";
                                        $result = mysqli_query($con, $sql);
         }

         elseif ($type=="one") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor1'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
          $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '1'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='1'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','1','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }

         // elseif ($type=="one") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor1'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','1','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
         //                                $result = mysqli_query($con, $sql);
         // }



         elseif ($type=="two") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor2'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
           $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '2'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='2'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','2','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }

         elseif ($type=="three") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor3'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
           $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '3'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='3'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','3','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }
                                        
          elseif ($type=="four") {
            $qidx = $_POST['qidx'];
          $qqq = $_POST['editor4'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
           $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '4'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='4'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','4','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }
         elseif ($type=="five") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor5'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
           $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '5'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='5'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','5','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }    
         elseif ($type=="six") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor6'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
           $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '6'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='6'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','6','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         } 
         elseif ($type=="seven") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor7'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
          $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '7'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='7'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','7','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }
         elseif ($type=="eight") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor8'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
           $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '8'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='8'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','8','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }  
         elseif ($type=="nine") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor9'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
          $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '9'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='9'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','9','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         } 
         elseif ($type=="ten") {
          $qidx = $_POST['qidx'];
          $qqq = $_POST['editor10'];
          $o1x = $_POST['o1'];
          $o2x = $_POST['o2'];
          $o3x= $_POST['o3'];
          $o4x = $_POST['o4'];
           $cntx=0;
           $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '10'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        
                                        $cntx++;
                                    }
          if($cntx > 0){
            $sql = "UPDATE `quizzes` SET `Question`='$qqq',`Option1`='$o1x',`Option2`='$o2x',`Option3`='$o3x',`Option4`='$o4x' ,`CorrectAnswer` = '$o1x' WHERE `quizz_id`='$qidx' AND `problem_number`='10'";
                                        $result = mysqli_query($con, $sql);
          }
          else{
            $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','10','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x');";
                                        $result = mysqli_query($con, $sql);
          }
           
          
          // $sql = "UPDATE `students_quizzes` SET `quizzes_id`=[value-1],`students_id`=[value-2],`attempt`=[value-3],`scores`=[value-4],`fullscores`=[value-5],`startdate`=[value-6],`enddate`=[value-7] WHERE 1"
          
         }
         /////////////////////////////////////////////
         
        

         // elseif ($type=="three") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor3'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','3','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }
                                        
         //  elseif ($type=="four") {
         //    $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor4'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','4','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }
         // elseif ($type=="five") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor5'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','5','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }       
         // elseif ($type="six") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor6'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','6','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }       
         // elseif ($type=="seven") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor7'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','7','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }       
         // elseif ($type=="eight") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor8'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','8','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }       
         // elseif ($type=="nine") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor9'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','9','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }       
         // elseif ($type=="ten") {
         //  $qidx = $_POST['qidx'];
         //  $qqq = $_POST['editor10'];
         //  $o1x = $_POST['o1'];
         //  $o2x = $_POST['o2'];
         //  $o3x= $_POST['o3'];
         //  $o4x = $_POST['o4'];
         //  $sql = "INSERT INTO quizzes(quizz_id,course_id,problem_number,Question,Option1,Option2,Option3,Option4,CorrectAnswer) VALUES ('$qidx','0','10','$qqq','$o1x','$o2x','$o3x','$o4x','$o1x')";
         //                                $result = mysqli_query($con, $sql);
         // }              

         else{
           echo("<script type='text/javascript'>alert('NO MODE');</script>");
         header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/quizzes_tools2.php?idx=".$qidx);
           exit(0);
         }

         echo("<script type='text/javascript'>alert('DONE');</script>");
         header( "location: http://localhost/kklms/colorlib.com/polygon/adminator/quizzes_tools2.php?idx=".$qidx);
           exit(0);

         ?>

          <!-- < ?php header("Location: /kklms/colorlib.com/polygon/adminator/courses_tools2.php"); ?> -->
       </body>
      
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>


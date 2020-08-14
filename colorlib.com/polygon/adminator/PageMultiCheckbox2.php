
<?php
include '../../../dbconnect.php';
session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         $courseidx = $_POST['idx'];
         $cname = '';

    //                                     $cdetails= '';
    //                                     $teacherid= '';
    //                                     $t1= '';
    //                                     $l1= '';
    //                                     $t2= '';
    //                                     $l2= '';
    //                                     $t3= '';
    //                                     $l3= '';
    //                                     $t4= '';
    //                                     $l4= '';

         $sql = "DELETE FROM `student_courses` WHERE `course_id`='$courseidx'";
                                        $result = mysqli_query($con, $sql);
                                    //     while ($row = mysqli_fetch_array($result)) {
                                    //     $cidx = $row["course_id"];
                                    //     $cname = $row["course_name"];
                                    //     $cdetails=$row["details"];
                                    //     $teacherid=$row["teacher_id"];
                                    //     $t1=$row["topic1"];
                                    //     $l1=$row["lesson1"];
                                    //     $t2=$row["topic2"];
                                    //     $l2=$row["lesson2"];
                                    //     $t3=$row["topic3"];
                                    //     $l3=$row["lesson3"];
                                    //     $t4=$row["topic4"];
                                    //     $l4=$row["lesson4"];
                                    // }

         // echo("<script type='text/javascript'>alert('$cdetails');</script>");
  $aDoor = $_POST['chkbox'];
  if(empty($aDoor)) 
  {
    echo("You didn't select any buildings.");
  } 
  else 
  {
    $N = count($aDoor);

    echo("You selected $N door(s): ");
    for($i=0; $i < $N; $i++)
    {
      $sql = "INSERT INTO student_courses VALUES('$courseidx','$aDoor[$i]');";
                                        $result = mysqli_query($con, $sql);
      echo($aDoor[$i] . " ");
    }
  }
   header( "location: /kklms/colorlib.com/polygon/adminator/courses_tools2.php?idx=".$courseidx);
           exit(0);
?>



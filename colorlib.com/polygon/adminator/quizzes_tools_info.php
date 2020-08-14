
<?php
    include '../../../dbconnect.php';

    ?>
<!DOCTYPE html>
<html>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Forms</title>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script src="editor.js"></script>
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link href="editor.css" type="text/css" rel="stylesheet"/>
      <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
      <link href="style.css" rel="stylesheet">
      <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="editor.css" type="text/css" rel="stylesheet"/>
<script src="editor.js"></script>
   </head>
   <body class="app">
   <?php
         session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         $qidx=$_GET['idx'];
         


         ?>
      <div id="loader">
         <div class="spinner"></div>
      </div>
      <script type="f195bb265fa7d2bce7864f42-text/javascript">window.addEventListener('load', () => {
         const loader = document.getElementById('loader');
         setTimeout(() => {
           loader.classList.add('fadeOut');
         }, 300);
         });
      </script><?php include "../../../mainnav.php" ?>
      <div class="page-container">
         <div class="header navbar">
            <div class="header-container">
               <ul class="nav-left">
                  <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                  <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                  <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>
               </ul>
               <ul class="nav-right">
                  <li class="notifications dropdown">
                     <span class="counter bgc-red">3</span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
                     <ul class="dropdown-menu">
                        <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
                        <li>
                           <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <span><span class="fw-500"><?php echo($accname); ?></span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
                                       <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <span><span class="fw-500">Moo Doe</span> <span class="c-grey-600">liked your <span class="text-dark">cover image</span></span></span>
                                       <p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <span><span class="fw-500">Lee Doe</span> <span class="c-grey-600">commented on your <span class="text-dark">video</span></span></span>
                                       <p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="pX-20 pY-15 ta-c bdT"><span><a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                     </ul>
                  </li>
                  <li class="notifications dropdown">
                     <span class="counter bgc-blue">3</span> <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
                     <ul class="dropdown-menu">
                        <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Emails</span></li>
                        <li>
                           <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <div>
                                          <div class="peers jc-sb fxw-nw mB-5">
                                             <div class="peer">
                                                <p class="fw-500 mB-0"><?php echo($accname); ?></p>
                                             </div>
                                             <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                          </div>
                                          <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <div>
                                          <div class="peers jc-sb fxw-nw mB-5">
                                             <div class="peer">
                                                <p class="fw-500 mB-0">Moo Doe</p>
                                             </div>
                                             <div class="peer"><small class="fsz-xs">15 mins ago</small></div>
                                          </div>
                                          <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                    <div class="peer mR-15"><img class="w-3r bdrs-50p" src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                    <div class="peer peer-greed">
                                       <div>
                                          <div class="peers jc-sb fxw-nw mB-5">
                                             <div class="peer">
                                                <p class="fw-500 mB-0">Lee Doe</p>
                                             </div>
                                             <div class="peer"><small class="fsz-xs">25 mins ago</small></div>
                                          </div>
                                          <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                       </div>
                                    </div>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class="pX-20 pY-15 ta-c bdT"><span><a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                        <div class="peer mR-10"><img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                        <div class="peer"><span class="fsz-sm c-grey-900"><?php echo($accname); ?></span></div>
                     </a>
                     <ul class="dropdown-menu fsz-sm">
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
        
         <main class="main-content bgc-grey-100">

            <div id="mainContent">
              <div class="row gap-20 masonry pos-r">
                <form action='/kklms/colorlib.com/polygon/adminator/PageMultiCheckbox3.php' method='post'>
           
                  <div class="masonry-sizer col-md-12"></div>


                  <div class="masonry-item col-md-12">

                     <div class="bgc-white p-20 bd">
                        <h6 class="c-grey-900">Student Lists</h6>

                        <div class="mT-30">
                           

                           <!-- Editable table -->

      
<!-- Editable table -->

                        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                 <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <!-- <th>Mail</th> -->
                                    <!-- <th>CourseCount</th> -->
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tfoot>
                                 <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>FirstName</th>
                                    <th>LastName</th>
                                    <!-- <th>Mail</th> -->
                                    <!-- <th>CourseCount</th> -->
                                    <th>Action</th>
                                 </tr>
                              </tfoot>
                              <tbody>

                                 <?php
                                        
                                        $studentName="";
                                        $fname="";
                                        $lname="";
                                        // $students="";
                                        $mail="";
                                        
                                        $rows=1;

                                        // Create connection
                                       
                                        $sql = "SELECT * FROM students WHERE `student_id` IN (SELECT `student_id` 
                FROM student_quizzes
               WHERE `quizz_id` = '$qidx');";
                                        $result = mysqli_query($con,$sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                $idx=$row["student_id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn btn-secondary' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $studentName=$row["student_name"];
                                                $fname=$row["firstname"];
                                                $lname=$row["lastname"];

                                                $mail=$row["email"];

                                                // $courseCount=$row["course_count"];
                                                // $students=$row["students"];
                                                $action="
                                                <input type='hidden' name='idx' id='idx' value='".$qidx."' />
                                                <input type='checkbox' name='chkbox[]' checked value='".$idx."'/>

                                              
                                                <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                   <div class='modal-dialog' role='document'>
                                                      <div class='modal-content'>
                                                         <div class='modal-header'>
                                                            

                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                         </div>
                                                         <div class='modal-body'>
                                                               


</div>
                                                         <div class='modal-footer'><button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button> <button type='submit' class='btn btn-primary'>Save changes</button></div>
                                                      </div>
                                                   </div>
                                                </div>";


                                                // echo("<td>".."</td>");
                                                // <img width='100%' height='280px' src= <?php echo('/kis/ImageUploadProject/image.php?id=12)
                                                echo("<td>".$studentName."</td>");
                                                echo("<td>".$fname."</td>");
                                                echo("<td>".$lname."</td>");
                                                // echo("<td>".$mail."</td>");
                                                // echo("<td>".$courseCount."</td>");
                                                echo("<td>".$action."</td>");

                                                #echo("<td>".$building."</td>");
                                                #echo("<td>".$floor."</td>");
                                                #echo("<td>".$room."</td>");
                                                #echo("<td>".$roomnum."</td>");
                                                #echo("<td>".$paydate."</td>");
                                               
                                                #echo("<td>".$type."</td>");
                                                $rows++;

                                            }
                                            echo "</tr>";
                                        } else {
                                            echo "";
                                        }
                                        ?>

                                         <?php
                                        
                                        $studentName="";
                                        $fname="";
                                        $lname="";
                                        // $students="";
                                        $mail="";
                                        
                                        $rows=1;

                                        // Create connection
                                       
                                        $sql = "SELECT * FROM students WHERE `student_id` NOT IN (SELECT `student_id` 
                FROM student_quizzes
               WHERE `quizz_id` = '$qidx');";
                                        $result = mysqli_query($con,$sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                $idx=$row["student_id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn btn-secondary' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $studentName=$row["student_name"];
                                                $fname=$row["firstname"];
                                                $lname=$row["lastname"];

                                                $mail=$row["email"];

                                                // $courseCount=$row["course_count"];
                                                // $students=$row["students"];
                                                $action="
                                                <input type='hidden' name='idx' id='idx' value='".$qidx."' />
                                                <input type='checkbox' name='chkbox[]' value='".$idx."'/>

                                              
                                                <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                   <div class='modal-dialog' role='document'>
                                                      <div class='modal-content'>
                                                         <div class='modal-header'>
                                                            

                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                         </div>
                                                         <div class='modal-body'>
                                                               


</div>
                                                         <div class='modal-footer'><button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button> <button type='submit' class='btn btn-primary'>Save changes</button></div>
                                                      </div>
                                                   </div>
                                                </div>";


                                                // echo("<td>".."</td>");
                                                // <img width='100%' height='280px' src= <?php echo('/kis/ImageUploadProject/image.php?id=12)
                                                echo("<td>".$studentName."</td>");
                                                echo("<td>".$fname."</td>");
                                                echo("<td>".$lname."</td>");
                                                // echo("<td>".$mail."</td>");
                                                // echo("<td>".$courseCount."</td>");
                                                echo("<td>".$action."</td>");

                                                #echo("<td>".$building."</td>");
                                                #echo("<td>".$floor."</td>");
                                                #echo("<td>".$room."</td>");
                                                #echo("<td>".$roomnum."</td>");
                                                #echo("<td>".$paydate."</td>");
                                               
                                                #echo("<td>".$type."</td>");
                                                $rows++;

                                            }
                                            echo "</tr>";
                                        } else {
                                            echo "";
                                        }
                                        ?>

                                 <!-- <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td><div class="dropdown-menu">
                                 <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#">Separated link</a>
                              </div></td>
                                 </tr> -->
                                </tbody>
                           </table>
                        
                        </div>
                     </div>
                  </div>
                  
               </div>
               <br/>
               <input name='btnSubmit' type='submit' class="btn btn-primary" value='Submit' style="float: right;" />
</form>
             <hr/>
               <div class="row gap-20 masonry pos-r">
                  <div class="masonry-sizer col-md-12"></div>
                  
                  <div class="masonry-item col-md-12">
                     <div class="bgc-white p-20 bd">
                        <!-- <h6 class="c-grey-900">C</h6> -->
                        <div class="mT-30">
                             

                             <ul class="nav nav-tabs">
                               <li class="active"><a data-toggle="tab" href="#home">QUIZZ-ID: <?php echo($qidx); ?></a></li>
                               <li><a data-toggle="tab" href="#menu1">Q1</a></li>
                               <li><a data-toggle="tab" href="#menu2">Q2</a></li>
                               <li><a data-toggle="tab" href="#menu3">Q3</a></li>
                               <li><a data-toggle="tab" href="#menu4">Q4</a></li>
                               <li><a data-toggle="tab" href="#menu5">Q5</a></li>
                               <li><a data-toggle="tab" href="#menu6">Q6</a></li>
                               <li><a data-toggle="tab" href="#menu7">Q7</a></li>
                               <li><a data-toggle="tab" href="#menu8">Q8</a></li>
                               <li><a data-toggle="tab" href="#menu9">Q9</a></li>
                               <li><a data-toggle="tab" href="#menu10">Q10</a></li>
                               <!-- <li><a data-toggle="tab" href="#menu5">TOPIC 5</a></li> -->
                             </ul>

                             <div class="tab-content" style="height:1000px">
                               <div id="home" class="tab-pane fade in active">
                                 <br/>

                                 

                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor0" name="editor0" rows="10">Quizz</textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($qidx); ?> /> -->
                                                      <input type="hidden" name="type" id="type" value="zero" />
                                                      <script>
                                                       CKEDITOR.replace('editor0');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value=""></input>'); ?></div>
                             


                           <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="hidden" class="form-control" id="course_name_id" name="course_name_id" placeholder="Course Name" value=""></input>'); ?></div>
                            <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="hidden" class="form-control" id="course_name_id" name="course_name_id" placeholder="Course Name" value=""></input>'); ?></div>

                             <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="hidden" class="form-control" id="course_name_id" name="course_name_id" placeholder="Course Name" value=""></input>'); ?></div>

                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                           </div>
                               <div id="menu1" class="tab-pane fade">
                                  <br/>

                                   <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '1'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>

                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ></textarea>  -->
                                                      <textarea  cols="80" id="editor1" name="editor1" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="one" />
                                                      <script>
                                                       CKEDITOR.replace('editor1');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                 <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>

                                       
                                          <button type="button" onclick="savetest(<?php echo($qidx) ?>,<?php echo('hello') ?>,'HI','HI','HI','HI');" class="btn btn-primary" style="float:right;">SAVE</button>
                                       
                                   
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu2" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '2'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ></textarea>  -->
                                                      <textarea  cols="80" id="editor2" name="editor2" rows="10"><?php echo($qqq); ?></textarea>
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="two" />
                                                      <script>
                                                       CKEDITOR.replace('editor2');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                              </div>
                               <div id="menu3" class="tab-pane fade">
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '3'";
                                  $result = mysqli_query($con,$sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor3" name="editor3" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="three" />
                                                      <script>
                                                       CKEDITOR.replace('editor3');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <!-- <button type="submit" class="btn btn-primary">SAVE</button> -->
                                       <input type="submit" name="submit" id="submit" class="button" value="Submit"/>
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu4" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '4'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor4" name="editor4" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="four" />
                                                      <script>
                                                       CKEDITOR.replace('editor4');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-row">
                                <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                                 </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu5" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '5'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor5" name="editor5" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="five" />
                                                      <script>
                                                       CKEDITOR.replace('editor5');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu6" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '6'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor6" name="editor6" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="six" />
                                                      <script>
                                                       CKEDITOR.replace('editor6');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu7" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '7'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor7" name="editor7" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="seven" />
                                                      <script>
                                                       CKEDITOR.replace('editor7');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu8" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '8'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor8" name="editor8" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="eight" />
                                                      <script>
                                                       CKEDITOR.replace('editor8');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu9" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '9'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor9" name="editor9" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="type" id="type" value="nine" />
                                                      <script>
                                                       CKEDITOR.replace('editor9');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                               </div>
                               <div id="menu10" class="tab-pane fade">
                                  <br/>

                                  <?php 
                                  $qqq='';
                                  $o1='';
                                  $o2='';
                                  $o3='';
                                  $o4='';
                                  $sql = "SELECT * FROM quizzes WHERE  quizz_id = '$qidx' AND problem_number = '10'";
                                  $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_array($result)) {
                                        $qqq = $row["Question"];
                                        $o1 = $row["Option1"];
                                        $o2=$row["Option2"];
                                        $o3=$row["Option3"];
                                        $o4=$row["Option4"];
                                    }
                                    ?>
                                 <form action="/kklms/colorlib.com/polygon/adminator/quizzes_tools_edit.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor10" name="editor10" rows="10"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <?php echo('
                                                         <input type="hidden" name="qidx" id="qidx" value="'.$qidx.'" />
                                                      <input type="hidden" name="type" id="type" value="ten" />
                                                      '); ?>

                                                      <script>
                                                       CKEDITOR.replace('editor10');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-row">
                                 <div class="alert alert-success form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o1" name="o1" placeholder="Option1" value="'.$o1.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" value="'.$o2.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" value="'.$o3.'"></input>'); ?></div>
                                 <!-- <div class="form-row"> -->
                                 <div class="alert alert-danger form-group col-md-12"><label for="inputEmail4"></label><?php echo('<input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" value="'.$o4.'"></input>'); ?></div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary" style="float:right;">SAVE</button>
                              </div>



                              
                           </form>
                               </div>
                             </div>
                           </div>
                           
                        </div>
                     </div>
                  
                     
               </div>
            </div>
         </main>
         <!-- <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
            <span>Copyright © 2017 Designed by <a href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
            <script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13" type="f195bb265fa7d2bce7864f42-text/javascript"></script>
            
            <script type="f195bb265fa7d2bce7864f42-text/javascript">
               window.dataLayer = window.dataLayer || [];
               function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());
               
               gtag('config', 'UA-23581568-13');
            </script>
         </footer> -->
      </div>
      </div><script type="f195bb265fa7d2bce7864f42-text/javascript" src="vendor.js"></script><script type="f195bb265fa7d2bce7864f42-text/javascript" src="bundle.js"></script><script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="f195bb265fa7d2bce7864f42-|49" defer=""></script>
      <script type="text/javascript">
         function savetest(QIDX,TYPEX,O1,O2,O3,O4){
            var qid = QIDX;
            var typex = TYPEX;
            var Opt1=O1;
            var opt2 = O2;
            var opt3 =O3;
            var opt4 = O4;
         // CKEDITOR.replace('editor1');
         // editor_1.setData('HIHI');
         // editor_1.setData('HIHI');
         // editor_1.setData('HIHI');
         //  document.getElementById("editor1").instances.setData("&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href=&quot;https://ckeditor.com/&quot;&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;");
          // document.getElementById("course_name_id").innerHTML = "ookjhgfkhgNMukhkjhm,mn,MNB";
          // document.getElementById("editor1").innerHTML = "BNMukhkjhm,mn,MNB";
          // document.getElementById("editor2").innerHTML = "ookjhgfkhgNMukhkjhm,mn,MNB";
          // document.getElementById("editor1").innerHTML = "BNMukhkjhm,mn,MNB";
          // document.getElementById("editor2").innerHTML = "ookjhgfkhgNMukhkjhm,mn,MNB";
          alert(qid);
          alert(typex);
          alert(Opt1);

          alert(Opt2);
          alert(Opt3);

          alert(Opt4);


       }
      </script>
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>


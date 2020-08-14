
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
<script type="text/javascript">
  var scorex=0;
  var qqqx = [];
</script>
   </head>
   <body class="app">
   <?php
         session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         $qidx=$_GET['idx'];
         $qnumx=$_GET['cnum'];
         
         echo("<script type='text/javascript'>alert('$accidx');</script>");

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
         <input type="hidden" name="type" id="score" value="-" />
         <main class="main-content bgc-grey-100">
            <div id="mainContent">
               <div class="row gap-20 masonry pos-r">
                  <div class="masonry-sizer col-md-12"></div>
                  
                  <div class="masonry-item col-md-12">
                     <div class="bgc-white p-20 bd">
                        <!-- <h6 class="c-grey-900">C</h6> -->
                        <div class="mT-30">
                             
<div id="tabs">
                             <ul class="nav nav-tabs" id="myTab">
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
                           </div>

                             <div class="tab-content" style="height:1000px">
                               <div id="home" class="tab-pane fade in active">
                                 <br/>

                                 
<form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor0" name="editor0" rows="10" readonly="true">Quizz</textarea>
                                                    
                                                      <input type="hidden" name="type" id="type" value="zero" />

                                                      <input type="hidden" id="scores0" name="scores0" value=""/>
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
                                       
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
<form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ></textarea>  -->
                                                      <textarea  cols="80" id="editor1" name="editor1" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" value="one" />
                                                      <input type="hidden" name="scores1" id="scores1" value="" text=""></input>
                                                     

         <!-- echo("<script type='text/javascript'>alert('$newscrxx');</script>"); -->


                                                      <script>
                                                       CKEDITOR.replace('editor1');

                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                 <!-- <div class="form-group row"> -->
                                                 <fieldset class="form-group1">
                                                 <div class="row">

      <div class="col-sm-10">
     

      <?php
          
          $mpc1 = '<div class="form-check"><input class="form-check-input" onclick="addscore(1);"  type="radio" name="gridRadios" id="gridRadios1" value="option1" >
          <label class="form-check-label" for="gridRadios1">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3">
          <label class="form-check-label" for="gridRadios3">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios4" value="option4">
          <label class="form-check-label" for="gridRadios4">
            '.$o4.'
          </label>
        </div>';
      
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
                                          </div>
                                          </div>
                                 </fieldset>
                              <!-- </div> -->
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" value="" text="" ></textarea>  -->
                                                      <textarea  cols="80" id="editor2" name="editor2" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="two" />

                                                      <input type="hidden" name="scores2" id="scores2" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor2');

                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                 <!-- <div class="form-group row"> -->
                                                 <fieldset class="form-group2">
                                                  <div class="row">

      <div class="col-sm-10">
     

      <?php
          
          $mpc1 = '<div class="form-check"><input class="form-check-input" onclick="addscore(2);"  type="radio" name="gridRadios" id="gridRadios5" value="option1" >
          <label class="form-check-label" for="gridRadios5">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios6" value="option2">
          <label class="form-check-label" for="gridRadios6">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios7" value="option3">
          <label class="form-check-label" for="gridRadios7">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios8" value="option4">
          <label class="form-check-label" for="gridRadios8">
            '.$o4.'
          </label>
        </div>';
      
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
                                          </div>
                                          </div>
                                 </fieldset>
                              <!-- </div> -->
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
                              </div>



                              
                           </form>
                              </div>
                               <div id="menu3" class="tab-pane fade">
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor3" name="editor3" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="three" />

                                                      <input type="hidden" name="scores3" id="scores3" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor3');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(3);"  type="radio" name="gridRadios" id="gridRadios9" value="option1" >
          <label class="form-check-label" for="gridRadios9">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios10" value="option2">
          <label class="form-check-label" for="gridRadios10">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios11" value="option3">
          <label class="form-check-label" for="gridRadios11">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios12" value="option4">
          <label class="form-check-label" for="gridRadios12">
            '.$o4.'
          </label>
        </div>';
        
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
</div>
                                          </div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor4" name="editor4" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="four" />

                                                      <input type="hidden" name="scores4" id="scores4" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor4');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(4);"  type="radio" name="gridRadios" id="gridRadios13" value="option1" >
          <label class="form-check-label" for="gridRadios13">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios14" value="option2">
          <label class="form-check-label" for="gridRadios14">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios15" value="option3">
          <label class="form-check-label" for="gridRadios15">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios16" value="option4">
          <label class="form-check-label" for="gridRadios16">
            '.$o4.'
          </label>
        </div>';
        
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
</div>
                                          </div>
                                <!-- class="form-control" id="inputPassword4" placeholder="Password"></div> --> -->
                                 </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor5" name="editor5" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="five" />

                                                      <input type="hidden" name="scores5" id="scores5" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor5');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(5);"  type="radio" name="gridRadios" id="gridRadios17" value="option1" >
          <label class="form-check-label" for="gridRadios17">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios18" value="option2">
          <label class="form-check-label" for="gridRadios18">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios19" value="option3">
          <label class="form-check-label" for="gridRadios19">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios20" value="option4">
          <label class="form-check-label" for="gridRadios20">
            '.$o4.'
          </label>
        </div>';
        
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
</div>
                                          </div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor6" name="editor6" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="six" />
                                                      <input type="hidden" name="scores6" id="scores6" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor6');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(6);"  type="radio" name="gridRadios" id="gridRadios21" value="option1" >
          <label class="form-check-label" for="gridRadios21">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios22" value="option2">
          <label class="form-check-label" for="gridRadios22">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios23" value="option3">
          <label class="form-check-label" for="gridRadios23">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios24" value="option4">
          <label class="form-check-label" for="gridRadios24">
            '.$o4.'
          </label>
        </div>';
        
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
</div>
                                          </div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor7" name="editor7" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="seven" />

                                                      <input type="hidden" name="scores7" id="scores7" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor7');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(7);"  type="radio" name="gridRadios" id="gridRadios25" value="option1" >
          <label class="form-check-label" for="gridRadios25">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios26" value="option2">
          <label class="form-check-label" for="gridRadios26">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios27" value="option3">
          <label class="form-check-label" for="gridRadios27">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios28" value="option4">
          <label class="form-check-label" for="gridRadios28">
            '.$o4.'
          </label>
        </div>';
        
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
</div>
                                          </div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor8" name="editor8" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="eight" />
                                                      <input type="hidden" name="scores8" id="scores8" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor8');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(8);"  type="radio" name="gridRadios" id="gridRadios29" value="option1" >
          <label class="form-check-label" for="gridRadios29">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios30" value="option2">
          <label class="form-check-label" for="gridRadios30">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios31" value="option3">
          <label class="form-check-label" for="gridRadios31">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios32" value="option4">
          <label class="form-check-label" for="gridRadios32">
            '.$o4.'
          </label>
        </div>';
        ?>
                               <?php
                                 // $mpc1 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text"  class="form-control" id="o1" name="o1" placeholder="Option1" onclick="addscore(9);" readonly="true" value='.$o1.'></input></div>';

                                 // $mpc2 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" readonly="true" value='.$o2.'></input></div>';

                                 // $mpc3 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" readonly="true" value='.$o3.'></input></div>';

                                 // $mpc4 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" readonly="true" value='.$o4.'></input></div>';
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
</div>
                                          </div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor9" name="editor9" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="nine" />
                                                      <input type="hidden" name="scores9" id="scores9" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor9');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(9);"  type="radio" name="gridRadios" id="gridRadios33" value="option1" >
          <label class="form-check-label" for="gridRadios33" >
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios34" value="option2">
          <label class="form-check-label" for="gridRadios34">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios35" value="option3">
          <label class="form-check-label" for="gridRadios35">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios36" value="option4">
          <label class="form-check-label" for="gridRadios36">
            '.$o4.'
          </label>
        </div>';
        ?>
                               <?php
                                 // $mpc1 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text"  class="form-control" id="o1" name="o1" placeholder="Option1" onclick="addscore(9);" readonly="true" value='.$o1.'></input></div>';

                                 // $mpc2 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" readonly="true" value='.$o2.'></input></div>';

                                 // $mpc3 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" readonly="true" value='.$o3.'></input></div>';

                                 // $mpc4 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" readonly="true" value='.$o4.'></input></div>';
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/>');
                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                             
</div>
                                          </div>
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
                                    ?><form action="/kklms/colorlib.com/polygon/adminator/quizzes_update_score.php" method="post" >
                              
                              
                              <div class="form-group">
                                       <div class="container-fluid">
                                          <div class="row">
                                             
                                             <div class="container">
                                                <div class="row">
                                                   <div class="col-md-12 nopadding">
                                                      <!-- <textarea id="txtEditor1" style="width:100%" readonly="true" value="" text="" ><?php echo($qqq); ?></textarea>  -->
                                                      <textarea  cols="80" id="editor10" name="editor10" rows="10" readonly="true"><?php echo($qqq); ?></textarea>
                                                      <!-- <input type="hidden" name="cidx" id="cidx" readonly="true" value=<?php echo($courseidx); ?> /> -->
                                                      <input type="hidden" name="qidx" id="qidx" readonly="true" value=<?php echo($qidx); ?> />
                                                      <input type="hidden" name="qnumx" id="qnumx" readonly="true" value=<?php echo($qnumx); ?> />
                                                      <input type="hidden" name="type" id="type" readonly="true" value="ten" />
                                                      <input type="hidden" name="scores10" id="scores10" value="" text=""></input>
                                                      <script>
                                                       CKEDITOR.replace('editor10');
                                                       // info();

                                                     </script>
                                                   </div>

                                                </div>
                                                <br/>
                                                 <div class="form-group row">
                                                 <!-- <fieldset class="form-group"> -->
                                                 <div class="row">

      <div class="col-sm-10">
     <div class="form-check">

      <?php
          
          $mpc1 = '<input class="form-check-input" onclick="addscore(10);"  type="radio" name="gridRadios" id="gridRadios37" value="option1" >
          <label class="form-check-label" for="gridRadios37">
            '.$o1.'
          </label>
        </div>';
        $mpc2 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios38" value="option2">
          <label class="form-check-label" for="gridRadios38">
           '.$o2.'
          </label>
        </div>';

        $mpc3 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios39" value="option3">
          <label class="form-check-label" for="gridRadios39">
            '.$o3.'
          </label>
        </div>';

        $mpc4 = '<div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios40" value="option4">
          <label class="form-check-label" for="gridRadios40">
            '.$o4.'
          </label>
        </div>';
        ?>
                               <?php
                                 // $mpc1 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text"  class="form-control" id="o1" name="o1" placeholder="Option1" onclick="addscore(9);" readonly="true" value='.$o1.'></input></div>';

                                 // $mpc2 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o2" name="o2" placeholder="Option2" readonly="true" value='.$o2.'></input></div>';

                                 // $mpc3 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o3" name="o3" placeholder="Option3" readonly="true" value='.$o3.'></input></div>';

                                 // $mpc4 = '<div class="alert alert-primary form-group col-md-12"><label for="inputEmail4"></label><input type="text" class="form-control" id="o4" name="o4" placeholder="Option4" readonly="true" value='.$o4.'></input></div>';
                                 $mix = array($mpc1,$mpc2,$mpc3,$mpc4);
                                 shuffle($mix);
                                 for($i=0; $i<=3;$i++){
                                  echo($mix[$i].'<br/><br/>');

                                 }
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];
                                 // echo $items[rand(0, count($items) - 1)];

                                  ?>
                                </div>
                              </div>
                              <!-- </fieldset> -->
                                 <!-- <div class="form-group col-md-6"><label for="inputPassword4">Password</label><input type="text" class="form-control" id="inputPassword4" placeholder="Password"></div> -->
                              </div>
                                             </div>
                                          </div>
                                          
                                       </div>
                                       <br/>
                                       <button type="submit" class="btn btn-primary">SAVE</button>
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
         function addscore(qqqs){
          var qqqs2 = qqqs;
          var chk = qqqx.includes(qqqs2);
          if(chk==false){

            qqqx.push(qqqs2);
          }

          var cnt= parseInt(qqqx.length);
          var scr = cnt*10;
          scorex=scr;
          setscr(qqqs2,scorex);
          alert(scorex);
          // $('#myTab a:last').tab('show'); 
          // $('#myTab a[href="#menu5"]').tab('show');
          // document.getElementById("editor2").innerHTML = "ookjhgfkhgNMukhkjhm,mn,MNB";
          // document.getElementById("editor1").innerHTML = "BNMukhkjhm,mn,MNB";
          // document.getElementById("editor2").innerHTML = "ookjhgfkhgNMukhkjhm,mn,MNB";
          
       }

       function setscr(num,newscr){
        alert("SETSCR!");
        var scrnum = num;
        var newscrxxx = newscr
        var setto = "scores"+num;
        alert(setto);
         var scr=document.getElementById(setto);
         scr.value=newscrxxx;
         scr.innerHTML=newscrxxx;
         // $('#myTab a[href="#menu1"]').tab('hidden');
          // $('#menu5').trigger('click')
          
       }

       function nexttab3(){
         
          // $('#myTab a[href="#menu3"]').trigger('click');
          
       }
       function nexttab4(){
         
          // $('#myTab a[href="#menu4"]').tab('show');
          
       }
       function nexttab5(){
         
          // $('#myTab a[href="#menu5"]').tab('show');
          
       }
       function nexttab6(){
         
          // $('#myTab a[href="#menu6"]').tab('show');
          
       }
       function nexttab7(){
         
          // $('#myTab a[href="#menu7"]').tab('show');
          
       }
       function nexttab8(){
         
          // $('#myTab a[href="#menu8"]').tab('show');
          
       }
       function nexttab9(){
         
          // $('#myTab a[href="#menu9"]').tab('show');
          
       }
       function nexttab10(){
         
          // $('#myTab a[href="#menu10"]').tab('show');
          
       }
      </script>
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>


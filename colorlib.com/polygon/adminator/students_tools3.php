<!DOCTYPE html>
<html>
   <!-- Mirrored from colorlib.com/polygon/adminator/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:21 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Dashboard</title>
      <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
      <link href="style.css" rel="stylesheet">
      <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Tabs Events</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
   .bs-example{
      margin: 20px;
    }
</style>
<script>
    $(document).ready(function(){
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
            var activeTab = $(e.target).text(); // Get the name of active tab
            var previousTab = $(e.relatedTarget).text(); // Get the name of previous tab
            $(".active-tab span").html(activeTab);
            $(".previous-tab span").html(previousTab);
        });
    });
</script>
   </head>
   <body class="app">
      <?php
    include '../../../dbconnect.php';?>
  <?php
         session_start();
         $accname = $_SESSION['accnamepass'];
         $accemail = $_SESSION['accemailpass'];
         $acctypecheck = $_SESSION['acctypepass'];
         $accidx = $_SESSION['accidpass'];
         ?>
      <div id="loader">
         <div class="spinner"></div>
      </div>
      <script type="631c22687f839c09339e58b6-text/javascript">window.addEventListener('load', () => {
         const loader = document.getElementById('loader');
         setTimeout(() => {
           loader.classList.add('fadeOut');
         }, 300);
         });
      </script>
      <?php include "../../../mainnav.php" ?>
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
                     <div class="masonry-sizer col-md-6"></div>
                     <div class="masonry-item w-100">
                        <div class="row gap-20">
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Total Visits</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><span id="sparklinedash"></span></div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Total Page Views</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Unique Visitor</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><span id="sparklinedash3"></span></div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="layers bd bgc-white p-20">
                                 <div class="layer w-100 mB-10">
                                    <h6 class="lh-1">Bounce Rate</h6>
                                 </div>
                                 <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                       <div class="peer peer-greed"><span id="sparklinedash4"></span></div>
                                       <div class="peer"><span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="masonry-item col-12">
                        <div class="bd bgc-white">
                           <div class="peers fxw-nw@lg+ ai-s">
                              <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                                 <div class="layers">
                                    
                                    <div class="layer w-100">
                                       <div class="bs-example">
    <ul id="myTab" class="nav nav-tabs">
        <li class="nav-item">
            <a href="#home" class="nav-link active" data-toggle="tab">Courses</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" data-toggle="tab">Homework</a>
        </li>
        <li class="nav-item">
            <a href="#messages" class="nav-link" data-toggle="tab">Quizzes</a>
        </li>
    </ul>
    <br/>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="home">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                              <thead>
                                 <tr>
                                    <th>CourseID</th>
                                    <th>StudentID</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tfoot>
                                 <tr>
                                    <th>CourseID</th>
                                    <th>StudentID</th>
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
                                       
                                        $sql = "SELECT * FROM student_courses WHERE student_id='$accidx'";
                                        $result = mysqli_query($con,$sql);

                                        if (mysqli_num_rows($result) > 0) {
                                            // output data of each row
                                            while($row = mysqli_fetch_array($result)) {
                                                $idx=$row["course_id"];
                                                echo "<tr>";
                                                echo "<th scope='row'>" ."<button type='button' class='btn btn-secondary' onclick='toinfo(".$idx.")' >".$idx."</button>" . "</th>";
                                                $studentName=$row["student_id"];
                                                
                                                // $students=$row["students"];
                                                $action="
                                                <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>ADD</button>
                                                <button type='button' class='btn btn-danger'  onclick='todel(".$idx.")'>DELETE</button>
                                                <button type='button' class='btn btn-success'  onclick='toinfo(".$idx.")'>MORE</button>
                                              
                                                <div class='modal fade' id='exampleModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                                   <div class='modal-dialog' role='document'>
                                                      <div class='modal-content'>
                                                         <div class='modal-header'>
                                                            

                                                            <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                         </div>
                                                         <div class='modal-body'>
                                                               <form>
                                                               <div class='form-row'>
                                                                  <div class='form-group col-md-6'><label for='inputEmail4'>Course Name</label><input type='text' class='form-control' id='inputEmail4' placeholder='Course Name'></div>
                                                                  <div class='form-group col-md-6'><label for='inputPassword4'>Password</label><input type='text' class='form-control' id='inputPassword4' placeholder='Password'></div>
                                                               </div>
                                                               <div class='form-group'><label for='inputAddress'>Address</label><input type='text' class='form-control' id='inputAddress' placeholder='1234 Main St'></div>
                                                               <div class='form-group'><label for='inputAddress2'>Address 2</label><input type='text' class='form-control' id='inputAddress2' placeholder='Apartment, studio, or floor'></div>
                                                               <div class='form-row'>
                                                                  <div class='form-group col-md-6'><label for='inputCity'>City</label><input type='text' class='form-control' id='inputCity'></div>
                                                                  <div class='form-group col-md-4'>
                                                                     <label for='inputState'>State</label>
                                                                     <select id='inputState' class='form-control'>
                                                                        <option selected='selected'>Choose...</option>
                                                                        <option>...</option>
                                                                     </select>
                                                                  </div>
                                                                  <div class='form-group col-md-2'><label for='inputZip'>Zip</label><input type='text' class='form-control' id='inputZip'></div>
                                                               </div>
                                                               <div class='form-group'>
                                                                  <div class='checkbox checkbox-circle checkbox-info peers ai-c'><input type='checkbox' id='inputCall2' name='inputCheckboxesCall' class='peer'><label for='inputCall2' class='peers peer-greed js-sb ai-c'><span class='peer peer-greed'>Call John for Dinner</span></label></div>
                                                               </div>
                                                            </form>
                                                         </div>
                                                         <div class='modal-footer'><button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button> <button type='submit' class='btn btn-primary'>Save changes</button></div>
                                                      </div>
                                                   </div>
                                                </div>";
                                                // echo("<td>".."</td>");
                                                // <img width='100%' height='280px' src= <?php echo('/kis/ImageUploadProject/image.php?id=12)
                                                // echo("<td>".$idx."</td>");
                                                echo("<td>".$studentName."</td>");
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
        <div class="tab-pane fade" id="profile">
            <h4 class="mt-2">Profile tab content</h4>
            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
        </div>
        <div class="tab-pane fade" id="messages">
            <h4 class="mt-2">Messages tab content</h4>
            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis.</p>
        </div>
    </div>
</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="peer bdL p-20 w-30p@lg+ w-100p@lg-">
                                 <div class="layers">
                                    <div class="layer w-100">
                                       <div class="layers">
                                          <div class="layer w-100">
                                             <h5 class="mB-5">100k</h5>
                                             <small class="fw-600 c-grey-700">Visitors From USA</small> <span class="pull-right c-grey-600 fsz-sm">50%</span>
                                             <div class="progress mT-10">
                                                <div class="progress-bar bgc-deep-purple-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"><span class="sr-only">50% Complete</span></div>
                                             </div>
                                          </div>
                                          <div class="layer w-100 mT-15">
                                             <h5 class="mB-5">1M</h5>
                                             <small class="fw-600 c-grey-700">Visitors From Europe</small> <span class="pull-right c-grey-600 fsz-sm">80%</span>
                                             <div class="progress mT-10">
                                                <div class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:80%"><span class="sr-only">80% Complete</span></div>
                                             </div>
                                          </div>
                                          <div class="layer w-100 mT-15">
                                             <h5 class="mB-5">450k</h5>
                                             <small class="fw-600 c-grey-700">Visitors From Australia</small> <span class="pull-right c-grey-600 fsz-sm">40%</span>
                                             <div class="progress mT-10">
                                                <div class="progress-bar bgc-light-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:40%"><span class="sr-only">40% Complete</span></div>
                                             </div>
                                          </div>
                                          <div class="layer w-100 mT-15">
                                             <h5 class="mB-5">1B</h5>
                                             <small class="fw-600 c-grey-700">Visitors From India</small> <span class="pull-right c-grey-600 fsz-sm">90%</span>
                                             <div class="progress mT-10">
                                                <div class="progress-bar bgc-blue-grey-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:90%"><span class="sr-only">90% Complete</span></div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="peers pT-20 mT-20 bdT fxw-nw@lg+ jc-sb ta-c gap-10">
                                          <div class="peer">
                                             <div class="easy-pie-chart" data-size="80" data-percent="75" data-bar-color="#f44336"><span></span></div>
                                             <h6 class="fsz-sm">New Users</h6>
                                          </div>
                                          <div class="peer">
                                             <div class="easy-pie-chart" data-size="80" data-percent="50" data-bar-color="#2196f3"><span></span></div>
                                             <h6 class="fsz-sm">New Purchases</h6>
                                          </div>
                                          <div class="peer">
                                             <div class="easy-pie-chart" data-size="80" data-percent="90" data-bar-color="#ff9800"><span></span></div>
                                             <h6 class="fsz-sm">Bounce Rate</h6>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                           <div class="layers">
                              <div class="layer w-100 pX-20 pT-20">
                                 <h6 class="lh-1">Monthly Stats</h6>
                              </div>
                              <div class="layer w-100 p-20">
                                 <canvas id="line-chart" height="220"></canvas>
                              </div>
                              <div class="layer bdT p-20 w-100">
                                 <div class="peers ai-c jc-c gapX-20">
                                    <div class="peer"><span class="fsz-def fw-600 mR-10 c-grey-800">10% <i class="fa fa-level-up c-green-500"></i></span> <small class="c-grey-500 fw-600">APPL</small></div>
                                    <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">2% <i class="fa fa-level-down c-red-500"></i></span> <small class="c-grey-500 fw-600">Average</small></div>
                                    <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">15% <i class="fa fa-level-up c-green-500"></i></span> <small class="c-grey-500 fw-600">Sales</small></div>
                                    <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">8% <i class="fa fa-level-down c-red-500"></i></span> <small class="c-grey-500 fw-600">Profit</small></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white p-20">
                           <div class="layers">
                              <div class="layer w-100 mB-10">
                                 <h6 class="lh-1">Todo List</h6>
                              </div>
                              <div class="layer w-100">
                                 <ul class="list-task list-group" data-role="tasklist">
                                    <li class="list-group-item bdw-0" data-role="task">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Call John for Dinner</span></label></div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer"><label for="inputCall2" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Book Boss Flight</span> <span class="peer"><span class="badge badge-pill fl-r badge-success lh-0 p-10">2 Days</span></span></label></div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall3" name="inputCheckboxesCall" class="peer"><label for="inputCall3" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Hit the Gym</span> <span class="peer"><span class="badge badge-pill fl-r badge-danger lh-0 p-10">3 Minutes</span></span></label></div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall4" name="inputCheckboxesCall" class="peer"><label for="inputCall4" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Give Purchase Report</span> <span class="peer"><span class="badge badge-pill fl-r badge-warning lh-0 p-10">not important</span></span></label></div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall5" name="inputCheckboxesCall" class="peer"><label for="inputCall5" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Watch Game of Thrones Episode</span> <span class="peer"><span class="badge badge-pill fl-r badge-info lh-0 p-10">Tomorrow</span></span></label></div>
                                    </li>
                                    <li class="list-group-item bdw-0" data-role="task">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall6" name="inputCheckboxesCall" class="peer"><label for="inputCall6" class="peers peer-greed js-sb ai-c"><span class="peer peer-greed">Give Purchase report</span> <span class="peer"><span class="badge badge-pill fl-r badge-success lh-0 p-10">Done</span></span></label></div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                           <div class="layers">
                              <div class="layer w-100 p-20">
                                 <h6 class="lh-1">Sales Report</h6>
                              </div>
                              <div class="layer w-100">
                                 <div class="bgc-light-blue-500 c-white p-20">
                                    <div class="peers ai-c jc-sb gap-40">
                                       <div class="peer peer-greed">
                                          <h5>November 2017</h5>
                                          <p class="mB-0">Sales Report</p>
                                       </div>
                                       <div class="peer">
                                          <h3 class="text-right">$6,000</h3>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive p-20">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th class="bdwT-0">Name</th>
                                             <th class="bdwT-0">Status</th>
                                             <th class="bdwT-0">Date</th>
                                             <th class="bdwT-0">Price</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td class="fw-600">Item #1 Name</td>
                                             <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Unavailable</span></td>
                                             <td>Nov 18</td>
                                             <td><span class="text-success">$12</span></td>
                                          </tr>
                                          <tr>
                                             <td class="fw-600">Item #2 Name</td>
                                             <td><span class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c badge-pill">New</span></td>
                                             <td>Nov 19</td>
                                             <td><span class="text-info">$34</span></td>
                                          </tr>
                                          <tr>
                                             <td class="fw-600">Item #3 Name</td>
                                             <td><span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill">New</span></td>
                                             <td>Nov 20</td>
                                             <td><span class="text-danger">-$45</span></td>
                                          </tr>
                                          <tr>
                                             <td class="fw-600">Item #4 Name</td>
                                             <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Unavailable</span></td>
                                             <td>Nov 21</td>
                                             <td><span class="text-success">$65</span></td>
                                          </tr>
                                          <tr>
                                             <td class="fw-600">Item #5 Name</td>
                                             <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Used</span></td>
                                             <td>Nov 22</td>
                                             <td><span class="text-success">$78</span></td>
                                          </tr>
                                          <tr>
                                             <td class="fw-600">Item #6 Name</td>
                                             <td><span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill">Used</span></td>
                                             <td>Nov 23</td>
                                             <td><span class="text-danger">-$88</span></td>
                                          </tr>
                                          <tr>
                                             <td class="fw-600">Item #7 Name</td>
                                             <td><span class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c badge-pill">Old</span></td>
                                             <td>Nov 22</td>
                                             <td><span class="text-success">$56</span></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <div class="ta-c bdT w-100 p-20"><a href="#">Check all the sales</a></div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white p-20">
                           <div class="layers">
                              <div class="layer w-100 mB-20">
                                 <h6 class="lh-1">Weather</h6>
                              </div>
                              <div class="layer w-100">
                                 <div class="peers ai-c jc-sb fxw-nw">
                                    <div class="peer peer-greed">
                                       <div class="layers">
                                          <div class="layer w-100">
                                             <div class="peers fxw-nw ai-c">
                                                <div class="peer mR-20">
                                                   <h3>32<sup>°F</sup></h3>
                                                </div>
                                                <div class="peer">
                                                   <canvas class="sleet" width="44" height="44"></canvas>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="layer w-100"><span class="fw-600 c-grey-600">Partly Clouds</span></div>
                                       </div>
                                    </div>
                                    <div class="peer">
                                       <div class="layers ai-fe">
                                          <div class="layer">
                                             <h5 class="mB-5">Monday</h5>
                                          </div>
                                          <div class="layer"><span class="fw-600 c-grey-600">Nov, 01 2017</span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="layer w-100 mY-30">
                                 <div class="layers bdB">
                                    <div class="layer w-100 bdT pY-5">
                                       <div class="peers ai-c jc-sb fxw-nw">
                                          <div class="peer"><span>Wind</span></div>
                                          <div class="peer ta-r"><span class="fw-600 c-grey-800">10km/h</span></div>
                                       </div>
                                    </div>
                                    <div class="layer w-100 bdT pY-5">
                                       <div class="peers ai-c jc-sb fxw-nw">
                                          <div class="peer"><span>Sunrise</span></div>
                                          <div class="peer ta-r"><span class="fw-600 c-grey-800">05:00 AM</span></div>
                                       </div>
                                    </div>
                                    <div class="layer w-100 bdT pY-5">
                                       <div class="peers ai-c jc-sb fxw-nw">
                                          <div class="peer"><span>Pressure</span></div>
                                          <div class="peer ta-r"><span class="fw-600 c-grey-800">1B</span></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="layer w-100">
                                 <div class="peers peers-greed ai-fs ta-c">
                                    <div class="peer">
                                       <h6 class="mB-10">MON</h6>
                                       <canvas class="sleet" width="30" height="30"></canvas>
                                       <span class="d-b fw-600">32<sup>°F</sup></span>
                                    </div>
                                    <div class="peer">
                                       <h6 class="mB-10">TUE</h6>
                                       <canvas class="clear-day" width="30" height="30"></canvas>
                                       <span class="d-b fw-600">30<sup>°F</sup></span>
                                    </div>
                                    <div class="peer">
                                       <h6 class="mB-10">WED</h6>
                                       <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                                       <span class="d-b fw-600">28<sup>°F</sup></span>
                                    </div>
                                    <div class="peer">
                                       <h6 class="mB-10">THR</h6>
                                       <canvas class="cloudy" width="30" height="30"></canvas>
                                       <span class="d-b fw-600">32<sup>°F</sup></span>
                                    </div>
                                    <div class="peer">
                                       <h6 class="mB-10">FRI</h6>
                                       <canvas class="snow" width="30" height="30"></canvas>
                                       <span class="d-b fw-600">24<sup>°F</sup></span>
                                    </div>
                                    <div class="peer">
                                       <h6 class="mB-10">SAT</h6>
                                       <canvas class="wind" width="30" height="30"></canvas>
                                       <span class="d-b fw-600">28<sup>°F</sup></span>
                                    </div>
                                    <div class="peer">
                                       <h6 class="mB-10">SUN</h6>
                                       <canvas class="sleet" width="30" height="30"></canvas>
                                       <span class="d-b fw-600">32<sup>°F</sup></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                           <div class="layers">
                              <div class="layer w-100 p-20">
                                 <h6 class="lh-1">Quick Chat</h6>
                              </div>
                              <div class="layer w-100">
                                 <div class="bgc-grey-200 p-20 gapY-15">
                                    <div class="peers fxw-nw">
                                       <div class="peer mR-20"><img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/11.jpg" alt=""></div>
                                       <div class="peer peer-greed">
                                          <div class="layers ai-fs gapY-5">
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mR-10"><small>10:00 AM</small></div>
                                                   <div class="peer-greed"><span>Lorem Ipsum is simply dummy text of</span></div>
                                                </div>
                                             </div>
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mR-10"><small>10:00 AM</small></div>
                                                   <div class="peer-greed"><span>the printing and typesetting industry.</span></div>
                                                </div>
                                             </div>
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mR-10"><small>10:00 AM</small></div>
                                                   <div class="peer-greed"><span>Lorem Ipsum has been the industry's</span></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="peers fxw-nw ai-fe">
                                       <div class="peer ord-1 mL-20"><img class="w-2r bdrs-50p" src="../../../randomuser.me/api/portraits/men/12.jpg" alt=""></div>
                                       <div class="peer peer-greed ord-0">
                                          <div class="layers ai-fe gapY-10">
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mL-10 ord-1"><small>10:00 AM</small></div>
                                                   <div class="peer-greed ord-0"><span>Heloo</span></div>
                                                </div>
                                             </div>
                                             <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                   <div class="peer mL-10 ord-1"><small>10:00 AM</small></div>
                                                   <div class="peer-greed ord-0"><span>??</span></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="p-20 bdT bgc-white">
                                    <div class="pos-r"><input type="text" class="form-control bdrs-10em m-0" placeholder="Say something..."> <button type="button" class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1"><i class="fa fa-paper-plane-o"></i></button></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
               <span>Copyright © 2017 Designed by <a href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
               <script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13" type="631c22687f839c09339e58b6-text/javascript"></script>
               <script type="631c22687f839c09339e58b6-text/javascript">
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                  
                  gtag('config', 'UA-23581568-13');
               </script>
            </footer>
         </div>
      </div>
      <script type="631c22687f839c09339e58b6-text/javascript" src="vendor.js"></script><script type="631c22687f839c09339e58b6-text/javascript" src="bundle.js"></script><script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="631c22687f839c09339e58b6-|49" defer=""></script>
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:34 GMT -->
</html>


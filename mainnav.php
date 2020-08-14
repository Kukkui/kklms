 <?php
 
 echo(" 

    

   <div>
         <div class='sidebar'>
            <div class='sidebar-inner'>
               <div class='sidebar-logo'>
                  <div class='peers ai-c fxw-nw'>
                     <div class='peer peer-greed'>
                        <a class='sidebar-link td-n' href='index.php' class='td-n'>
                           <div class='peers ai-c fxw-nw'>
                              <div class='peer'>
                                 <div class='logo'>
                                    <img src='assets/static/images/logo.png' alt=''>
                                 </div>
                              </div>
                              <div class='peer peer-greed'>
                                 <h5 class='lh-1 mB-0 logo-text'>KKLMS</h5>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class='peer'>
                        <div class='mobile-toggle sidebar-toggle'>
                           <a href='#' class='td-n'>
                           <i class='ti-arrow-circle-left'></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <ul class='sidebar-menu scrollable pos-r'>
                  <li class='nav-item mT-30 active'>
                     <a class='sidebar-link' href='index.php' default>
                     <span class='icon-holder'>
                     <i class='c-blue-500 ti-home'></i> 
                     </span>
                     <span class='title'>Dashboard</span></a>
                  </li>
                  <!-- <li class='nav-item'><a class='sidebar-link' href='email.php'><span class='icon-holder'><i class='c-brown-500 ti-email'></i> </span><span class='title'>Email</span></a></li>
                  <li class='nav-item'><a class='sidebar-link' href='compose.php'><span class='icon-holder'><i class='c-blue-500 ti-share'></i> </span><span class='title'>Compose</span></a></li> -->
                  <li class='nav-item'><a class='sidebar-link' href='calendar.php'><span class='icon-holder'><i class='c-deep-orange-500 ti-calendar'></i> </span><span class='title'>Calendar</span></a></li>
                  <!--<li class='nav-item dropdown'>
                     <a class='dropdown-toggle' href='javascript:void(0);'><span class='icon-holder'><i class='c-orange-500 ti-layout-list-thumb'></i> </span><span class='title'>Files</span> <span class='arrow'><i class='ti-angle-right'></i></span></a>
                     <ul class='dropdown-menu'>
                        <li><a class='sidebar-link' href='basic-table.php'>My Files</a></li>
                        <li><a class='sidebar-link' href='datatable.php'>Course Files</a></li>
                     </ul>
                  </li>-->
                  <li class='nav-item dropdown'>
                     <a class='dropdown-toggle' href='javascript:void(0);'><span class='icon-holder'><i class='c-teal-500 ti-view-list-alt'></i> </span><span class='title'>Courses</span> <span class='arrow'><i class='ti-angle-right'></i></span></a>
                     <ul class='dropdown-menu'>
                        <li class='nav-item dropdown'><a class='sidebar-link' href='basic-table.php'><span>My Courses</span></a></li>
                        <li class='nav-item dropdown'>
                           <a href='javascript:void(0);'><span>Live Courses</span> <span class='arrow'><i class='ti-angle-right'></i></span></a>
                           <ul class='dropdown-menu'>
                              <li><a href='javascript:void(0);'>Zoom Live</a></li>
                              <li><a href='javascript:void(0);'>Google Live</a></li>
                              <li><a href='javascript:void(0);'>Moodle Live</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>

                  <li class='nav-item'><a class='sidebar-link' href='quizzes.php'><span class='icon-holder'><i class='c-light-blue-500 ti-pencil'></i> </span><span class='title'>Quizz</span></a></li>


                  <li class='nav-item'><a class='sidebar-link' href='charts.php'><span class='icon-holder'><i class='c-indigo-500 ti-bar-chart'></i> </span><span class='title'>Grade</span></a></li>
                  
                  <!--<li class='nav-item dropdown'><a class='sidebar-link' href='ui.php'><span class='icon-holder'><i class='c-pink-500 ti-palette'></i> </span><span class='title'>Badges</span></a></li>
                   <li class='nav-item dropdown'><a class='sidebar-link' href='ui.php'><span class='icon-holder'><i class='c-pink-500 ti-palette'></i> </span><span class='title'>UI Elements</span></a></li> -->
                  
                  <!-- <li class='nav-item dropdown'>
                     <a class='dropdown-toggle' href='javascript:void(0);'><span class='icon-holder'><i class='c-purple-500 ti-map'></i> </span><span class='title'>Maps</span> <span class='arrow'><i class='ti-angle-right'></i></span></a>
                     <ul class='dropdown-menu'>
                        <li><a href='google-maps.php'>Google Map</a></li>
                        <li><a href='vector-maps.php'>Vector Map</a></li>
                     </ul>
                  </li> -->
                  <!-- <li class='nav-item dropdown'>
                     <a class='dropdown-toggle' href='javascript:void(0);'><span class='icon-holder'><i class='c-red-500 ti-files'></i> </span><span class='title'>Pages</span> <span class='arrow'><i class='ti-angle-right'></i></span></a>
                     <ul class='dropdown-menu'>
                        <li><a class='sidebar-link' href='404.php'>404</a></li>
                        <li><a class='sidebar-link' href='500.php'>500</a></li>
                        <li><a class='sidebar-link' href='signin.php'>Sign In</a></li>
                        <li><a class='sidebar-link' href='signup.php'>Sign Up</a></li>
                     </ul>
                  </li> -->

                  <li class='nav-item'><a class='sidebar-link' href='chat.php'><span class='icon-holder'><i class='c-deep-purple-500 ti-comment-alt'></i> </span><span class='title'>Chat</span></a></li>
                  "); ?>
 
 <?php 

                                    if($acctypecheck == 'ADMIN'){
                                        echo("<li class='nav-item dropdown'>
                    <a class='dropdown-toggle' href='javascript:void(0);'><span class='icon-holder'><i class='c-red-500 ti-files'></i> </span><span class='title'>Admin</span> <span class='arrow'><i class='ti-angle-right'></i></span></a>
                     <ul class='dropdown-menu'>
                        
                        <li class='nav-item dropdown'>
                           <a class='sidebar-link' href='courses_tools.php'><span class='icon-holder'><i class='c-light-blue-500 ti-pencil'></i> </span><span class='title'>Courses Tools</span></a>
                           <!-- <ul class='dropdown-menu'>
                              <li><a href='javascript:void(0);'>Add Courses</a></li>
                              <li><a href='javascript:void(0);'>Edit Courses</a></li>
                              <li><a href='javascript:void(0);'>Delete Courses</a></li>
                           </ul> -->
                        </li>

                        <li class='nav-item dropdown'>
                           <a class='sidebar-link' href='students_tools.php'><span class='icon-holder'><i class='c-light-blue-500 ti-pencil'></i> </span><span class='title'>Students Tools</span></a>
                           <!-- <ul class='dropdown-menu'>
                              <li><a href='javascript:void(0);'>Add Students</a></li>
                              <li><a href='javascript:void(0);'>Edit Students</a></li>
                              <li><a href='javascript:void(0);'>Delete Students</a></li>
                           </ul> -->
                        </li>

                        <li class='nav-item dropdown'>
                           <a class='sidebar-link' href='quizzes_tools.php'><span class='icon-holder'><i class='c-light-blue-500 ti-pencil'></i> </span><span class='title'>Quizzes Tools</span></a>
                           <!-- <ul class='dropdown-menu'>
                              <li><a href='javascript:void(0);'>Add Quizzes</a></li>
                              <li><a href='javascript:void(0);'>Edit Quizzes</a></li>
                              <li><a href='javascript:void(0);'>Delete Quizzes</a></li>
                           </ul> -->
                        </li>


                     </ul>
                  </li>");
                                    } ?>

                                    <?php echo("
               </ul>
            </div>
         </div>
   ");

   
?>
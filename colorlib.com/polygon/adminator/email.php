

<!DOCTYPE html>
<html>
   <!-- Mirrored from colorlib.com/polygon/adminator/email.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:34 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Email</title>
      <style>#loader{transition:all .3s ease-in-out;opacity:1;visibility:visible;position:fixed;height:100vh;width:100%;background:#fff;z-index:90000}#loader.fadeOut{opacity:0;visibility:hidden}.spinner{width:40px;height:40px;position:absolute;top:calc(50% - 20px);left:calc(50% - 20px);background-color:#333;border-radius:100%;-webkit-animation:sk-scaleout 1s infinite ease-in-out;animation:sk-scaleout 1s infinite ease-in-out}@-webkit-keyframes sk-scaleout{0%{-webkit-transform:scale(0)}100%{-webkit-transform:scale(1);opacity:0}}@keyframes sk-scaleout{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}</style>
      <link href="style.css" rel="stylesheet">
   </head>
   <body class="app">
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
      <script type="2f263a63a8b70be9403dac63-text/javascript">window.addEventListener('load', () => {
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
               <div class="full-container">
                  <div class="email-app">
                     <div class="email-side-nav remain-height ov-h">
                        <div class="h-100 layers">
                           <div class="p-20 bgc-grey-100 layer w-100"><a href="https://colorlib.com/compose" class="btn btn-danger btn-block">New Message</a></div>
                           <div class="scrollable pos-r bdT layer w-100 fxg-1">
                              <ul class="p-20 nav flex-column">
                                 <li class="nav-item">
                                    <a href="javascript:void(0)" class="nav-link c-grey-800 cH-blue-500 active">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-email"></i> <span>Inbox</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-deep-purple-50 c-deep-purple-700">+99</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-share"></i> <span>Sent</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-green-50 c-green-700">12</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-star"></i> <span>Important</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-blue-50 c-blue-700">3</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-file"></i> <span>Drafts</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-amber-50 c-amber-700">5</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-alert"></i> <span>Spam</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-red-50 c-red-700">1</span></div>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="nav-item">
                                    <a href="#" class="nav-link c-grey-800 cH-blue-500">
                                       <div class="peers ai-c jc-sb">
                                          <div class="peer peer-greed"><i class="mR-10 ti-trash"></i> <span>Trash</span></div>
                                          <div class="peer"><span class="badge badge-pill bgc-red-50 c-red-700">+99</span></div>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="email-wrapper row remain-height bgc-white ov-h">
                        <div class="email-list h-100 layers">
                           <div class="layer w-100">
                              <div class="bgc-grey-100 peers ai-c jc-sb p-20 fxw-nw">
                                 <div class="peer">
                                    <div class="btn-group" role="group">
                                       <button type="button" class="email-side-toggle d-n@md+ btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-menu"></i></button> <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-folder"></i></button> <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-tag"></i></button>
                                       <div class="btn-group" role="group">
                                          <button id="btnGroupDrop1" type="button" class="btn cur-p bgc-white no-after dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt"></i></button>
                                          <ul class="dropdown-menu fsz-sm" aria-labelledby="btnGroupDrop1">
                                             <li><a href="#" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-trash mR-10"></i> <span>Delete</span></a></li>
                                             <li><a href="#" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-alert mR-10"></i> <span>Mark as Spam</span></a></li>
                                             <li><a href="#" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-star mR-10"></i> <span>Satar</span></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="peer">
                                    <div class="btn-group" role="group"><button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-left"></i></button> <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-right"></i></button></div>
                                 </div>
                              </div>
                           </div>
                           <div class="layer w-100">
                              <div class="bdT bdB"><input type="text" class="form-control m-0 bdw-0 pY-15 pX-20" placeholder="Search..."></div>
                           </div>
                           <div class="layer w-100 fxg-1 scrollable pos-r">
                              <div class="">
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                                 <div class="email-list-item peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                                    <div class="peer mR-10">
                                       <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input type="checkbox" id="inputCall1" name="inputCheckboxesCall" class="peer"><label for="inputCall1" class="peers peer-greed js-sb ai-c"></label></div>
                                    </div>
                                    <div class="peer peer-greed ov-h">
                                       <div class="peers ai-c">
                                          <div class="peer peer-greed">
                                             <h6><?php echo($accname); ?></h6>
                                          </div>
                                          <div class="peer"><small>1 min ago</small></div>
                                       </div>
                                       <h5 class="fsz-def tt-c c-grey-900">title goes here</h5>
                                       <span class="whs-nw w-100 ov-h tov-e d-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="email-content h-100">
                           <div class="h-100 scrollable pos-r">
                              <div class="bgc-grey-100 peers ai-c jc-sb p-20 fxw-nw d-n@md+">
                                 <div class="peer">
                                    <div class="btn-group" role="group">
                                       <button type="button" class="back-to-mailbox btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-left"></i></button> <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-folder"></i></button> <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-tag"></i></button>
                                       <div class="btn-group" role="group">
                                          <button id="btnGroupDrop1" type="button" class="btn cur-p bgc-white no-after dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-more-alt"></i></button>
                                          <ul class="dropdown-menu fsz-sm" aria-labelledby="btnGroupDrop1">
                                             <li><a href="#" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-trash mR-10"></i> <span>Delete</span></a></li>
                                             <li><a href="#" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-alert mR-10"></i> <span>Mark as Spam</span></a></li>
                                             <li><a href="#" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700"><i class="ti-star mR-10"></i> <span>Satar</span></a></li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="peer">
                                    <div class="btn-group" role="group"><button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-left"></i></button> <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p"><i class="ti-angle-right"></i></button></div>
                                 </div>
                              </div>
                              <div class="email-content-wrapper">
                                 <div class="peers ai-c jc-sb pX-40 pY-30">
                                    <div class="peers peer-greed">
                                       <div class="peer mR-20"><img class="bdrs-50p w-3r h-3r" alt="" src="../../../randomuser.me/api/portraits/men/11.jpg"></div>
                                       <div class="peer">
                                          <small>Nov, 02 2017</small>
                                          <h5 class="c-grey-900 mB-5"><?php echo($accname); ?></h5>
                                          <span>To: <a href="https://colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e1848c80888da1868c80888dcf828e8c">[email&#160;protected]</a></span>
                                       </div>
                                    </div>
                                    <div class="peer"><a href="#" class="btn btn-danger bdrs-50p p-15 lh-0"><i class="fa fa-reply"></i></a></div>
                                 </div>
                                 <div class="bdT pX-40 pY-30">
                                    <h4>Title of this email goes here</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 </div>
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
            <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13" type="2f263a63a8b70be9403dac63-text/javascript"></script>
            <script type="2f263a63a8b70be9403dac63-text/javascript">
               window.dataLayer = window.dataLayer || [];
               function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());
               
               gtag('config', 'UA-23581568-13');
            </script>
         </footer>
      </div>
      </div><script type="2f263a63a8b70be9403dac63-text/javascript" src="vendor.js"></script><script type="2f263a63a8b70be9403dac63-text/javascript" src="bundle.js"></script><script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="2f263a63a8b70be9403dac63-|49" defer=""></script>
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/email.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:34 GMT -->
</html>




<!DOCTYPE html>
<html>
   <!-- Mirrored from colorlib.com/polygon/adminator/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:34 GMT -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <!-- /Added by HTTrack -->
   <head>
      <title>Chat</title>
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
      <script type="fc9ffd69c04eb92ee377f504-text/javascript">window.addEventListener('load', () => {
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
                  <div class="peers fxw-nw pos-r">
                     <div class="peer bdR" id="chat-sidebar">
                        <div class="layers h-100">
                           <div class="bdB layer w-100"><input type="text" placeholder="Search contacts..." name="chatSearch" class="form-constrol p-15 bdrs-0 w-100 bdw-0"></div>
                           <div class="layer w-100 fxg-1 scrollable pos-r">
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/1.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400"><?php echo($accname); ?></h6>
                                    <small class="lh-1 c-green-500">Online</small>
                                 </div>
                              </div>
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/2.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400">Moo Doe</h6>
                                    <small class="lh-1 c-amber-500">Away</small>
                                 </div>
                              </div>
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/3.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400">Adam Jones</h6>
                                    <small class="lh-1 c-grey-500">Offline</small>
                                 </div>
                              </div>
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/4.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400">Mizo Doe</h6>
                                    <small class="lh-1 c-red-500">Busy</small>
                                 </div>
                              </div>
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/1.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400"><?php echo($accname); ?></h6>
                                    <small class="lh-1 c-green-500">Online</small>
                                 </div>
                              </div>
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/2.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400">Moo Doe</h6>
                                    <small class="lh-1 c-amber-500">Away</small>
                                 </div>
                              </div>
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/3.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400">Adam Jones</h6>
                                    <small class="lh-1 c-grey-500">Offline</small>
                                 </div>
                              </div>
                              <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                                 <div class="peer"><img src="../../../randomuser.me/api/portraits/men/4.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                 <div class="peer peer-greed pL-20">
                                    <h6 class="mB-0 lh-1 fw-400">Mizo Doe</h6>
                                    <small class="lh-1 c-red-500">Busy</small>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="peer peer-greed" id="chat-box">
                        <div class="layers h-100">
                           <div class="layer w-100">
                              <div class="peers fxw-nw jc-sb ai-c pY-20 pX-30 bgc-white">
                                 <div class="peers ai-c">
                                    <div class="peer d-n@md+"><a href="#" title="" id="chat-sidebar-toggle" class="td-n c-grey-900 cH-blue-500 mR-30"><i class="ti-menu"></i></a></div>
                                    <div class="peer mR-20"><img src="../../../randomuser.me/api/portraits/men/12.jpg" alt="" class="w-3r h-3r bdrs-50p"></div>
                                    <div class="peer">
                                       <h6 class="lh-1 mB-0"><?php echo($accname); ?></h6>
                                       <i class="fsz-sm lh-1">Typing...</i>
                                    </div>
                                 </div>
                                 <div class="peers"><a href="#" class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title=""><i class="ti-video-camera"></i> </a><a href="#" class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title=""><i class="ti-headphone"></i> </a><a href="#" class="peer td-n c-grey-900 cH-blue-500 fsz-md" title=""><i class="ti-more"></i></a></div>
                              </div>
                           </div>
                           <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r">
                              <div class="p-20 gapY-15">
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
                           </div>
                           <div class="layer w-100">
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
            <script async src="../../../www.googletagmanager.com/gtag/jsa055?id=UA-23581568-13" type="fc9ffd69c04eb92ee377f504-text/javascript"></script>
            <script type="fc9ffd69c04eb92ee377f504-text/javascript">
               window.dataLayer = window.dataLayer || [];
               function gtag(){dataLayer.push(arguments);}
               gtag('js', new Date());
               
               gtag('config', 'UA-23581568-13');
            </script>
         </footer>
      </div>
      </div><script type="fc9ffd69c04eb92ee377f504-text/javascript" src="vendor.js"></script><script type="fc9ffd69c04eb92ee377f504-text/javascript" src="bundle.js"></script><script src="../../../ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="fc9ffd69c04eb92ee377f504-|49" defer=""></script>
   </body>
   <!-- Mirrored from colorlib.com/polygon/adminator/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jul 2020 12:13:35 GMT -->
</html>

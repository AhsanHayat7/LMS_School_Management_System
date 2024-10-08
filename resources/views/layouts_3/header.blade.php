 <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                   <nav class="navbar navbar-expand-lg navbar-light">
                      <div class="full">
                         <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                         <div class="logo_section">
                            <a href="{{route('dashboard.students')}}"><img class="img-responsive" src="{{asset('dashboard3/images/logo/logo.png')}}" alt="#" /></a>
                         </div>
                         <div class="right_topbar">
                            <div class="icon_info">
                               <ul>
                                  <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                  <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                  <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                               </ul>
                               <ul class="user_profile_dd">
                                  <li>
                                     <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset(Auth:: user()->images)}}" alt="#" /><span class="name_user">{{ Auth :: user()->name}}</span></a>
                                     <div class="dropdown-menu">
                                        <a class="dropdown-item" href="profile.html">My Profile</a>
                                        <a class="dropdown-item" href="settings.html">Settings</a>
                                        <a class="dropdown-item" href="help.html">Help</a>
                                        <a class="dropdown-item" href="{{route('dashboard.logout')}}"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                     </div>
                                  </li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </nav>
                </div>

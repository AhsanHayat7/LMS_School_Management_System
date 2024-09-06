<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="{{route('dashboard.students')}}"><img class="logo_icon img-responsive" src="{{asset('dashboard3/images/logo/logo_icon.png')}}" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="{{asset(Auth :: user()->images)}}" alt="#" /></div>
             <div class="user_info">
                <h6>{{Auth :: user()->name}}</h6>
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>Students</h4>
       <ul class="list-unstyled components">
          <li><a href="{{route('dashboard.update.s')}}"><i class="fa fa-table purple_color2"></i> <span>{{Auth:: user()->name}} Update Record</span></a></li>

       {{-- <li>
        <a href="{{route('students.create')}}">
        <i class="fa fa-paper-plane red_color"></i> <span>Create Students</span></a>
     </li> --}}
    </ul>
    </div>
 </nav>

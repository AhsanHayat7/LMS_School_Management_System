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
             <div class="user_img"><img class="img-responsive" src="{{asset('dashboard3/images/layout_img/user_img.jpg')}}" alt="#" /></div>
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
          <li><a href="widgets.html"><i class="fa fa-clock-o orange_color"></i> <span>Widgets</span></a></li>
          <li>
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                <li><a href="icons.html">> <span>Icons</span></a></li>
                <li><a href="invoice.html">> <span>Invoice</span></a></li>
             </ul>
          </li>

       </ul>
    </div>
 </nav>

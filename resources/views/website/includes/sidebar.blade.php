
      <!-- sidebar -->
                       <!-- About Me (Left Sidebar) Start -->
                       <div class="col-md-3">
                        <div class="about-fixed">
                         
                          <div class="my-pic">
                             <img src="{{asset('uploads/'.$setting->image)}}" alt="">
                             <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                              <div id="menu" class="collapse">
                                <ul class="menu-link">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="work.html">Work</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a class="{{Request::routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a></li>
                                    <li><a class="{{Request::routeIs('blog') ? 'active' : ''}}" href="{{route('blog')}}">Blog</a></li>
                                    <li><a class="{{Request::routeIs('about') ? 'active' : ''}}" href="{{route('about')}}">About</a></li>
                                    <li><a class="{{Request::routeIs('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a></li>
                                    @guest
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                    @endguest
                                 </ul>
                              </div>
                             </div>
                           
                           
                           
                           <div class="my-detail">
                           
                             <div class="white-spacing">
                         
                                 <h1>{{$setting->name}}</h1>
                                 <span>{{$setting->job}}</span>
                              
                             </div> 
                            <ul class="social-icon">
                              <li><a href="{{$setting->facebook}}" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="{{$setting->twitter}}" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="{{$setting->instagram}}" target="_blank" class="linkedin"><i class="fa fa-instagram"></i></a></li>
                              <li><a href="{{$setting->youtube}}" target="_blank" class="github"><i class="fa fa-youtube"></i></a></li>
                             </ul>
     
                         </div>
                       </div>
                     </div>
                     <!-- About Me (Left Sidebar) End -->

      {{-- <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Alphayo Blog</a></p>

        <div class="side-links">
          <ul>
            <li><a class="{{Request::routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a></li>
            <li><a class="{{Request::routeIs('blog') ? 'active' : ''}}" href="{{route('blog')}}">Blog</a></li>
            <li><a class="{{Request::routeIs('about') ? 'active' : ''}}" href="{{route('about')}}">About</a></li>
            <li><a class="{{Request::routeIs('contact') ? 'active' : ''}}" href="{{route('contact')}}">Contact</a></li>
            @guest
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
            @endguest
          </ul>
        </div>

        <!-- sidebar footer -->
        <footer class="sidebar-footer">
          <div>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
          </div>

          <small>&copy 2021 Alphayo Wakarindi Blog</small>
        </footer>
      </div>
      <!-- Menu Button -->
      <div class="menuButton">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div> --}}
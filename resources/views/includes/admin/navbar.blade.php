<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-car"></i></i> <span>Rent Car Admin</span></a>
        </div>
        {{--        @if(Route::has('login'))--}}
        {{--            @auth--}}
        {{--                <form method="POST"  action="{{ route('logout') }}">--}}
        {{--                    @csrf--}}

        {{--                    <x-responsive-nav-link :href="route('logout')"--}}
        {{--                                           onclick="event.preventDefault();--}}
        {{--                                        this.closest('form').submit();" class="nav-link nav-link-2" >--}}
        {{--                        {{ __('Log Out') }}--}}
        {{--                    </x-responsive-nav-link>--}}
        {{--                </form>--}}
        {{--            @else--}}

        {{--                <li class="nav-item">--}}
        {{--                    <a href="{{ route('login') }}" class="nav-link nav-link-2">Log in</a>--}}
        {{--                </li>--}}
        {{--                @if (Route::has('register'))--}}
        {{--                    <li class="nav-item">--}}

        {{--                        <a href="{{ route('register') }}" class="nav-link nav-link-3">Register</a>--}}
        {{--                    </li>      @endif--}}
        {{--            @endauth--}}
        {{--        @endif--}}
        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="admin/assets/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                {{auth()->user()->name}}
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('users.index') }}">Users List</a></li>
                            <li><a href="{{ route('users.create') }}">Add User</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('category.create') }}">Add Category</a></li>
                            <li><a href="{{ route('category.index') }}">Categories List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Cars <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('cars.create') }}">Add Car</a></li>
                            <li><a href="{{ route('cars.index') }}">Cars List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Testimonials <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('testimonials.create') }}">Add Testimonials</a></li>
                            <li><a href="{{ route('testimonials.index') }}">Testimonials List</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('messages.index') }}">Messages</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
        </div>
        <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                       data-toggle="dropdown" aria-expanded="false">
                        <img src="../admin/assets/images/img.jpg" alt=""> {{auth()->user()->name}}
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('users.show',auth()->user()->id)}}"> Profile</a>


                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        {{--                        <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>--}}
                    </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                       data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">{{count($messagess)}}</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                        @foreach($messagess as $message)
                            <li class="nav-item">
                                <a class="dropdown-item" href="{{route('messages.show',$message->id)}}">
                                    <span class="image"><img src="../admin/assets/images/img.jpg" alt="Profile Image"/></span>
                                    <span>
                            <span>{{$message->fullname}}</span>
                            <span class="time">{{$message->created_at}}</span>
                          </span>
                                    <span class="message">
                                    {{ substr($message->messagecontent, 0,  30) }}

                          </span>
                                </a>
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <div class="text-center">
                                <a class="dropdown-item" href="../messages">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->

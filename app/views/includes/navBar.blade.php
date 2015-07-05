<!-- ******HEADER****** -->
<header class="header">

    <div class="header-main container">
        <h1 class="logo col-md-12 col-sm-12" align="center">
            <a href="home"><img width="90%" id="logo" src="{{asset('assets/images/mc.jpg')}}" alt="Logo"></a>
        </h1><!--//logo-->
        
    </div><!--//header-main-->
</header><!--//header-->

<!-- ******NAV****** -->
<nav class="main-nav" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!--//nav-toggle-->
        </div><!--//navbar-header-->
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li {{ (Request::is('/') || Request::is('home*') ? ' class="active nav-item"' : '') }} class="nav-item"><a href="{{route('home.index')}}">Home</a></li>
                <li {{ (Request::is('about*') ? ' class="active nav-item"' : '') }} class="nav-item" ><a href="{{route('about')}}">About Us</a></li>
                <li  {{ (Request::is('employee*') || Request::is('vice*') || Request::is('principal*') || Request::is('student*') || Request::is('teacher*') || Request::is('holiday*') || Request::is('academic*') || Request::is('routine*') ? ' class="active nav-item"' : '') }} class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Academic<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('principal.index')}}">Principal's Information</a></li>
                        <li><a href="{{route('viceprincipal.index')}}">Vice Principal's Information</a></li>
                        <li><a href="{{route('teacher.index')}}">Teachers Information</a></li>
                        <li><a href="{{route('student.index')}}">Students Infromation</a></li>
                        <li><a href="{{route('holiday.index')}}">Holiday  Calendar</a></li>
                        <li><a href="{{route('academic.index')}}">Academic Calendar</a></li>
                        <li><a href="{{route('routine.index')}}">Class Routiner</a></li>
                        <li><a href="{{route('employee.index')}}">3rd & 4th Class Employee Information</a></li>
                    </ul>
                </li>
                

                <!-- Department Get Hard Code -->
                <?php
                $departments = Department::all();

                ?>
                <li {{ (Request::is('department*') ? ' class="active nav-item"' : '') }} class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Departments<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">

                        @foreach($departments as $dept)
                        <li><a href="{{route('department.show',$dept->key)}}">{{$dept->name}}</a></li>
                        @endforeach
                    </ul>
                </li>



                <li {{ (Request::is('hostel*') || Request::is('library*') ? ' class="active nav-item"' : '') }} class="nav-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Facilities <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('hostel')}}">Hostel</a></li>
                        <li><a href="{{route('library')}}">Library</a></li>
                    </ul>
                </li>
                <li {{ (Request::is('notice*') ? ' class="active nav-item"' : '') }} class="nav-item"><a href="{{route('notice.index')}}">Notices</a></li>
                <li {{ (Request::is('event*') ? ' class="active nav-item"' : '') }} class="nav-item"><a href="{{route('event.index')}}">Events</a></li>
                <li {{ (Request::is('admission*') ? ' class="active nav-item"' : '') }} class="nav-item"><a href="{{route('admission.index')}}">Admission</a></li>
                <li {{ (Request::is('result*') ? ' class="active nav-item"' : '') }} class="nav-item"><a href="{{route('result.index')}}">Result</a></li>


                <li class="nav-item"><a href="contact">Contact</a></li>
            </ul><!--//nav-->
        </div><!--//navabr-collapse-->
    </div><!--//container-->
</nav><!--//main-nav-->
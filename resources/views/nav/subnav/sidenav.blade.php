<nav class="sidenav">
    <a href="/" class="nav-brand">
        <img src="{{asset('img/logo_blue.png')}}" alt="">
    </a>
    <ul class="nav-menu">
        <li class="nav-list">
            <a href=""><i class="fa fa-home"></i> Home</a>
        </li>
        @if(Auth::check())
            <li class="nav-list">
                <a href=""><i class="fa fa-star"></i> Tasks</a>
            </li>
            <li class="nav-list">
                <a href="{{route('tasks.create')}}"><i class="fa fa-plus"></i>Add Tasks</a>
            </li>
            <li class="nav-list">
                <a href=""><i class="fa fa-file-excel-o"></i>Reports</a>
            </li>
            <li class="nav-list">
                <a href=""><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <li class="nav-list">
                <a href=""><i class="fa fa-check"></i>Completed Tasks</a>
            </li>
            <li class="nav-list">
                <a href=""><i class="fa fa-bell-o"></i>Pending Tasks</a>
            </li>
            <li class="nav-list">
                <a href=""><i class="fa fa-trash-o"></i>Deleted</a>
            </li>
            <li class="nav-list">
                <a href="{{route('auth.signout')}}"><i class="fa fa-sign-in "></i>Logout</a>
            </li>
        @endif
        @if(!Auth::check())
            <li class="nav-list">
                <a href="{{route('auth.signin')}}"><i class="fa fa-sign-in "></i>Login</a>
            </li>
            <li class="nav-list">
                <a href="{{route('auth.signup')}}"><i class="fa fa-sign-in "></i>Sign up</a>
            </li>
        @endif
    </ul>
</nav>
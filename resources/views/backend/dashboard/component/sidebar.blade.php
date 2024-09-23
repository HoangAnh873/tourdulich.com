@php
    $segment = request()->segment(1);
@endphp
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="backend/img/avatar.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Hoang Anh</strong>
                         </span> <span class="text-muted text-xs block">Admin<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ ($segment == 'user') ? 'active' : '' }}">
                <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Quản lí Thành Viên</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('user.index') }}">Thành Viên</a></li>
                </ul>
            </li>
            <li class="{{ ($segment == 'language') ? 'active' : '' }}">
                <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Quản lí Cấu Hình</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ route('language.index') }}">Ngôn ngữ</a></li>
                </ul>
            </li>
            
        </ul>

    </div>
</nav>
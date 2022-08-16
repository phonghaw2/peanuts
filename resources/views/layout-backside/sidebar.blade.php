

<nav class="sidebar vertical-scroll dark_sidebar ps-container ps-theme-default ps-active-y" data-ps-id="b2030928-623a-f174-5ee2-7ae130b2b976">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="img/logo_white.png" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu" class="metismenu">
        <li class="sidebar_menu_li" >
            <a class="has-arrow" href="{{ route('admin.dashboard') }}" aria-expanded="true">
                <div class="icon_menu">
                    <img src="img/menu-icon/dashboard.svg" alt="">
                </div>
                <span>Dashboard</span>
            </a>
        </li>


        <li class="sidebar_menu_li">
            <a href="{{ route('admin.users.index') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class='bx bx-user'></i>
                </div>
                <span>Users</span>
            </a>
        </li>
        <li class="sidebar_menu_li">
            <a href="{{ route('admin.posts.index') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class='bx bx-news' ></i>
                </div>
                <span>Posts</span>
            </a>
        </li>
        <li class="sidebar_menu_li">
            <a href="{{ route('admin.posts.index') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class='bx bx-news' ></i>
                </div>
                <span>Apps</span>
            </a>
        </li>
        <li class="sidebar_menu_li">
            <a href="{{ route('admin.signup') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class='bx bxs-user-account'></i>
                </div>
                <span>Sign up <br> (for admin)</span>
            </a>
        </li>
        <li class="sidebar_menu_li">
            <a href="{{ route('admin.logout') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class='bx bx-door-open' ></i>
                </div>
                <span>Log out</span>
            </a>
        </li>
        <li class="sidebar_menu_li">
            <a href="{{ route('admin.password') }}" aria-expanded="false">
                <div class="icon_menu">
                    <i class='bx bx-door-open' ></i>
                </div>
                <span>Change Password</span>
            </a>
        </li>

    </ul>
</nav>

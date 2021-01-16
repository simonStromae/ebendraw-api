<!-- Sidebar -->
<nav id="sidebar" class="sidebar" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
        <header class="logo d-none d-md-block">
            <a href="#"><span class="font-weight-bold">EbenDraw</span> <small>Dashboard</small></a>
        </header>
        <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
             looks good, so adding it and enhancing with notifications -->
        <div class="sidebar-status d-md-none">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar float-right">
                            <img class="rounded-circle" src="/master/demo/img/people/a5.jpg" alt="...">
                        </span>
                <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                     should be used with bg-* and text-* classes for colors -->
                <span class="circle bg-success fw-bold">
                            13
                        </span>
                &nbsp;
                Philip <strong>Smith</strong>
            </a>
            <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
        </div>
        <!-- main notification links are placed inside of .sidebar-nav -->
        <ul class="sidebar-nav">
            <li class=" active ">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#">
                            <span class="icon">
                                <i class="fi flaticon-home"></i>
                            </span>
                    Tableau de bord
                </a>
            </li>
        </ul>
        <!-- every .sidebar-nav may have a title -->
        <h5 class="sidebar-nav-title">Général</h5>
        <ul class="sidebar-nav">
            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#">
                            <span class="icon">
                                <i class="fi flaticon-controls"></i>
                            </span>
                    Tags
                </a>
            </li>
            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#">
                            <span class="icon">
                                <i class="fi flaticon-equal-1"></i>
                            </span>
                    Illustrations
                </a>
            </li>
        </ul>

        <h5 class="sidebar-nav-title">Utilisateurs</h5>
        <ul class="sidebar-nav">
            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#">
                            <span class="icon">
                                <i class="fi flaticon-route"></i>
                            </span>
                    Rôles
                </a>
            </li>
            <li class="">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#">
                            <span class="icon">
                                <i class="fi flaticon-users"></i>
                            </span>
                    Utilisateurs
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- end Sidebar -->

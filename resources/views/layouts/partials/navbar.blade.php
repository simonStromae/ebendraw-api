<!-- Navbar -->
<nav class="page-controls navbar navbar-dashboard">
    <div class="container-fluid">
        <!-- .navbar-header contains links seen on xs & sm screens -->
        <div class="navbar-header mr-md-3">
            <ul class="nav navbar-nav">
                <li class="nav-item">
                    <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                    <a class="d-none d-lg-block nav-link" id="nav-state-toggle" href="#">
                        <i class="fi flaticon-menu-2"></i>
                    </a>
                    <!-- shown on xs & sm screen. collapses and expands navigation -->

                    <a class="d-lg-none nav-link" id="nav-collapse-toggle" href="#">
                        <span class="square square-lg d-md-none"><i class="fi flaticon-menu-2"></i></span>
                        <i class="fi flaticon-menu-2 d-none d-md-block"></i>
                    </a>
                </li>
            </ul>
            <!-- xs & sm screen logo -->
            <a class="navbar-brand d-md-none" href="#">
                <i class="fa fa-circle text-danger"></i>
                &nbsp;
                EbenDraw
                &nbsp;
                <i class="fa fa-circle text-primary"></i>
            </a>
        </div>

        <!-- this part is hidden for xs screens -->
        <div class="navbar-header mobile-hidden">
            <!-- search form! link it to your search server -->
            <form class="navbar-form" role="search">
                <div class="form-group">
                    <div class="input-group input-group-no-border ml-4">
                        <input class="form-control" id="main-search" type="text" placeholder="Rechercher">
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-search"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav float-right">
                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle no-caret nav-link" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false" data-position="bottom-middle-aligned" data-disable-interaction="false">
                        <span class="thumb-sm avatar float-left">
                            <img class="rounded-circle" src="/master/demo/img/people/a5.jpg" alt="...">
                        </span>
    &nbsp;                   &nbsp;
                        Simon <strong>Stromae</strong>&nbsp;
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a class="dropdown-item" href="#"><i class="glyphicon glyphicon-user"></i> &nbsp; Mon
                                Compte</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Mes illustration &nbsp;&nbsp;<span
                                    class="badge badge-pill bg-danger animated bounceIn">9</span></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><i class="la la-sign-out"></i> &nbsp; Se Déconnecter</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end Navbar -->

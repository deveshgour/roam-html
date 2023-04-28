<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo IMAGES_URL ?>/logo.png" class="img-fluid" alt="logo"/>
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" >
                        <em class="icon-bell-icon"></em>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="toggleSideMenu()"> <em class="icon-menu-icon"></em></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="sideMenu">
    <a class="sideMenu_close" onclick="toggleSideMenu()"><em class="icon-close-icon"></em></a>
    <h2>Navigation</h2>
    <ul class="list-unstyled">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Contact Info</a></li>
        <li><a href="javascript:;">Settings</a></li>
        <li><a href="javascript:;">FAQ</a></li>
        <li><a href="javascript:;">Shop</a></li>
    </ul>
    <a href="javascript:;" class="sideMenu_logout">Logout</a>
</div>
<div class="backdrop"></div>
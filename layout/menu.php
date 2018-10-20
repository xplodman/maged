<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['maged_sms']['user_nickname']?></strong>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="login.php">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    Maged
                </div>
            </li>
            <li class="active">
                <a href="index.php"><i class="fa fa-home"></i> <span class="nav-label">Index</span>  </a>
            </li>
        </ul>

    </div>
</nav>

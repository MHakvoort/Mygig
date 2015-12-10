<!--header start-->

<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
            <i class="fa fa-bars"></i></div>
    </div>

    <!--logo start-->
    <a href='?controller=posts&action=index' class="logo">My <span class="lite">GIG</span></a>
    <!--logo end-->

    <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
            <li>
                <form class="navbar-form">
                    <input class="form-control" placeholder="Search" type="text">
                </form>
            </li>
        </ul>
        <!--  search form end -->
    </div>

    <div class="top-nav notification-row">
        <!-- notification dropdown start-->
        <ul class="nav pull-right top-menu">

            <!-- inbox notification start-->
            <li id="mail_notificatoin_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <i class="icon-envelope-l"></i>
                    <span class="badge bg-important">1</span>
                </a>
                <ul class="dropdown-menu extended inbox">
                    <div class="notify-arrow notify-arrow-blue"></div>
                    <li>
                        <p class="blue">Je hebt 1 nieuw bericht</p>
                    </li>
                    <li>
                        <a href="#">
                            <span class="photo"><img alt="avatar" src="content/images/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    </span>
                                    <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">Bekijk alle berichten</a>
                    </li>
                </ul>
            </li>
            <!-- inbox notificatoin end -->

            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="/content/images/avatar1_small.jpg">
                            </span>
                    <span class="username">Jenifer Smith</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>
                    <li class="eborder-top">
                        <a href="#"><i class="icon_profile"></i> Mijn Profiel</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon_mail_alt"></i> Mijn Inbox</a>
                    </li>
                    <li>
                        <a href="?controller=login&action=logout"><i class="icon_key_alt"></i> Uitloggen</a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
    </div>
</header>
<!--header end-->
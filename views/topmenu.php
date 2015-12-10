<!--header start-->
<header class="header dark-bg">
    <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom">
            <i class="fa fa-bars"></i></div>
    </div>

    <!--logo start-->
    <a href='?controller=dashboard&action=index' class="logo">My <span class="lite">GIG</span></a>
    <!--logo end-->

    <?php require_once('views/default/search.php'); ?>

    <div class="top-nav notification-row">
        <!-- notification dropdown start-->
        <ul class="nav pull-right top-menu">

            <?=(isset($_SESSION['user_id'])) ? require_once('views/default/messages.php') : '' ?>

            <?php if(isset($_SESSION['user_id'])){
                require_once('views/default/user_data.php'); }
            else {
                require_once('views/default/no_user_data.php');
            } ?>
        </ul>
    </div>
</header>
<!--header end-->
<?php
    if(isset($_GET['controller'])) {
        $controller = $_GET['controller'];
    }

    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    }
?>

<div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa fa-bars"></i> Pages</h3>
    <ol class="breadcrumb">
        <li><i class="fa fa-home"></i><a href="/">Home</a></li>

        <?php if(isset($controller)) { ?>
            <li><i class="fa fa-bars"></i><?=$controller?></li>
        <?php } if(isset($action)) { ?>
            <li><i class="fa fa-square-o"></i><?=$action?></li>
        <?php } ?>

    </ol>
</div>
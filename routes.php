<?php
session_start();

function __construct()
{
    if (isset($_SESSION['user_id'])) {
        $this->user = User::find($_SESSION['user_id']);
    }
}

function call($controller, $action)
{
    require_once('controllers/' . $controller . '_controller.php');

    switch ($controller) {
        case 'login':
            // we need the model to query the database later in the controller
            require_once('models/user.php');
            $controller = new LoginController();
            break;

        case 'register':
            // we need the model to query the database later in the controller
            require_once('models/user.php');
            $controller = new RegisterController();
            break;

        case 'dashboard':
            require_once('models/user.php');
            $controller = new DashboardController();
            break;

        case 'event':
            require_once('models/event.php');
            $controller = new EventController();
            break;

        case 'band':
            require_once('models/band.php');
            $controller = new BandController();
            break;

        case 'user':
            require_once('models/user.php');
            $controller = new UserController();
            break;

        case 'pages':
            $controller = new PagesController();
            break;

        case 'posts':
            // we need the model to query the database later in the controller
            require_once('models/post.php');
            $controller = new PostsController();
            break;
    }

    $controller->{$action}();
}

// we're adding an entry for the new controller and its actions
$controllers = array(
    'pages'     => ['home', 'error'],
    'posts'     => ['index', 'show'],
    'login'     => ['index'],
    'dashboard' => ['index'],
    'register'  => ['index'],
    'event'     => ['index'],
    'band'      => ['index'],
    'user'      => ['index']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>
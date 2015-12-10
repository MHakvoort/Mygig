<?php
class DashboardController {
    public function index() {
        $user = User::find(1);
        require_once('views/dashboard/index.php');
    }

    public function show() {
        // we expect a url of form ?controller=posts&action=show&id=x
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_GET['id']))
            return call('pages', 'error');

        // we use the given id to get the right post
        $post = Post::find($_GET['id']);
        require_once('views/posts/show.php');
    }
}
?>
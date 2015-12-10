<?php
class LoginController {
    public function index() {
        $first_name = 'Jon';
        $last_name  = 'Snow';
        require_once('views/login/index.php');
    }
}
?>
<?php

class User
{
    // we define 3 attributes
    // they are public so that we can access them using $user->first_name directly
    public $user_id;
    public $first_name;
    public $last_name;

    public function __construct($user_id, $first_name, $last_name)
    {
        $this->user_id = $user_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public static function all()
    {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM users');

        // we create a list of User objects from the database results
        foreach ($req->fetchAll() as $user) {
            $list[] = new User($user['user_id'], $user['first_name'], $user['last_name']);
        }

        return $list;
    }

    public static function find($id)
    {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM users WHERE user_id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $user = $req->fetch();

        return new User($user['user_id'], $user['first_name'], $user['last_name']);
    }
}

?>
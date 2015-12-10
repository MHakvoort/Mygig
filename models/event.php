<?php

class Event
{
    // we define 2 attributes
    // they are public so that we can access them using $band->name directly
    public $event_id;
    public $name;

    public function __construct($event_id, $name)
    {
        $this->event_id = $event_id;
        $this->name = $name;
    }

    public static function all()
    {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM events');

        // we create a list of Band objects from the database results
        foreach ($req->fetchAll() as $event) {
            $list[] = new Event($event['event_id'], $event['name']);
        }

        return $list;
    }

    public static function find($id)
    {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM events WHERE event_id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $event = $req->fetch();

        return new Event($event['event_id'], $event['name']);
    }
}
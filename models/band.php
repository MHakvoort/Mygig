<?php

class Band
{
    // we define 2 attributes
    // they are public so that we can access them using $band->name directly
    public $band_id;
    public $name;

    public function __construct($band_id, $name)
    {
        $this->band_id = $band_id;
        $this->name = $name;
    }

    public static function all()
    {
        $list = [];
        $db = Db::getInstance();
        $req = $db->query('SELECT * FROM bands');

        // we create a list of Band objects from the database results
        foreach ($req->fetchAll() as $band) {
            $list[] = new Band($band['band_id'], $band['name']);
        }

        return $list;
    }

    public static function find($id)
    {
        $db = Db::getInstance();
        // we make sure $id is an integer
        $id = intval($id);
        $req = $db->prepare('SELECT * FROM bands WHERE band_id = :id');
        // the query was prepared, now we replace :id with our actual $id value
        $req->execute(array('id' => $id));
        $band = $req->fetch();

        return new Band($band['band_id'], $band['name']);
    }
}
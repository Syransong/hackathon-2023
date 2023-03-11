<?php

class Project {
    static protected $db;

    public $id;
    public $project_title;
    public $project_tags;
    public $project_image;
    public $featured;
    public $user_id;

    static public function set_db($db) {
        self::$db = $db;
    }

    
}

?>
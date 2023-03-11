<?php

class Mentor {
    static protected $db;

    public $id;
    public $name;
    public $user_bio;
    public $job_title;

    static public function set_db($db) {
        self::$db = $db;
    }

    public function __construct($props = []) {
        $this->name = $props['name'] ?? null;
        $this->user_bio = $props['user_bio'] ?? null;
        $this->job_title = $props['job_title'] ?? null;
    }
}
?>

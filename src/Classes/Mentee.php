<?php 

class Mentee {
    static protected $db;

    public $id;
    public $name;
    public $user_bio;
    public $target_areas;

    static public function set_db($db) {
        self::$db = $db;
    }

    static public function find_by_id($id){
        $sql = "SELECT * FROM mentee WHERE id='{$id}'";
        $result = self::$db->query($sql);
        return $result->fetch_assoc();
    }

    public function __construct($props = []){
        $this->name = $props['name'] ?? null;
        $this->user_bio = $props['user_bio'] ?? null;
        $this->target_areas = $props['target_areas'] ?? null;
    }

    

}

?>
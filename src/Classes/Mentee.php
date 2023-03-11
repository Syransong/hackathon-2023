<?php 

class Mentee {

    public $id;
    public $name;
    public $user_bio;
    public $target_areas;
    public $projects;

    public function __construct($props = []){
        $this->name = $props['name'] ?? null;
        $this->user_bio = $props['user_bio'] ?? null;
        $this->target_areas = $props['target_areas'] ?? null;
        $this->projects = $props['projects'] ?? null;
    }

}

?>
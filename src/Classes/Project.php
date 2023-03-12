<?php

class Project {
    public $name;
    public $tags;
    public $image_url;
    public $featured;

    public function __construct ($props = []){
        $this->name = $props['name'] ?? null;
        $this->tags = $props['tags'] ?? null;
        $this->image_url = $props['image_url'] ?? null;
        $this->featured = $props['featured'] ?? null;
    }
}
?>
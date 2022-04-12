<?php

class Publication{
    public $id;
    public $h1;
    public $short_content;
    public $content;
    public $category_id;
    public $author_id;
    public $date;
    public $preview;
    public $status;
    public $type;
    
    public function __construct($row) {
        $this->id = $row['id'];
        $this->h1 = $row['h1'];
        $this->short_content = $row['short_content'];
        $this->content = $row['content'];
        $this->category_id = $row['category_id'];
        $this->author_id = $row['author_id'];
        $this->date = $row['date'];
        $this->preview = $row['preview'];
        $this->status = $row['status'];
        $this->type = $row['type'];
    }
}

class News_category extends Publication {
    public function printItem(){
        echo "<br>".$this->h1;
        echo "<br>".$this->date;
        echo "<hr>";
    }
}

class Info_category extends Publication {
    public function printItem(){
        echo "<br>".$this->h1;
        echo "<br>".$this->short_content;
        echo "<hr>";
    }
}

class Photo_category extends Publication {
    public function printItem(){
        echo "<br>".'<img src=".'.$this->preview.'">';
        echo $this->content;
        echo "<hr>";
    }
}


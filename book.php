<?php
class Book {
    public $title;
    public $author;
    public $pages;
    public $currentPage;


    public function __construct($title, $author, $pages) {
        $this->title = $title;
        $this->author = $author;
        $this->pages = $pages;
        $this->currentPage = 0; 
    }


    public function read($pages) {
        $this->currentPage += $pages;
        
        if ($this->currentPage > $this->pages) {
            $this->currentPage = $this->pages;
        }
         return $this; 
    }

    public function getProgress() {
        if ($this->pages == 0) {
            return "0%";
        }
        
        $percent = ($this->currentPage / $this->pages) * 100;
        return "Прочитано " . round($percent) . "%";
    }

    public function getInfo() {
        return $this->title . " - " . $this->author . ", " . $this->pages . " страниц";
    }
}

$book = new Book("Война и мир", "Л. Толстой", 1000);
echo $book->getInfo();
$book->read(250);
echo $book->getProgress();
?>
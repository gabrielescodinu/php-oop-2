<?php

include_once __DIR__ . '/articolo.php';

class Post extends Articolo {
    public $autore;

    public function __construct(string $autore){
        $this->autore = $autore;
    }
}

$post1 = new Post('Mario Rossi');
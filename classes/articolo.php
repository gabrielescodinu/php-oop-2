<?php

class Articolo {
    public $titolo;
    public $testo;
    public $categoria;
    public $data;

    public function __construct (string $titolo, string $categoria) {
        $this -> titolo = $titolo;
        $this -> categoria = $categoria;
    }
}
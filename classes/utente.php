<?php

class Utente {
    public $nome;
    public $cognome;
    public $post_generati;
    public $risposte;

    public function __construct (string $nome, string $cognome, int $post_generati, int $risposte) {
        $this -> nome = $nome;
        $this -> cognome = $cognome;
        $this -> post_generati = $post_generati;
        $this -> risposte = $risposte;
    }
}
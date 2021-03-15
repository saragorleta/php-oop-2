<?php

class User2 extends User {
    public $nascita;


    public function __construct ($_nome, $_cognome, $_email, $_nascita){
        parent::__construct ($_nome, $_cognome, $_email);
        $this->nascita= $_nascita;
    }
}
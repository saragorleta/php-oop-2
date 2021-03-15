<?php
class User {

    public $id;
    public $nome;
    public $cognome;
    public $email;
    public $password;


    public function __construct($_nome, $_cognome, $_email) {
        $this->nome= $_nome;
        $this->cognome= $_cognome;
        $this->email= $_email;

    }
    public function setPassword ($password){
          if(is_numeric($password) ){
             $this->password= 'inserisci anche delle lettere';

        } else {
            $this->password= 'password inserita correttamente';
        }
       
    }

    public function getPassword(){
        return $this->password;
    }
}
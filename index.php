<?php

require 'User.php';
require 'User2.php';

//RICHIAMO COSTRUTTORE

$user1= new User('','Gorleta','sarag@gmail.com');
$user1->nome= 'Sara';

var_dump($user1);

//RICHIAMO METODO SET E GET

$user1->setPassword('ciao10');
$inserisciPsw = $user1->getPassword();
echo ( $inserisciPsw);

//RICHIAMO CLASSE ESTESA

$nascitaEstensione= new User2('Mario','Rossi', 'mr@gmail.com','15.06.1980');
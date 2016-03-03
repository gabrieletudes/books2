<?php
//requettes http

//se connecter a la base de donne
//PDO fait le travaille pour nous
//c'est une class
//Prototypes en javascrip

//new pour l'inteantacion
//stcocker dans une variable
/*Le constructeur est automatiquement executer quand on fait new

    Les parametres dsn (addrese base de donne, nom et password)
*/
$cn = new PDO('mysql:dbname=bibliot;host=localhost', 'root','root');

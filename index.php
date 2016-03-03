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
    query ne retourne pas le resultat
    On ne doit pas stocker

    sprintf; des jocker sprinte
*/

/*DEmmarrer la connection*/
$dbConfig = parse_ini_file('db.ini');
/*nous permet de choisir de tableaus de objet*/
$pdoOptions = [
    PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

];

try{
    $dsn = sprintf('%s:dbname=%s;host=%s', $dbConfig['driver'], $dbConfig['dbname'], $dbConfig['host']);

    $cn = new PDO($dsn, $dbConfig['username'], $dbConfig['password'], $pdoOptions);

    $cn->exec('SET CHARACTER SET UTF8');

    $cn->exec('SET NAMES UTF8');
}catch(PDOException $exception){
    // redirection vers une page pour afficher une erreur relative à la connexion
    die($exception->getMessage());

}
/**/
$sqlBooks = 'SELECT * FROM books';

$pdoSt = $cn->query($sqlBooks);

$books = $pdoSt->fetchAll();
/*3) vue */
include 'vieuw.php';
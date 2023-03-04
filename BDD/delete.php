<?php 

$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$id=7;

$sql = $pdo->prepare("DELETE  FROM `clientes` WHERE id=?");


//segurança com sql injector
if($sql->execute(array($id))){
    echo'Deu certo';

}else{
    echo 'Deu ruim';
}


?>
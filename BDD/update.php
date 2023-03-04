<?php

$pdo =new PDO('mysql:host=localhost;dbname=modulo_8','root','');

$id =5;

$sql = $pdo-> prepare("UPDATE `clientes` SET nome ='Uziel' WHERE id =$id");

if($sql->execute()){
   echo'Deu bom';

}else{
   echo'deu ruim';
}
?>
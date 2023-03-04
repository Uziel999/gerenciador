<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql -hcontainers-us-west-112.railway.app -uroot -pDIPM5rcdRjD8Kvo79J0N --port 6770 --protocol=TCP railway');

if (isset($_POST['açao'])) {

   $nome = $_POST['nome'];
   $sobrenome = $_POST['sobrenome'];
   $momento = date('Y-m-d H:i:s');

   $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
   $sql->execute(array($nome, $sobrenome, $momento));
   echo 'Cliente inserido com sucesso';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro de clientes</title>
</head>

<body>

   <form method="post">
      <label for="">Nome</label>
      <input type="text" name="nome" required>
      <label for="">Sobre Nome</label>
      <input type="text" name="sobrenome" required>

      <input type="submit" name="açao" value="Enviar">



   </form>

</body>

</html>
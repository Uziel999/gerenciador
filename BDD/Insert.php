    <?php
    $host = "localhost";
    $dbname = "modulo_8";
    $user = "root";
    $password = "";
    

    $pdo = new PDO("mysql:host=$host;dbname=" . $dbname,$user,$password);

    $sql =$pdo ->prepare("INSERT INTO `clientes` VALUES (null,'Uziel','Inacio','2022-12-31
    11:00:00')");
    
    $sql->execute();


   
    ?>
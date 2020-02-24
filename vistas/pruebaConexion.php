<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prueba</title>
    </head>
    <body>
        <?php
        require_once '../util/ConexionBD.php';
        $object = new ConexionBD();
        $cn = $object->getConexionBD();        
        $sql="select * from cliente where nombres = 'Joselyn';";
        $rs= mysqli_query($cn,$sql);
        var_dump($rs);
        ?>
    </body>
</html>

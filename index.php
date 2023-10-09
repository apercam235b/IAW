<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
            <?php
                function saludo($nombre="", $ciudad="", $año="") {
                echo '<div>' . $nombre . ' nació en ' . $ciudad . ' en el año ' . $año;
                }
                // llamada a la funcion
                $nombre="Alvaro";
                saludo($nombre,'Salamanca',1992);
                saludo('Jesus','Granada',2004); 
            ?>

       
    </body>
</html>

<?php

class Car{

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    
    function moveWheels(){
        echo "Wheels move";
    }
}

$bmw = new Car();

$bmw->moveWheels();

echo $bmw->wheels;



?>




















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>    
<body>
    

</body>
</html>
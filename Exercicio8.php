<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     $horas = $_GET['horas'];
       $sueldototal=($horas*12);
        echo "El trabajador cobrará $sueldototal por trabajar $horas horas"
    ?>
</body>
</html>
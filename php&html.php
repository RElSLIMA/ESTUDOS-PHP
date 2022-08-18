<?php
$array = [
    "celular" => 998237600,
    "telefone" => 33212502,
    "idade" => 22,
    "nome" => "gabriel"
];
?>

<html>
    <head></head>
    <body>
        <h1> MINHAS INFORMAÇÕES </h1>
<br>

 <h4>Meu nome: <?php echo $array ["nome"]; ?></h4>
 <br>
 <h4>Minha idade: <?php echo $array ["idade"]; ?></h4>
 <br>
 <h4>Meu celular: <?php echo $array ["celular"]; ?></h4>
 <br>
 <h4>Meu telefone: <?php echo $array ["telefone"]; ?></h4>
 <br>

    </body>
</html>



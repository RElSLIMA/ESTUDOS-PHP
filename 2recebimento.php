<?php
// HTTP - GET (informação na URL) e POST (informação omitida)
?>

<html>
    <head></head>
    <body>
        <h2>SEUS DADOS:</h2>
       
        <h4>Seu nome é: <?php echo $_POST['nome']?></h4>
     
        <h4>Sua idade é: <?php echo $_POST['idade']?></h4>
        
        <h4>Seu telefone é: <?php echo  $_POST['telefone']?></h4>
        
        <h4>Sua cidade é: <?php echo $_POST['cidade'] ?></h4>
    </body>
</html>
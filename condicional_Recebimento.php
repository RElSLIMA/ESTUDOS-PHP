<?php

$media = 70;
$media_rec = 50;
$frequencia = 75;


$reprovado_por_falta = $_POST["frequencia_aluno"] < $frequencia ? true : false;

if (!$reprovado_por_falta) {

    if ( $_POST["media_aluno"] < $media_rec) {
        echo "Reprovado!";
    }
        elseif ($_POST["media_aluno"] < $media) {
            echo "Recuperação!";
        }
        else {
            echo "Aprovado!";
        }
} 

else {
echo "Reprovado por faltas!"; 
} 
  


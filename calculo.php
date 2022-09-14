<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo IMC</title>
    
<link rel="stylesheet" href="css/bootstrap.min.css">
    
</head>
<body>
<?php
$peso = $_POST["peso"];
$altura = $_POST["altura"];

   if ($peso < 0 )
         echo "ERRO. Peso inválido! <BR>";

   else if ( $altura < 0 )
         echo "ERRO. Altura inválida! <BR>";

   else {
          $imc = $peso / ($altura * $altura);
             echo "Atenção, seu IMC é $imc";
    if ($imc < 18.5)
             echo " e você está classificado como ABAIXO DO PESO";
    else if ($imc < 24.9)
              echo "e você está classificado como SAUDÁVEL";
    else if ($imc < 29.9)
              echo " e você está classificado como SOBREPESO";
    else if ($imc < 34.9)
             echo " e você está classificado como OBESIDADE GRAU I";
    else if ($imc < 39.9)
             echo " e você está classificado como OBESIDADE GRAU II";
    else
             echo " e você está classificado como OBESIDADE GRAU III";
   }
?>

    
</body>
</html>
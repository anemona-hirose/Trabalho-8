<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>"Atividade 7 - Gerencia de configuração"</title> 
    </head>
    <body>
        <?php
         $peso = $_GET['peso'];
         $altura = $_GET['altura'];
         
         $imc = $peso/($altura*$altura);
         
         $resultado = number_format($imc);
         
         if(isset($resultado) && $resultado != '0'){;	
             echo '<h1>Seu IMC é:</h1>';
             echo '<h2>'.$resultado.'</h2>';
         }else{
             echo '<h1>Por favor, utilize apenas numeros!</h1>';	
         }
        ?>
    </body>
</html>

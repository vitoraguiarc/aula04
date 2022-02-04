<?php

    $valor = (int) 0;
    $cont = (int) 0;
    $resultado = (string) null;


    if(isset($_POST['btnCalc']))
    {
        $valor = $_POST['txtNumero'];
        //Exemplo utilizando WHILE
        // while($cont <= $valor)
        // {
        //     echo($cont).'<br>';
        //     //Formas como usar o cont
        //     //$cont = $cont + 1;
        //     //$cont++;
        //     $cont+=1;
        // }

        for($cont=0; $cont<=$valor; $cont+=1)
            // echo($cont.'<br>');
            $resultado.=$cont.'<br>';
    
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frmRepeticao" method="post"action="index.php">
        Digite um número: <input type="text" name="txtNumero">
        <input type="submit" name="btnCalc" value="Calcular">
        
    
    
    </form>
    <div>
        <?=$resultado?>
    </div>
    
</body>
</html>
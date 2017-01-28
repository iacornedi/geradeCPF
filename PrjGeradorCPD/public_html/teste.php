<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Gerador de CPF</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php 
    include_once './class/gerar.class.php';
    
    //$resultado = new CPF;
    //$gerarcpf = '123456789';
    //echo $resultado->gerarDigitos('316521278');
    //echo rand(0,9);
    
    $cpfAleatorio ='';
    for ($i=1; $i <= 9; $i++){        
        $aleatorio = rand(0,9);   
        $cpfAleatorio .= $aleatorio;
    }
    
    echo "<br> $cpfAleatorio";
    ?>

  </body>
</html>

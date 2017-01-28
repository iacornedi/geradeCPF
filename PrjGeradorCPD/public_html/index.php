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
    //var_dump($_POST); 
    include_once './class/gerar.class.php';
    
    if(!empty($_POST["gerarcpf"])){        
        $resultado = new CPF;
        $resultado->gerarDigitos($_POST["gerarcpf"]);
        $cpfcompleto = $resultado->cpf;
    }
    else{
        $cpfcompleto = 'Informe nove digitos';
    }
    
    if(!empty($_POST["aleatoriocpf"])){
        $cpfAleatorio = rand(1,9);
        for ($i=1; $i <= 8; $i++){        
            $aleatorio = rand(0,9);   
            $cpfAleatorio .= $aleatorio;
        }
        $resultado = new CPF;
        $resultado->gerarDigitos($cpfAleatorio);
        $cpfResultAleatorio = $resultado->cpf;
    }
    else {
        $cpfResultAleatorio = 'Clique no botão';
    }
    ?>
    
    <div class="container">    
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <center><h1>Gerador de CPF</h1></center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="panel-group">
                  <div class="panel panel-primary">
                      <div class="panel-heading">Gerar digitos verificador</div>
                      <div class="panel-body">
                          <form method="POST">
                              <div class="form-group">
                                  <input class="form-control" name="gerarcpf" type="text" maxlength="9">                          
                              </div>
                              <button type="submit" class="btn btn-success pull-right"><i class="fa fa-id-card"></i> Gerar</button>
                              
                          </form>
                      </div>
                  </div>
                  <div class="panel panel-primary">
                    <div class="panel-heading">Resultado: <?php echo "$cpfcompleto"; ?></div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-group">
                  <div class="panel panel-primary">
                      <div class="panel-heading">Gerar CPF randomicamente</div>
                      <div class="panel-body">
                          <form method="POST">
                              <button type="submit" class="btn btn-success btn-lg btn-block" value="gerar" name="aleatoriocpf"><i class="fa fa-id-card"></i> Gerar</button>
                          </form>
                      </div>
                  </div>
                  <div class="panel panel-primary">
                    <div class="panel-heading">Resultado: <?php echo "$cpfResultAleatorio"; ?></div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel-group">
                  <div class="panel panel-primary">
                      <div class="panel-heading">Valide seu CPF</div>
                      <div class="panel-body">
                          <form>
                              <div class="form-group">
                                  <input class="form-control" type="text" maxlength="9">                          
                              </div>                             
                              <button type="submit" class="btn btn-success pull-right"><i class="fa fa-id-card"></i> Validar</button>                            
                          </form>
                      </div>
                  </div>
                  <div class="panel panel-primary">
                    <div class="panel-heading">Resultado</div>
                  </div>
                </div>
            </div>            
        </div>
    </div>
    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

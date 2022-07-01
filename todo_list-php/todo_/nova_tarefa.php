<?php 
    $acao = 'listarTarefasPendentes';
    require "tarefa_controller.php";

    #echo '<pre>';
    #print_r($tarefas);
    #echo '</pre>';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super ToDo - Nova tarefa</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <!-- Menu -->
    <nav class="navbar navbar-light navback">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="img/list.png" width="34" height="34">
                Super ToDo
            </a>
        </div>
    </nav>
    
    <?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1): ?>
        <div  class="bg-success pt-2 text-white d-flex justify-content-center">
            <h5>Tarefa inserida com sucesso</h5>
        </div>
    <?php endif; ?>

    <!-- Menu lateral -->
    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="./">Terefas pendentes</a>
                    </li>
                    <li class="list-group-item active">
                        <a href="#">Nova Tarefa</a>
                    </li>
                    <li class="list-group-item">
                        <a href="todas_tarefas.php">Todas Tarefa</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Nova Tarefa</h4>
                            <hr>
                            <form method="POST" action="tarefa_controller.php?acao=inserir">
                                  <label>Descrição da tarefa: </label>
                                  <div class="input-group mb-3 mt-2">
                                    <input type="text" autofocus class="form-control" name="tarefa" placeholder="Exemplo: Trabalhar">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="submit">Incluir</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- fim menu lateral -->


</body>
</html>
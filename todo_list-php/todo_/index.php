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
    <title>Super ToDo</title>
    <link href="css/estilo.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

</head>
<body>
    <script src="/todo_/js/acoes.js"></script>
    <!-- Menu -->
    <nav class="navbar navbar-light navback">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="img/list.png" width="34" height="34">
                Super ToDo
            </a>
        </div>
    </nav>
    
    <!-- Menu lateral -->
    <div class="container app">
        <div class="row">
            <div class="col-md-3 menu">
                <ul class="list-group">
                    <li class="list-group-item active">
                        <a href="#">Terefas pendentes</a>
                    </li>
                    <li class="list-group-item">
                        <a href="nova_tarefa.php">Nova Tarefa</a>
                    </li>
                    <li class="list-group-item">
                        <a href="todas_tarefas">Todas Tarefa</a>
                    </li>
                </ul>
            </div>
            <!-- Corpo da pagina -->
            <div class="col-md-9">
                <div class="container pagina">
                    <div class="row">
                        <div class="col">
                            <h4>Tarefas Pendentes</h4>
                            <hr>
                            <?php foreach($tarefas as $indice => $tarefa): ?>
                                <div class="row mb-3 d-flex align-items-center">
                                    <div class="col-sm-9" id="tarefa_<?= $tarefa->id ?>">
                                        <?= $tarefa->tarefa ?>
                                    </div>
                                    <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                        <i class="ri-delete-bin-fill" onclick="removerTarefa(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>', 'index')"></i>
                                        <i class="ri-edit-fill" onclick="editarTarefa(<?= $tarefa->id ?>, '<?= $tarefa->tarefa ?>', 'index')"></i>
                                        <i class="ri-checkbox-fill"  onclick="concluirTarefa(<?= $tarefa->id ?>, 'index')"></i>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fim corpo da pagina -->
        </div>
    </div>
    <!-- fim menu lateral -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>
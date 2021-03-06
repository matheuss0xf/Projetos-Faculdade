<?php

    require "../todo_scripts/conexao.php";
    require "../todo_scripts/tarefa_model.php";
    require "../todo_scripts/tarefa_service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if($acao == 'listarTarefasPendentes') {
        $tarefa = new Tarefa();
        $conn = new Conexao();

        $tarefa->__set('id_status', 1);

        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefas = $tarefaService->listarTarefasPendentes();
    }
    if($acao == 'listarTarefas') {
        $tarefa = new Tarefa();
        $conn = new Conexao();


        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefas = $tarefaService->listarTodasTarefas();
    }

    if($acao == "inserir"){
        $tarefa  = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conn = new Conexao();

        $tarefaService = new  TarefaService($conn, $tarefa);
        $tarefaService->inserirTarefa();
    }
    if($acao == 'remover') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conn = new Conexao();
        $tarefaService = new TarefaService($conn, $tarefa);
        $tarefaService->removerTarefa();

        if(isset($_GET['pg']) && $_GET['pg'] == 'index'){
            header('location: index.php');
        }else{
            header('location: index.php');
        }
        
    }

    if($acao == 'atualizar') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conn = new Conexao();
        $tarefaService = new TarefaService($conn, $tarefa);
        if($tarefaService->atualizarTarefa()){
            if(isset($_GET['pg']) && $_GET['pg'] == 'index'){
                header('location: index.php');
            }else{
                header('location: index.php');
            }
        }
        
    }

    if($acao == 'concluirTarefa') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('id_status', 2);

        $conn = new Conexao();
        $tarefaService = new TarefaService($conn, $tarefa);

        if($tarefaService->atualizarStatus()){
            if(isset($_GET['pg']) && $_GET['pg'] == 'index'){
                header('location: index.php');
            }else{
                header('location: index.php');
            }
        }
    }
?>
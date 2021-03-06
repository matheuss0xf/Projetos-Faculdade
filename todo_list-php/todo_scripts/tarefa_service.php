<?php

    class TarefaService {

        private $conexao;
        private $tarefa;

        public function __construct(Conexao $conexao, Tarefa $tarefa) {
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        public function listarTarefasPendentes() {
            $query = 'SELECT
                t.id,
                t.tarefa,
                s.status
            FROM
                tb_tarefas AS t
                LEFT JOIN tb_status AS s ON(t.id_status = s.id)
            WHERE t.id_status = :id_status';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        public function listarTodasTarefas() {
            $query = 'SELECT
                t.id,
                t.tarefa,
                s.status
            FROM
                tb_tarefas AS t
                LEFT JOIN tb_status AS s ON(t.id_status = s.id)
            ORDER BY t.data_cadastro DESC';

            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function inserirTarefa(){
            $query = 'INSERT INTO  
                tb_tarefas(tarefa)            
            VALUES
                (:tarefa)';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();

            header('Location: nova_tarefa.php?inclusao=1');
        }

        public function removerTarefa(){
            $query = 'DELETE FROM tb_tarefas WHERE id = :id';

            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function atualizarTarefa(){
            $query = 'UPDATE tb_tarefas SET tarefa = ? WHERE id = ?';
            $stmt = $this->conexao->prepare($query);
            
            $stmt->bindValue(1, $this->tarefa->__get('tarefa'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }

        public function atualizarStatus(){
            $query = 'UPDATE tb_tarefas SET id_status = ? WHERE id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->tarefa->__get('id_status'));
            $stmt->bindValue(2, $this->tarefa->__get('id'));
            return $stmt->execute();
        }
    }
?>
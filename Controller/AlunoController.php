<?php
class AlunoController {
    public function listarAlunos() {
        $alunoModel = new Aluno();
        $alunos = $alunoModel->listarTodos();
        include 'View/alunos.php';
    }

    public function adicionarAluno() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'] ?? '';
            $idade = $_POST['idade'] ?? '';

            $alunoModel = new Aluno();
            $alunoModel->adicionar($nome, $idade);

            // Após adicionar, volta para a listagem
            $this->listarAlunos();
        }
    }
}
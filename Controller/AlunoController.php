<?php
class AlunoController {
    public function listarAlunos() {
        $alunoController = new Aluno();
        $alunos= $alunoController->listarTodos();
        include 'View/alunos.php';
    }
}
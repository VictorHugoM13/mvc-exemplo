<?php
class Aluno {
    public function __construct(){
        if (!isset($_SESSION['alunos'])) {
            $_SESSION['alunos'] = [];
        }
    }

    public function listarTodos() {
        return $_SESSION['alunos'];
    }

    public function adicionar($nome, $idade) {
        $_SESSION['alunos'][] = [
            'nome'=>$nome,
            'idade'=>(int)$idade
        ];
    }
}
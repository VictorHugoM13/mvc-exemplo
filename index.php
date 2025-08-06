<?php
session_start();
require_once 'Model/Aluno.php';
require_once 'Controller/AlunoController.php';

$controller = new AlunoController();

// Verifica se há ação
$acao = $_GET['acao'] ?? '';

if ($acao === 'adicionar') {
    $controller->adicionarAluno();
} else {
    $controller->listarAlunos();
}
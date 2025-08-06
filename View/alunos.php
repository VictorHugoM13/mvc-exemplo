<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Alunos</h1>

    <?php if (count($alunos) > 0) { ?>
        <ul>
            <?php foreach ($alunos as $aluno) { ?>
                <li><?php echo htmlspecialchars($aluno['nome']) . ' - ' . htmlspecialchars($aluno['idade']) . ' anos'; ?></li>
            <?php } ?>
        </ul>
    <?php } else { ?>
        <p>Nenhum aluno cadastrado.</p>
    <?php } ?>

    <h2>Adicionar Aluno</h2>
    <form action="?acao=adicionar" method="POST">
        <label>Nome: <input type="text" name="nome" required></label><br><br>
        <label>Idade: <input type="number" name="idade" required></label><br><br>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>

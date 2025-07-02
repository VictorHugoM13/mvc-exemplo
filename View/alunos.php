<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alunos</title>
</head>
<body>
    <h1>Alunos</h1>
    <ul>
        <?php foreach ($alunos as $aluno) { ?>
            <li><?php echo $aluno['nome'] . ' - ' . $aluno['idade'] . ' anos'; ?></li>
        <?php } ?>
    </ul>
</body>
</html>
<?php
require_once "./config.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Gerenciador de Tarefas</h1>
        </div>
        <div class="form">
            <form action="" method="get">
                <label for="task_name">Tarefa:</label>
                <input type="text" name="task_name" placeholder="Nome da Tarefa:">
                <button type="submit">Cadastrar</button>
            </form>
        </div>
        <div class="separator">
        </div>
        <div class="list-tasks">
            <?php

if (isset($_SESSION['tasks'])) {
    echo "<ul>";

    foreach ($_SESSION['tasks'] as $key => $task) {
        echo "<li>$task</li>";
    }

    echo "</ul>";
}
?>
            <form action="" method="get">
                <input type="hidden" name="clear" value="clear">
                <button class="btn-clear" type="submit">Limpar Tarefas</button>
            </form>
        </div>
        <div class="footer">
            <p>Desenvolvido por @Walterrjr86</p>
        </div>
    </div>
</body>

</html>

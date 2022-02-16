<?php

session_start();

if (isset($_POST['task_name'])) {
    if ($_POST['task_name'] != "") {

        $data = [
            'task_name' => $_POST['task_name'],
            'task_description' => $_POST['task_description'],
            'task_date' => $_POST['task_date'],
        ];
        array_push($_SESSION['tasks'], $data);
        unset($_POST['task_name']);
        unset($_POST['description']);
        unset($_POST['date']);

        header('Location:index.php');
    } else {
        $_SESSION['message'] = "Preencha o campo corretamente!";
        header('Location:index.php');
    }
}

if (isset($_GET['key'])) {
    array_splice($_SESSION['tasks'], $_GET['key'], 1);
    unset($_GET['key']);
    header('Location:index.php');
}

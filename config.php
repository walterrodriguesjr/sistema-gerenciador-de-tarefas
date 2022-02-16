<?php

session_start();

if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}

if (isset($_GET['clear'])) {
    unset($_SESSION['tasks']);
    unset($_GET['clear']);
}

var_dump($_SESSION['tasks']);

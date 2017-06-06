<?php
    require "function.php";

    addTask($_POST['name'], $_POST['detail'], $_POST['deadline'], $_POST['level_id']);

    header('Location: tache_ajoutee.php');
    exit();

<?php
    function addTask($name, $details, $deadline, $level_id, $poids){
        $bdd= new PDO('mysql:host=localhost;dbname=taches_à_faire','root','u1wj99cv');
        $task= $bdd->prepare('INSERT INTO description_taches (name, detail, deadline,level_id, poids) VALUES(?,?,?,?)');
        $task->execute(array(
            $name,
            $detail,
            $deadline,
            $level_id,
            $poids
        ));
    }

    function getTask($name, $details, $deadline, $level_id, $poids){
        $bdd= new PDO('mysql:host=localhost;dbname=taches_à_faire','root','u1wj99cv');
        $task = $bdd->query('select * from description_taches order by level_id desc,poids desc');
        return $task;
    }

 ?>

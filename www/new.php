<?php

require "function.php";

if($_POST){
    if (isset($_POST['task_name'])){
    $task_name=$_POST['task_name'];
    }else {
        $task_name='';
    }

    if (isset($_POST['niveau'])){
        $niveau=$_POST['niveau'];
    }else{
        $niveau='';
    }
    if (isset($_POST['details'])){
        $details=$_POST['details'];
    }else{
        $niveau='';
    }
    if (isset($_POST['deadline'])){
        $deadline=$_POST['deadline'];
    }else{
        $deadline='';
    }
    if (isset($_POST['poids'])){
        $poids=$_POST['poids'];
    }else{
        $poids='';
    }
    $erreur=[];

    if(empty($task_name)){
        $erreur['task_name']="il manque un nom à votre tache";
    }
    if(empty($details)){
        $erreur['details']="vous devez décrire votre tache";
    }
    if(empty($niveau)){
        $erreur['niveau']="vous devez choisir un niveau d'importance pour votre tache";
    }
    if(empty($deadline)){
        $erreur['deadline']="vous devez choisir une deadline pour votre tache";
    }
    if(empty($poids)){
        $erreur['poids']="vous devez choisir un poids";
    }
    elseif ($poids<0 or $poids>100) {
        $erreur['poids']="vous devez choisir un poids entre 0 et 100";
    }
    if (!$erreur){
        addTask($_POST['name'],$_POST['detail'],$_POST['deadline'],$_POST['level_id'],$_POST['poids']);
        unset ($task_name, $details, $niveau, $deadline, $poids);
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" tyoe="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css" / >
        <link rel="stylesheet" type="text/css" href="css/new.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row titre">
                <p>À FAIRE.COM</p>
            </div>
            <div class="row bar">
                <a href="index.html">
                    <div class="col-md-1 col-md-offset-1 bouton">
                        <p>Accueil</p>
                    </div>
                </a>
                <a href="accomplies.html">
                    <div class="col-md-2 col-md-offset-1 bouton">
                        <p>tache(s) accomplie(s)</p>
                    </div>
                </a>
                <a href="niveaux.php">
                    <div class="col-md-2 col-md-offset-1 bouton">
                        <p>niveaux</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 new">
                    <form class="" action="new.php" method="post">

                        <input class="choix" type="text" name="task_name" value="<?php if(isset($task_name)) echo $task_name ?>" placeholder="nom de la tache">
                        <br>
                        <?php
                            if(isset($erreur['task_name'])){
                         ?>
                         <div class="alert alert-danger">
                                <?php echo $erreur['task_name'];?>
                         </div>
                         <?php
                            }
                          ?>
                        <input class="choix" type="textarea" name="details" value="<?php if(isset($details)) echo $details ?>" placeholder="details">
                        <br>
                        <?php
                            if(isset($erreur['details'])){
                         ?>
                         <div class="alert alert-danger">
                                <?php echo $erreur['details'];?>
                         </div>
                         <?php
                            }
                          ?>
                        <input class="choix" type="text" name="deadline" value="<?php if(isset($deadline)) echo $deadline ?>" placeholder="aaaa-mm-jj">
                        <br>
                        <?php
                            if(isset($erreur['deadline'])){
                         ?>
                         <div class="alert alert-danger">
                                <?php echo $erreur['deadline'];?>
                         </div>
                         <?php
                            }
                          ?>
                        <select class="importance" name="level_id">
                            <option value="0">niveau</option>
                            <option class="vert" name="rien ne presse" value="rien ne presse">rien ne  presse</option>
                            <option class="orange" name="important" value="important">important</option>
                            <option class="rouge" name="urgent" value="urgent">urgent</option>
                        </select>
                        <br>
                        <input type="text" name="poids" value="<?php if(isset($poids)) echo $poids?>" placeholder="poids entre 0 et 100">
                        <br>
                        <?php
                            if(isset($erreur['poids'])){
                         ?>
                         <div class="alert alert-danger">
                             <?php echo $erreur['poids'];?>
                         </div>
                         <?php
                            }
                         ?>
                        <button type="submit" name="button" value="ajout">ajouter</button>
                    </form>
                </div>

            </div>

        </div>
    </body>
</html>

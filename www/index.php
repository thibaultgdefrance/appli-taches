<?php
    require "function.php";

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" tyoe="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css" / >
        <link rel="stylesheet" type="text/css" href="css/appli-taches-Thibault-Defrance.css">
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
                <a href="new.php">
                    <div class="col-md-1 col-md-offset-1 bouton">
                        <p>new</p>
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
        <div class="container-fluid corps">
            <div class="row">
                <div class="col-md-7 col-md-offset-1 liste">
                    <div class="row">
                        <div class="col-md-10 tache">

                            <?php
                                $task = getTask();
                                   foreach ($tasks as $task) {
                                       ?>
                                       <h2><?php echo $task['name'] ?></h2>
                                       <h2><?php echo $task['deadline'] ?></h2>
                                       <h2><?php echo $task['level_id'] ?></h2>
                                       <h2><?php echo $task['poids'] ?></h2>
                                       <p><?php echo $task['detail'] ?></p>
                                       <?php
                                   }
                            ?>
                        </div>
                        <div class="col-md-10 tache">
                            <p>tache 1</p>
                            <p>détails:</p>
                            <p>deadline:</p>
                            <p>importance:</p>
                            <INPUT type="checkbox" name="nom" value="valeur attachée au bouton">
                            <p>terminée</p>
                            <a href="new.html">
                                <button type="button" name="edit">edit</button>
                            </a>
                            <button type="delete" name="delete">delete</button>
                        </div>
                        <div class="col-md-10 tache">
                            <p>tache 1</p>
                            <p>détails:</p>
                            <p>deadline:</p>
                            <p>importance:</p>
                            <INPUT type="checkbox" name="nom" value="valeur attachée au bouton">
                            <p>terminée</p>
                            <a href="new.html">
                                <button type="button" name="edit">edit</button>
                            </a>
                            <button type="delete" name="delete">delete</button>
                        </div>
                        <div class="col-md-10 tache">
                            <p>tache 1</p>
                            <p>détails:</p>
                            <p>deadline:</p>
                            <p>importance:</p>
                            <INPUT type="checkbox" name="nom" value="valeur attachée au bouton">
                            <p>terminée</p>
                            <a href="new.html">
                                <button type="button" name="edit">edit</button>
                            </a>
                            <button type="delete" name="delete">delete</button>
                        </div>
                        <div class="col-md-10 tache">
                            <p>tache 1</p>
                            <p>détails:</p>
                            <p>deadline:</p>
                            <p>importance:</p>
                            <INPUT type="checkbox" name="nom" value="valeur attachée au bouton">
                            <p>terminée</p>
                            <a href="new.html">
                                <button type="button" name="edit">edit</button>
                            </a>
                            <button type="delete" name="delete">delete</button>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 ajout">
                    <a href="new.html">
                        <img src="img/add-file-elements-glossy-icon_zkN7s3Ud.png" class="plus" />
                        <p>Ajouter une tache</p>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>

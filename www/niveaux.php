<?php
if($_POST){
    if (isset($_POST['niveau'])){
    $niveau=$_POST['niveau'];
    }else {
        $niveau='';
    }
    if (isset($_POST['poids'])){
    $poids=(int)$_POST['poids'];
    }else {
        $poids='';
    }
    $erreur=[];

    if($niveau==''){
        $erreur['niveau']="vous devez donner un nom à votre niveau d'importance";
    }
    if($poids==''){
        $erreur['poids']="vous devez choisir un poids";
    }
    elseif ($poids<0 or $poids>100) {
        $erreur['poids']="vous devez choisir un poids entre 0 et 100";
    }
    if (!$erreur){
        unset (  $niveau, $poids);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" tyoe="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css" / >
        <link rel="stylesheet" type="text/css" href="css/niveaux.css">
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
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-1 niveaux">
                    <div class="col-md-12">
                        <form class="" action="niveaux.php" method="post">
                            <input type="text" name="niveau" value="<?php if(isset($poids)) echo $poids?>" placeholder="ajouter un niveau">
                            <input type="text" name="poids" value="<?php if(isset($poids)) echo $poids?>" placeholder="poids entre 0 et 100">
                            <button type="submit" name="button">ajouter</button>
                        </form>
                    </div>
                </div>

            </div>

        </div>

    </body>
</html>

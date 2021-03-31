<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>exo adrien callewaert</title>
    <meta name="Description" content="Exo Adrien Callewaert" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="" />
    <link rel="stylesheet" href="">

</head>


<body>
    <h1>weatherapp, Bases de données MySQL</h1>
    <h2>Entrez les données :</h2>
        <form action="index.php" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label>Ville</label>
                        <p><input type="text" name="ville"></p>
                <label>Haut</label>
                        <p><input type="text" name="haut"></p>
                <label>Bas</label>
                        <p><input type="text" name="bas"></p>

                <p><input type="submit" name="insert" value="Insérer"></p>
        </form>

        <?php


        $servername = 'mysql:host=localhost;dbname=weatherapp;charset=utf8';
        $username = 'root';
        $password = '';

        if(isset($_POST['insert'])){
        try {
        // se connecter à mysql
        $pdo = new PDO("$servername","$username","$password");
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            exit();
        }
        // récupérer les valeurs 
        $ville = $_POST['ville'];
        $haut = $_POST['haut'];
        $bas = $_POST['bas'];
        // Requête mysql pour insérer des données
        $sql = "INSERT INTO `météo`(`ville`, `haut`, `bas`) VALUES (:ville,:haut,:bas)";
        $res = $pdo->prepare($sql);
        $exec = $res->execute(array(":ville"=>$ville,":haut"=>$haut,":bas"=>$bas));
        // vérifier si la requête d'insertion a réussi
        if($exec){
            echo 'Données insérées';
        }else{
            echo "Échec de l'opération d'insertion";
        }
        }
        ?>

</body>
</html>
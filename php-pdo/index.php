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
        <h2>Entrez les données demandées :</h2>

        </tbody>    
        </table><br>

        <form action="index.php" method="post">
            <label for="ville">ville: <input type="text" name="ville" id="ville"></label><br><br>
            <label for="haut">haut: <input type="text" name="haut" id="haut"></label><br><br>
            <label for="bas">bas: <input type="text" name="bas" id="bas"></label><br><br>
            <input type="submit" name="submit" value="submit">
        </form>


        <?php
            $servername = 'mysql:host=localhost;dbname=weatherapp;charset=utf8';
            $username = 'root';
            $password = '';



            //On essaie de se connecter
            try{
                $conn = new PDO($servername, $username, $password);
                //On définit le mode d'erreur de PDO sur Exception
                echo 'Connexion réussie';
            }
            
            catch(Exception $error)
            {
                // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$error->getMessage());
                echo "Erreur : " . $e->getMessage();
            }

        ?>





</body>
</html


<?php
echo 'Hello from <a href="https://jrcan.dev.netlib.re/">JrCanDev</a> <br>';
echo '<img src="https://www.docker.com/sites/default/files/horizontal.png">';

$prenom = "Mathieu";
$nom = "Boidin";

echo $prenom . " " . $nom;
echo "21 ans "
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identité</title>
</head>
<body>

<form action="index.php" method="post">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="OK" name="OK"></p>
</form>

<?php if(isset($_POST['OK'])){ ?>
    <p>Bonjour, <?php echo htmlspecialchars($_POST['nom']); ?>.</p>
<p>Tu as <?php echo (int)$_POST['age']; ?> ans.</p>

<?php } ?>



    
</body>
</html>




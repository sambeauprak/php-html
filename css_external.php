<?php
$liens = ["Accueil", "À propos", "Contact", "Se connecter", "Notre mission"];
$color = "pink";
$lang = "fr";
$title = "Mon super site internet, c'est le plus beau de l'univers";

$style = "style1";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/<?php echo $style; ?>.css" />
</head>

<body>

    <header>
        <nav>
            <?php for ($i = 0; $i < count($liens); $i++) : ?>
            <a href=" #"><?php echo $liens[$i]; ?></a>
            <?php endfor; ?>
        </nav>
    </header>
</body>

</html>
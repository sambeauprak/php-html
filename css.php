<?php
$liens = ["Accueil", "À propos", "Contact", "Se connecter", "Notre mission"];
$color = "pink";
$lang = "fr";
$title = "Mon super site internet, c'est le plus beau de l'univers";
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
    nav {
        display: flex;
        align-items: center;
        gap: 8px;
        height: 60px;
        padding: 4px 8px;
        background-color: <?php echo $color ?>;
        border-radius: 8px;
    }

    a {
        text-decoration: none;
        color: black;
    }
    </style>
</head>

<body>

    <header>
        <nav>
            <?php for ($i = 0; $i < count($liens); $i++) : ?>
            <a href="#"><?php echo $liens[$i]; ?></a>
            <?php endfor; ?>
        </nav>
    </header>
</body>

</html>
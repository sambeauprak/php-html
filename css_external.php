<?php
$liens = ["Accueil", "À propos", "Contact", "Se connecter", "Notre mission"];
$color = "pink";
$lang = "fr";
$title = "Mon super site internet, c'est le plus beau de l'univers";

if (isset($_GET["style"])) {
    $style = $_GET["style"];
} else {
    $style = "style1";
}
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
            <div>
                <?php for ($i = 0; $i < count($liens); $i++) : ?>
                <a href=" #"><?php echo $liens[$i]; ?></a>
                <?php endfor; ?>
            </div>
            <div>
                <a href="http://127.0.0.1:8000/css_external.php?style=style1">Style 1</a>
                <a href="http://127.0.0.1:8000/css_external.php?style=style2">Style 2</a>
            </div>
        </nav>
    </header>
</body>

</html>
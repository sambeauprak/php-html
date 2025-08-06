<?php
$liens = ["Accueil", "À propos", "Contact", "Se connecter", "Notre mission"];
?>
<header>
    <nav>
        <?php for ($i = 0; $i < count($liens); $i++) : ?>
        <a href="#"><?php echo $liens[$i]; ?></a>
        <?php endfor; ?>
    </nav>
</header>
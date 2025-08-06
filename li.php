<?php
$prenom = "Michel";

$tableau = ["Akila", "Hajer", "Alexandre", "Rayan"];
?>
<div>
    <h1>Coucou <?php echo $prenom; ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus laborum veniam ex reprehenderit, aliquid eveniet
        sapiente facilis
    </p>
</div>

<ul>
    <?php for ($i = 0; $i < count($tableau); $i++) : ?>
    <li><?php echo $tableau[$i]; ?></li>
    <?php endfor; ?>
</ul>
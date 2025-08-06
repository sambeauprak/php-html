<?php
$cards = [
    ["title" => "Senior Backend Developer", "salary" => 150],
    ["title" => "Junior Frontend Developer", "salary" => 100],
    ["title" => "Graphic Designer", "salary" => 30],
];

?>
<ul>
    <?php foreach ($cards as $card): ?>
    <li><?php echo "$" . $card['salary'] . "/hr"; ?></li>
    <?php endforeach; ?>
</ul>
<?php
session_start();
?>

<form action="todolist_ajout.php" method="post">
  <input type="text" name="produit" />
  <input type="submit" value="Ajouter" />
</form>

<?php
$produits = $_SESSION["produits"];

if (isset($_GET["delete"]) == true) {
  $cle = (int) $_GET["delete"];
  unset($_SESSION["produits"][$cle]);
}

?>
<ul>
  <?php foreach ($produits as $cle => $produit) : ?>
    <li><?php echo $produit . "- clé : $cle"; ?> <a href="todolist.php?delete=<?php echo $cle; ?>">X</a></li>
  <?php endforeach ?>
</ul>
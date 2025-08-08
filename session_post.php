<?php
session_start();


if (isset($_SESSION["nbEssais"]) == false) {
    $_SESSION["nbEssais"] = 0;
}

$connexionReussie = false;
function login($email, $password)
{
    $utilisateurs = [
        ["sambeauprak@gmail.com", "zsA7j#jK", "Pirouette"],
        ["sambeau@gmail.com", "jsA7j#jK", "Cacahuète128"],
        ["sambeau.prak@gmail.com", "vsA7j#jK", "MichtoDu93"],
        ["sambeaup@gmail.com", "fsA7j#jK", "TontonDuBled"],
        ["jeanprak@gmail.com", "hsA7j#jK", "SalimIgreh"],
    ];

    for ($j = 0; $j < count($utilisateurs); $j++) {
        $utilisateurEmail = $utilisateurs[$j][0];
        $utilisateurMdp = $utilisateurs[$j][1];

        if ($email  == $utilisateurEmail && $password == $utilisateurMdp) {
            $_SESSION["username"] = $utilisateurs[$j][2];
            return true;
        }
    }

    return false;
}

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $connexionReussie = login($email, $password);

    if ($connexionReussie == false) {
        echo "Connexion échouée";
        $_SESSION["nbEssais"] = $_SESSION["nbEssais"] + 1;
    }
}

?>

<?php if ($connexionReussie == false && $_SESSION["nbEssais"] < 3) : ?>
    <form action="session_post.php" method="post">
        <input type="email" name="email" placeholder="Saisir votre email" />
        <input type="password" name="password" placeholder="Saisir votre mot de passe" />
        <input type="submit" value="Se connecter" />
    </form>
<?php elseif ($_SESSION["nbEssais"] >= 3): ?>
    <h2>Vous avez échoué, bande de nazes !</h2>
<?php else: ?>
    <h2>Connecté</h2>
    <a href="profil.php">Profil</a>
    <a href="logout.php">Déconnexion</a>
<?php endif; ?>
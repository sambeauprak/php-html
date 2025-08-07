<?php


// print_r($_POST);
$nbEssais = 0;
$connexionReussie = false;
function login($email, $password)
{
    $utilisateurs = [
        ["sambeauprak@gmail.com", "zsA7j#jK"],
        ["sambeau@gmail.com", "jsA7j#jK"],
        ["sambeau.prak@gmail.com", "vsA7j#jK"],
        ["sambeaup@gmail.com", "fsA7j#jK"],
        ["jeanprak@gmail.com", "hsA7j#jK"],
    ];

    for ($j = 0; $j < count($utilisateurs); $j++) {
        $utilisateurEmail = $utilisateurs[$j][0];
        $utilisateurMdp = $utilisateurs[$j][1];

        if ($email  == $utilisateurEmail && $password == $utilisateurMdp) {
            return true;
        }
    }

    return false;
}

if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["nbEssais"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $connexionReussie = login($email, $password);

    $nbEssais = (int) $_POST["nbEssais"];
    if ($connexionReussie == false) {
        $nbEssais = $nbEssais + 1;
    }
}

?>

<?php if ($connexionReussie == false && $nbEssais < 3) : ?>
    <form action="post.php" method="post">
        <input type="hidden" name="nbEssais" value="<?php echo $nbEssais; ?>" />
        <input type="email" name="email" placeholder="Saisir votre email" />
        <input type="password" name="password" placeholder="Saisir votre mot de passe" />
        <input type="submit" value="Se connecter" />
    </form>
<?php elseif ($nbEssais >= 3): ?>
    <h2>Vous avez échoué, bande de nazes !</h2>
<?php else: ?>
    <h2>Connecté</h2>
<?php endif; ?>
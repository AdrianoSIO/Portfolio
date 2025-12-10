<?php
session_start();
?>
<!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Navbar avec Bootstrap -->
<nav class="navbar navbar-expand-lg" style="background: linear-gradient(to right, rgb(218, 218, 218), rgb(182, 182, 182));height: 50px;">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<!-- Formulaire de connexion Bootstrap -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <div class="card-body">
                    <?php
                    if (empty($_SESSION['id'])):
                    ?>
                        <h2 class="card-title text-center mb-4">Connexion</h2>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="id" class="form-label">Identifiant</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                            </div>
                            <div class="mb-3">
                                <label for="md" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="md" name="md" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Connexion</button>
                            <div class="mt-3 text-center">
                                <a href="mdpperdu.php">Mot de passe oublié ?</a> |
                                <a href="register.php">Créer un compte</a>
                            </div>
                        </form>
                    <?php else: ?>
                        <div class="alert alert-success text-center">
                            Connecté(e) en tant que <strong><?= htmlspecialchars($_SESSION['id']) ?></strong>
                        </div>
                        <div class="text-center">
                            <a href="deco.php" class="btn btn-outline-danger">Déconnexion</a>
                        </div>
                        <?php header("Location:page/produit.php"); exit(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
try {
    require 'donnée/connect.php';
    $db = new PDO(DNS, LOGIN, PASSWORD, $options);

    if (!empty($_POST['id']) && !empty($_POST['md'])) {
        $id = $_POST['id'];
        $md = $_POST['md'];

        $sql = "SELECT * FROM comptes WHERE login = :login";
        $statement = $db->prepare($sql);
        $statement->bindParam(':login', $id);
        $statement->execute();

        if ($statement->rowCount() == 1) {
            $row = $statement->fetch();
            $hash = $row['mdp'];
            if (password_verify($md, $hash)) {
                $_SESSION['id'] = $row['idUtilisateur'];
                $_SESSION['login'] = $id;
                header("Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo '<div class="alert alert-danger text-center mt-3">Mot de passe incorrect.</div>';
            }
        } else {
            echo '<div class="alert alert-danger text-center mt-3">Identifiant incorrect.</div>';
        }

        $statement->closeCursor();
    }
} catch (PDOException $e) {
    echo '<div class="alert alert-danger mt-3">Erreur : ' . htmlspecialchars($e->getMessage()) . '</div>';
}
?>

<?php
session_start();
$title = "Connexion";

require 'donnée/connect.php';

$error = null; // Pour stocker les messages d'erreur

// --- LOGIQUE DE CONNEXION ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['id']) && !empty($_POST['md'])) {
    $id = $_POST['id'];
    $md = $_POST['md'];

    try {
        $sql = "SELECT * FROM comptes WHERE login = :login LIMIT 1";
        $statement = $pdo->prepare($sql);
        $statement->execute([':login' => $id]);

        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $hash = $row['mdp'];

            if (password_verify($md, $hash)) {
                // Stockage des infos dans la session
                $_SESSION['id'] = $row['idUtilisateur'];
                $_SESSION['login'] = $id;

                // Récupérer idRole depuis disposer
                $stmtRole = $pdo->prepare("SELECT idRole FROM disposer WHERE idUtilisateur = ? LIMIT 1");
                $stmtRole->execute([$row['idUtilisateur']]);
                $roleRow = $stmtRole->fetch(PDO::FETCH_ASSOC);
                $_SESSION['idRole'] = $roleRow['idRole'] ?? null;

                // Redirection immédiate après connexion
                header("Location: index.php");
                exit();
            } else {
                $error = "Identifiant ou mot de passe incorrect.";
            }
        } else {
            $error = "Identifiant ou mot de passe incorrect.";
        }
    } catch (PDOException $e) {
        $error = "Erreur interne : " . htmlspecialchars($e->getMessage());
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card shadow">
                <nav class="navbar navbar-expand-lg text-center" style="background: linear-gradient(to right, #dadada, #b6b6b6); height: 50px;">
                    <div class="container">Connexion</div>
                </nav>
                <div class="card-body">

                    <?php if (!empty($error)): ?>
                        <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

                    <?php if (empty($_SESSION['id'])): ?>
                        <!-- FORMULAIRE DE CONNEXION -->
                        <form action="" method="post" class="mt-3">
                            <div class="mb-3">
                                <label for="id" class="form-label">Identifiant</label>
                                <input type="text" class="form-control" id="id" name="id" required autocomplete="username">
                            </div>
                            <div class="mb-3">
                                <label for="md" class="form-label">Mot de passe</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="md" name="md" required autocomplete="current-password">
                                    <button class="btn btn-outline-secondary" type="button" id="togglePassword" tabindex="-1">
                                        <i class="bi bi-eye" id="eyeIcon"></i>
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark w-100">Connexion</button>
                        </form>
                    <?php else: ?>
                        <!-- UTILISATEUR DÉJÀ CONNECTÉ -->
                        <div class="alert alert-success text-center">
                            Connecté(e) en tant que <strong><?= htmlspecialchars($_SESSION['login']) ?></strong>
                        </div>
                        <div class="text-center">
                            <a href="deco.php" class="btn btn-outline-danger">Déconnexion</a>
                        </div>
                        <!-- Redirection auto après 5 secondes -->
                        <meta http-equiv="refresh" content="5;url=index.php">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#md');
    const eyeIcon = document.querySelector('#eyeIcon');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        eyeIcon.classList.toggle('bi-eye');
        eyeIcon.classList.toggle('bi-eye-slash');
    });
</script>
</body>
</html>

<?php session_start(); ?>
<!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Navbar avec Bootstrap -->
<nav class="navbar navbar-expand-lg" style="background: linear-gradient(to right, rgb(218, 218, 218), rgb(182, 182, 182)); height: 50px;">
  <div class="container">
    
    <div class="ms-auto d-flex align-items-right">
      <div class="alert mb-0 py-1 px-3" style="background: none; border: none;">
     <?php if (isset($_SESSION['id'])): ?>
        <?php echo htmlspecialchars($_SESSION['login']); ?>
      <?php else: ?>
        Vous n'êtes pas connecté(e).
      <?php endif; ?>
      </div>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-start">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perso.php">Présentation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ecole.php">Parcours scolaire</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="entreprise.php">Entreprise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comp.php">Compétence</a>
        </li>
        

        <!-- Affiche le lien "Document" seulement si l'utilisateur est connecté ET a un rôle 1 ou 2 -->
        <?php if (isset($_SESSION['id']) && isset($_SESSION['idRole']) && ($_SESSION['idRole'] == 1 || $_SESSION['idRole'] == 2)): ?>
          <li class="nav-item">
            <a class="nav-link" href="document.php">Document</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="epreuve.php">Appui stratégique</a>
        </li>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

        <!-- Connexion / Déconnexion -->
        <?php if (isset($_SESSION['id'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="deco.php">Déconnexion</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="connexion.php">Connexion</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

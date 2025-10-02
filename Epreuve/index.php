<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!-- Inclusion du contenu de barre.php -->
    <div id="barre-placeholder"></div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
      fetch('barre.php', { cache: 'no-cache' }) // Désactive le cache pour éviter les problèmes de chargement
        .then(response => {
        if (!response.ok) {
          throw new Error('Erreur HTTP ' + response.status);
        }
        return response.text();
        })
        .then(data => {
        document.getElementById('barre-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement de barre.php:', error));
      });
    </script>
    <nav class="bg-cyan-700 text-black">
      <div class="container py-5">
        <h1 class="text-center fw-lighter fw-italic fs-md-4 fs-md-2 fs-lg-2">Bienvenue sur mon portfolio</h1>
      </div>
    </header>
  <footer class="border-top">
    <div class="container py-5 bg-cyan-700 text-black">
      <div class="row gy-3"></div>
        <div class="row gy-3">
          <div class="col-12 col-md-6">
        <h1 class="text-center fw-lighter fw-italic fs-md-4 fs-md-2 fs-lg-2">Je suis Adriano Razanatera</h1>
        <h2 class="text-center fw-lighter fw-italic fs-md-4 fs-md-2 fs-lg-2">Étudiant en BTS SIO option SLAM au campus La Futaie</h2>
        <h3 class="text-center fw-lighter fw-italic fs-md-4 fs-md-2 fs-lg-2">Je suis un jeune être humain de 19 ans j'aime coder, la vie, la boxe, les animes et les mangas.</h3>
        <a class="btn btn-primary mt-5" href="perso.php" role="button">Suivant</a>
      </nav>
          </div>
         <div class="col-15 col-md-4">
        <img src="img/html.gif" alt="Photo de Adriano Razanatera" class="img-fluid rounded" style="width: 100%; height: auto;">
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="border-bottom">
  
    <div id="footer-placeholder"></div>
    <script>
        // Charge bas.php dans le footer
        fetch('bas.php')
            .then(response => response.text())
            .then(data => {
                document.getElementById('footer-placeholder').innerHTML = data;
            })
            .catch(error => console.error('Erreur lors du chargement de bas.php:', error));
    </script>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </footer>
</body>
</html>

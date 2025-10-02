<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mon stage</title>

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
      // Charger le contenu de barre.php dans le header
      fetch('barre.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('barre-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement de barre.php:', error));
    </script>
    <div class="container my-3">
        <a href="epreuve.php" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Retour
        </a>
    </div>
        <div class="container my-4">
    <div class="row text-center gy-4 justify-content-center">
      <div class="col-md-3 d-flex justify-content-center">
        <div class="card h-100" style="width: 30rem;">
          <img src="img/G.png" class="card-img-top" alt="guide" style="height: 130px;color:rgb(158, 159, 160);">
          <div class="card-body d-flex flex-column">
            <p class="card-title">Guide user <br>Gestion de stock</p>
            <a href="fichier/Guide_stock.pdf" class="btn btn-primary" download>Télécharger</a>
          </div>
        </div>
      </div>

  <footer class="border-top">
    <div id="bas-placeholder"></div>
    <script>
      // Charger le contenu de bas.php dans le footer
      fetch('bas.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('bas-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement de bas.php:', error));
    </script>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>

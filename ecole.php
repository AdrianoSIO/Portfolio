<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suivi scolaire</title>

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

    <nav class="bg-cyan-700 text-black">
      <div class="container py-5">
        <h1 class="text-center fw-lighter fw-italic fs-md-4 fs-md-2 fs-lg-2">Suivi scolaire</h1>
      </div>
    </nav>
  </header>
  <div class="row text-center">
    <div class="col-md-4 d-flex justify-content-center align-items-stretch mb-4">
      <div class="card h-100" style="width: 16rem;">
        <img src="img/college.jpg" class="card-img-top" alt="collège" style="height: 180px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
          <p class="card-text flex-grow-1">Collège Privé Père Daniel Brottier Place de la Mairie 49360 MAULEVRIER<br>Formation Générale en Initiale de 6eme à 3eme</p>
          <a href="https://brottier.anjou.e-lyco.fr/" class="btn btn-primary mt-auto">Site Officiel</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center align-items-stretch mb-4">
      <div class="card h-100" style="width: 16rem;">
        <img src="img/lycee.jpg" class="card-img-top" alt="renaudeau" style="height: 180px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
          <p class="card-text flex-grow-1">Lycée Polyvalent Public FERNAND RENAUDEAU Rue de la tuilerie 49300 CHOLET<br>
            Bac Pro TNE Systemes Numériques option A Informatique et Réseaux
          </p>
          <a href="https://lycee-renaudeau.fr/" class="btn btn-primary mt-auto">Site Officiel</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex justify-content-center align-items-stretch mb-4">
      <div class="card h-100" style="width: 16rem;">
        <img src="img/futaie.jpg" class="card-img-top" alt="futaie" style="height: 180px; object-fit: cover;">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Campus La Futaie</h5>
          <p class="card-text flex-grow-1">Campus La Futaie Rue de la Petite Guimbarde, 79300 Bressuire<br>BTS Services Informatique aux Organisations</p>
          <a href="https://www.saintjo.org/formations/enseignement-superieur/" class="btn btn-primary mt-auto">Site Officiel</a>
        </div>
      </div>
    </div>
   <footer class="border-top">
   <!-- <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
      <div class="card h-100" style="width: 25rem;">
        <img src="img/anya.gif" class="card-img-top" alt="anya">
      </div>
    </div>
      -->
 
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

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pov : égoiste</title>

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
        <h1 class="text-center fw-lighter fw-italic fs-md-4 fs-md-2 fs-lg-2">Qui suis-je ? </h1>
      </div>
    </nav>
  </header>
  <p class="text-center fw-italic fs-6 fs-md-5 fs-lg-4">
    J’ai dix-neuf ans, mon nom complet est Adriano Razanatera--Antier. Je suis en deuxième année de BTS SIO option SLAM.<br>
    J’étudie au Campus La Futaie à Bressuire. Je suis un étudiant sérieux, motivé et passionné par le développement web et la programmation.<br>
    J’aime apprendre beaucoup de choses nouvelles. En dehors du développement web, j’aime la boxe anglaise et cuisiner.
    </p>  
    <!--<div class="row gy-3">
      <div class="col-12 d-flex justify-content-center">
        <img src="img/yla.gif" alt="Photo de Adriano Razanatera" class="img-fluid rounded" style="width: auto; height: auto; max-width: 100%;">
      </div>
      -->

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

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
</head>

<body>
  <header>
    <!-- Inclusion du contenu de barre.html -->
    <div id="barre-placeholder"></div>

    <script>
      // Charger le contenu de barre.html dans le header
      fetch('barre.html')
        .then(response => response.text())
        .then(data => {
          document.getElementById('barre-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement de barre.html:', error));
    </script>

    <nav class="bg-cyan-700 text-black">
      <div class="container py-5">
        <h1 class="text-center fw-bold fw-italic fs-md-4 fs-md-2 fs-lg-2">Créer votre compte</h1>
      </div>
    </nav>
  </header>
  <p class="text-center fw-italic fs-md- 3 fs-md-2 fs-lg-3">
    J’ai dix-huit ans, mon nom est Adriano, c’est clair.<br>
    J’aime les plaisirs élémentaires.<br>
    Vivre, manger, sourire, c’est là mon vrai credo,<br>
    Et coder quand le temps me laisse un créneau.<br>
    Je rêve de percer dans le monde du backend,<br>
    Mais sans trop de pression, l’avenir me comprend.<br>
    Globetrotter dans l’âme, je veux fouler la Terre,<br>
    Explorer chaque coin, de mille manières.<br>
    Le monde est immense, j’ai des jambes, des yeux,<br>
    Autant en profiter, découvrir tous ses lieux.<br>
    Je pratique la boxe, ce sport qui me passionne,<br>
    J’aime jouer, sortir, mener la vie que je façonne.
    <br>ChatGPT<br> "Hier c'est de l'histoire, demain est un mystère, 
    mais aujourd'hui est un cadeau. C’est pourquoi on l’appelle le présent." Maître Oogway</p>  
    <div class="row gy-3">
      <div class="col-12 d-flex justify-content-center">
        <img src="img/boruto.gif" alt="Photo de Adriano Razanatera" class="img-fluid rounded" style="width: auto; height: auto; max-width: 100%;">
      </div>

  <footer class="border-top">
    <div id="bas-placeholder"></div>
    <script>
      // Charger le contenu de bas.html dans le footer
      fetch('bas.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('bas-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement de bas.html:', error));
    </script>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
          crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>
</html>

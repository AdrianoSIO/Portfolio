
<!DOCTYPE html>
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
    <!-- Inclusion du contenu de barre.php -->
    <div id="barre-placeholder"></div>

    <script>
      fetch('barre.php')
        .then(response => response.text())
        .then(data => {
          document.getElementById('barre-placeholder').innerHTML = data;
        })
        .catch(error => console.error('Erreur lors du chargement de barre.php:', error));
    </script>

    <nav class="bg-cyan-700 text-black">
      <div class="container py-5">
        <h1 class="text-center fw-lighter fw-italic fs-md-4 fs-md-2 fs-lg-2">Compétences</h1>
      </div>
    </nav>
    </div>
        <div class="d-flex justify-content-center">
            <div class="col-15 col-md-2 mx-2">
                <img src="img/html.gif" alt="Photo de Adriano Razanatera" class="img-fluid rounded" style="width: 100%; height: auto;">
            </div>
            <div class="col-15 col-md-2 mx-1">
                <img src="img/js.gif" alt="Photo de Adriano Razanatera" class="img-fluid rounded" style="width: 100%; height: auto;">
            </div>
            <div class="col-15 col-md-2 mx-1">
                <img src="img/sql.gif" alt="Photo de Adriano Razanatera" class="img-fluid rounded" style="width: 100%; height: auto;">
        </div>
  </header>

  
  <!--<div class="row gy-3 my-4">
    <div class="col-12 d-flex justify-content-center">
      <img src="img/gto.gif" alt="Photo de Adriano Razanatera" class="img-fluid rounded" style="width: auto; height: 170px; max-width: 100%;">
    </div>
  </div>
    -->
  <footer class="border-top">
    <div id="bas-placeholder"></div>
    <script>
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

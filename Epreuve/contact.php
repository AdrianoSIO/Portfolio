<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
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
  <!-- Nouvelle version EmailJS -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
  <script>
    (function () {
      emailjs.init({
        publicKey: "P1u4RB7xEGJtq6P03", // la clé publique EmailJS
      });
    })();
  </script>
  </header>
</head>

<nav class="bg-cyan-700 text-black">
      <div class="container py-5">
    <h1 class="text-center fw-bold fw-italic fs-md-4 fs-md-2 fs-lg-2">Formulaire de contact</h1>

    <form id="contactForm">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Votre email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" required />
      </div>

      <div class="mb-3">
        <label for="exampleInputObject1" class="form-label">Objet</label>
        <input type="text" class="form-control" id="exampleInputObject1" name="subject" required />
      </div>

      <div class="mb-3">
        <label for="exampleInputMessage1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleInputMessage1" name="message" rows="5" required></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>

    <div id="status" class="mt-3"></div>
  </div>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function (event) {
      event.preventDefault();

      // Récupération des champs
      const params = {
        email: document.getElementById("exampleInputEmail1").value,
        subject: document.getElementById("exampleInputObject1").value,
        message: document.getElementById("exampleInputMessage1").value,
      };

      // Envoi via EmailJS
      emailjs.send("service_adg9tll", "template_dnrdtuu", params).then(
        function (response) {
          document.getElementById("status").innerHTML =
            '<div class="alert alert-success">✅ Message envoyé avec succès !</div>';
          document.getElementById("contactForm").reset();
        },
        function (error) {
          document.getElementById("status").innerHTML =
            '<div class="alert alert-danger">❌ Erreur lors de l’envoi<br>' +
            JSON.stringify(error) + "</div>";
        }
      );
    });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- EmailJS -->
  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
</head>

<body>

<header>
  <!-- Chargement de barre.php -->
  <div id="barre-placeholder"></div>
</header>

<nav class="bg-light">
  <div class="container py-5">

    <h1 class="text-center fw-bold">Formulaire de contact</h1>

    <form id="contactForm" class="mt-4">

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Votre email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputObject1" class="form-label">Objet</label>
        <input type="text" class="form-control" id="exampleInputObject1" required>
      </div>

      <div class="mb-3">
        <label for="exampleInputMessage1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleInputMessage1" rows="5" required></textarea>
      </div>

      <button type="submit" class="btn btn-dark w-100">Envoyer</button>

    </form>

    <div id="status" class="mt-3 text-center"></div>
  </div>
</nav>

<script>
  // Chargement barre.php
  fetch('barre.php')
    .then(res => res.text())
    .then(html => document.getElementById('barre-placeholder').innerHTML = html)
    .catch(err => console.error("Erreur chargement barre.php", err));

  // Initialisation EmailJS
  emailjs.init("P1u4RB7xEGJtq6P03");

  // Gestion envoi mail
  const form = document.getElementById("contactForm");
  const status = document.getElementById("status");

  form.addEventListener("submit", function(e) {
    e.preventDefault();

    status.innerHTML = '<div class="alert alert-info">⏳ Envoi en cours...</div>';

    emailjs.send("service_adg9tll", "template_dnrdtuu", {
      from_email: document.getElementById("exampleInputEmail1").value,
      subject: document.getElementById("exampleInputObject1").value,
      message: document.getElementById("exampleInputMessage1").value,
    })
    .then(() => {
      status.innerHTML = '<div class="alert alert-success">✅ Message envoyé avec succès !</div>';
      form.reset();
    })
    .catch((error) => {
      status.innerHTML = '<div class="alert alert-danger">❌ Erreur : ' + error.text + '</div>';
      console.error(error);
    });
  });
</script>

</body>
</html>

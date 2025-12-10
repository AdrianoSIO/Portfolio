<?php
$DB_HOST = 'falbala.futaie.org';   // attention : j'ai ajouté le point entre futaie et org
$DB_USER = 'razanateraa';
$DB_PASS = 'Yiechaizo8ie';
$DB_NAME = 'razanateraa_compte';

try {
    $pdo = new PDO(
        "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4",
        $DB_USER,
        $DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Erreur connexion BDD : " . $e->getMessage());
}

?>
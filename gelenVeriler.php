<?php
$ad = $_POST['ad'] ?? '';
$soyad = $_POST['soyad'] ?? '';
$email = $_POST['email'] ?? '';
$telefon = $_POST['telefon'] ?? '';
$mesaj = $_POST['mesaj'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelen Veriler</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
  <h2>Formdan Gelen Bilgiler</h2>
  <ul class="list-group">
    <li class="list-group-item"><strong>Ad:</strong> <?= htmlspecialchars($_POST['ad'] ?? '') ?></li>
    <li class="list-group-item"><strong>Soyad:</strong> <?= htmlspecialchars($_POST['soyad'] ?? '') ?></li>
    <li class="list-group-item"><strong>E-posta:</strong> <?= htmlspecialchars($_POST['email'] ?? '') ?></li>
    <li class="list-group-item"><strong>Telefon:</strong> <?= htmlspecialchars($_POST['telefon'] ?? '') ?></li>
    <li class="list-group-item"><strong>Mesaj:</strong> <?= nl2br(htmlspecialchars($_POST['mesaj'] ?? '')) ?></li>
  </ul>
</div>
</body>
</html>
<?php
// Cabeçalho comum (header.php)
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sua Página</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" 
      aria-controls="navbarMenu" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'active';} ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == 'sobre.php'){echo 'active';} ?>" href="sobre.php">Sobre</a>
        </li>
       </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS (necessário para o menu retrátil funcionar) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
// Rodapé comum (footer.php)
?>
<footer class="bg-dark text-light mt-5 py-4 mt-auto">
  <div class="container">
    <div class="row">

      <div class="col-md-6 mb-3 mb-md-0">
        <h5>Menu</h5>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link p-0 text-light <?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){echo 'fw-bold';} ?>" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-0 text-light <?php if(basename($_SERVER['PHP_SELF']) == 'sobre.php'){echo 'fw-bold';} ?>" href="sobre.php">Sobre</a>
          </li>
         </ul>
      </div>

      <div class="col-md-6 text-md-end">
        <p class="mb-0">&copy; <?php echo date("Y"); ?> Sua Empresa. Todos os direitos reservados.</p>
      </div>

    </div>
  </div>
</footer>


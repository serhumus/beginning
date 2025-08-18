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
    </div>
	<p class="text-white text-end">Developed by <a class="text-white" href="https://www.tecnosmart.com.br">Tecno Smart</a></span>
  </div>
  <a href="http://wa.me/5511956049119"><img alt="Link direto para o WhatsApp" class="WhatsAppButton" style="display: none;" src="../assets/footer/WhatsappLogo100x102.webp" data-recalc-dims="1"></a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="mainFunctions.js"></script>

</footer>



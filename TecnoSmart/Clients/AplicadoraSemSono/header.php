<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplicadora Sem Sono | Pisos de Madeira de Alta Performance</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-TZHTL265GP"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-TZHTL265GP');
        </script>
        
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KVXBHKCK');</script>
        <!-- End Google Tag Manager -->

        <style>
          div.customizedBanner {
            overflow: hidden;        
            background-size: cover;
            background-position: center;
          }
          .b-example-divider {
            height: 1.4rem;
            background-color: rgba(210, 190, 77, 0.85);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1);
          }
          .buttonActiveOnMenu {
            border-bottom: 3px solid rgba(210, 190, 77, 1);
          }
          .WhatsAppButton {
            display: block;
            bottom: 20px;
            right: 20px;
            position: fixed !important;
            z-index: 99999;
            transition: transform 0.3s;
          }
          .WhatsAppButton:hover {
            transform: scale(1.1);
          }
          .navbar {
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
          }
          .navbar::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: -1;
          }
          
          .cardtecnosmart {
			  opacity: 0;
			  transform: translateY(20px);
			  transition: opacity 0.6s ease-out, transform 0.6s ease-out;
			  visibility: hidden;
			}

		   .cardtecnosmart.is-visible {
			   opacity: 1;
			   transform: translateY(0);
			   visibility: visible;
			 }
        </style>
    </head>
    <body class="d-flex flex-column">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVXBHKCK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        
        <!-- Cookie Consent Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Sua Privacidade</h5>
                <button type="button" onclick="hideModal()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-content p-3 border-0">
                Utilizamos cookies para personalizar e melhorar sua experiência em nosso site. Aceita nossa política de navegação?
              </div>
              <div class="modal-footer">
                <button type="button" onclick="refuseCookie()" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Não</button>
                <button type="button" onclick="acceptCookie()" class="btn btn-sm btn-primary" data-bs-dismiss="modal">Aceitar e Prosseguir</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top darkedMenuTop" aria-label="Fourth navbar example" style="background-image: url('../assets/galeria/WhatsApp%20Image%202023-09-18%20at%2012.20.43%20(3).jpeg'); background-repeat: no-repeat; background-position: 49% 56%; background-size: 100%;">                  
          <div class="container">
              <a class="navbar-brand" href="index.php"><img src="../assets/header/logo210.png" width="70" height="70" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse justify-content-end" id="navbarsExample04">
                <ul class="navbar-nav mb-2 mb-md-0">
                <?php
                  // Fixed duplicate 'Galeria' key
                  $menuLinks = array("Home" => "index.php", "Empresa" => "empresa.php", "Serviços" => "servicos.php", "Galeria" => "galeria.php", "Contato" => "contato.php");
                  
                  function IsURLCurrentPage($linkAddress){
                    return strpos($_SERVER['PHP_SELF'], $linkAddress) !== false;
                  }
                  
                  foreach($menuLinks as $name => $url) {
                    $activeClass = IsURLCurrentPage($url) ? "buttonActiveOnMenu" : "";
                    echo "<li class='nav-item mx-2 $activeClass'>
                            <a class='nav-link text-white fw-semibold' href='$url'>$name</a>
                          </li>";
                  }
                ?>
                </ul>
              </div>
          </div>
        </nav>
        <script>setTimeout(()=>{ if(typeof checkCookie === 'function') checkCookie(); },2000)</script>

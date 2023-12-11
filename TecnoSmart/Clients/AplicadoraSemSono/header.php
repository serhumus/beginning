<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplicadora Sem Sono </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
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

    <body class="d-flex flex-column">
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVXBHKCK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Buscando melhorar</h5>
              <button type="button" onclick="hideModal()" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Estamos trabalhando para melhorar a experiência no nosso site, por isso utilizamos cookies, concorda com os nossos esforços?
            </div>
            <div class="modal-footer">
              <button type="button" onclick="hideModal()" class="btn btn-secondary" data-dismiss="modal">Sim!</button>
              <button type="button" onclick="refuseCookie()" class="btn btn-primary">Não...</button>
            </div>
          </div>
        </div>
      </div>

      <style>
          div.customizedBanner {
            overflow: hidden;        
            -width: 300px;
            background-size: 140%;
            background-position: 49% 70%;
          }

          .b-example-divider {
          height: 1.4rem;
          background-color: rgba(210, 190, 77, 0.761);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
          }

          .buttonActiveOnMenu{
            border-color: rgba(210, 190, 77, 0.761);
            border-width: 0px 0px thick 0px;
            border-style: dotted;
          }

          .WhatsAppButton{
              display: block;
              top: 77%;
              left: 70%;
              position: fixed!important;
              z-index: 99999;
          }

          @media only screen and (min-width: 438px){
              /* For Mobile: */
              .WhatsAppButton{
                  left: 77%;
              }
          }
        </style>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top darkedMenuTop" aria-label="Fourth navbar example" style="background-image: url('../assets/galeria/WhatsApp%20Image%202023-09-18%20at%2012.20.43%20(3).jpeg'); background-repeat: no-repeat; background-position: 49% 70%; background-size: 154%;">         
        <style>
          .darkedMenuTop:after{
            content:'';
            background: rgb(0, 0, 0);
          }

        </style>   
        
          <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="../assets/header/logo210.png" width="84" height="84"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav" style="text-shadow: rgb(0, 0, 0) 70px 0 140px;">
                <?php
                  $menuLinks=array("Home" =>"index.php", "Empresa" =>"empresa.php",  "Galeria" =>"galeria.php", "Serviços" =>"servicos.php", "Galeria" =>"galeria.php", "Contato" =>"contato.php");
                  
                  function DisplayMenu($menuLinks){
                    foreach($menuLinks as $name => $url)
						{
							DisplayButton($name, $url, !IsURLCurrentPage($url));
						}
//Function each() deprecated since PHP 7.2.0
//                    while (list($name, $url) = each($menuLinks)){
//                    DisplayButton($name, $url, !IsURLCurrentPage($url));
//                    }
                  }  
                  
                  function IsURLCurrentPage($linkAdress){
                    if(strpos($_SERVER['PHP_SELF'], $linkAdress)==false){
                      return false;
                    }
                    else{
                      return true;
                    }
                  }
                  
                  function DisplayButton($name, $url, $active=true){
                    if ($active){
                      echo "<li class=\"nav-item mb-3\">
                      <a class=\"nav-link active\" style=\"text-shadow: rgb(0, 0, 0) 1px 1px 7px;\" aria-current=\"page\" href=\"$url\">$name</a>
                    </li>";
                    }
                    else{
                      echo "<li class=\"nav-item buttonActiveOnMenu  mb-3\">
                      <span class=\"nav-link active py-0\" aria-current=\"page\">$name</span>
                    </li>";
                    }
                  }
                  DisplayMenu($menuLinks);
                ?>
                </ul>
              </div>
            </div>
          </nav>
<script>setTimeout(()=>{showModal()},2000)</script>

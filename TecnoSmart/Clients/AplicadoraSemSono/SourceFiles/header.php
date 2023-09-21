<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aplicadora Sem Sono </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="d-flex flex-column">
        <style>
            .b-example-divider {
            height: 1.4rem;
            background-color: rgba(210, 190, 77, 0.761);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
            }
            .buttonActiveOnMenu{
              background-color: rgba(210, 190, 77, 0.761);
            }
            .WhatsAppButton{
                display: block;
                top: 84%;
                left: 70%;
                position: fixed!important;
                z-index: 99999;
            }

            @media only screen and (min-width: 438px){
                /* For Mobile: */
                .WhatsAppButton{
                    left: 85%;
                }
            }

          </style>

        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" aria-label="Fourth navbar example">
            <div class="container-fluid" style="color: rgba(210, 190, 77, 0.761)">
              <a class="navbar-brand bs-yellow" href="#">APLICADORA SEM SONO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <?php
                  $menuLinks=array("Home" =>"index.php", "Empresa" =>"empresa.php",  "Galeria" =>"galeria.php", "Serviços" =>"servicos.php", "Galeria" =>"galeria.php", "Contato" =>"contato.php", );
                  
                  function DisplayMenu($menuLinks){
                    while (list($name, $url) = each($menuLinks)){
                      DisplayButton($name, $url, !IsURLCurrentPage($url));
                    }
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
                      echo "<li class=\"nav-item\">
                      <a class=\"nav-link active\" aria-current=\"page\" href=\"$url\">$name</a>
                    </li>";
                    }
                    else{
                      echo "<li class=\"nav-item buttonActiveOnMenu\">
                      <span class=\"nav-link active\" aria-current=\"page\">$name</span>
                    </li>";
                    }
                  }
                   DisplayMenu($menuLinks);
                ?>
                 </ul>
              </div>
            </div>
          </nav>

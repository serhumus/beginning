<?php
$argumentsOfFloor = array(
    "Calafetação de Alta Performance com Cola PU" => "Proteja seu piso contra infiltrações e rachaduras. Nosso sistema de calafetação utiliza poliuretano (PU) industrial flexível para blindar as juntas das suas tábuas contra umidade, poeira e mofo, prolongando a vida útil da sua estrutura.",
    "Aplicação de Resina Bona (Líder Mundial)" => "O melhor acabamento do mundo direto na sua sala. A aplicação de verniz Bona confere proteção extrema contra tráfego intenso, riscos e desgaste natural, garantindo secagem rápida, sem cheiro e com opções de brilho personalizadas.",
    "Aplicação Avançada de Skania e Sinteko" => "Resistência de alta durabilidade e brilho imponente. Trabalhamos com as marcas clássicas do mercado para criar uma película vitrificada protetora que realça os veios naturais da madeira, conferindo sofisticação a qualquer ambiente.",
    "Clareamento, Pátina e Ebanização Premium" => "Design moderno e customização total. Modifique completamente a estética do seu ambiente escurecendo a madeira com ebanização profunda ou criando efeitos rústicos modernos com a pátina de alta precisão.",
    "Restauração Completa de Assoalhos de Madeira" => "Substituição cirúrgica de peças danificadas, correção de tábuas soltas e nivelamento de desníveis estruturais causados pelo tempo ou por infiltrações antigas. Deixamos seu assoalho antigo novo outra vez.",
    "Raspagem Profissional de Pisos com Maquinário Moderno" => "Eliminação completa de vernizes antigos, riscos profundos e manchas impregnadas. Nossa equipe utiliza lixadeiras industriais com aspiração integrada para revitalizar a madeira crua de forma rápida e eficiente."
);

function listOfButtons($argumentsOfFloor) {
    $howManyItems = 0;
    echo '<div class="accordion w-100 shadow-sm" id="accordianLike">';
    foreach($argumentsOfFloor as $name => $argument) {
        echo '<div class="accordion-item border">';
        echo "<div class='d-grid accordion-header' id='heading$howManyItems'>";
        echo "<button class='btn btn-dark text-start py-3 px-4 fw-semibold border-bottom rounded-0' type='button' data-bs-toggle='collapse' data-bs-target='#serviceList$howManyItems' aria-expanded='false' aria-controls='serviceList$howManyItems'>$name</button>";
        echo '</div>';
        echo "<div id='serviceList$howManyItems' class='accordion-collapse collapse' data-bs-parent='#accordianLike' aria-labelledby='heading$howManyItems'>";
        echo "<div class='card-body bg-light text-secondary border-top'>$argument</div>";
        echo '</div>';
        echo '</div>';
        $howManyItems++;
    }
    echo '</div>';
}

listOfButtons($argumentsOfFloor);
?>

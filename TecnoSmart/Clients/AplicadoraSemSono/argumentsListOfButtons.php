<?php
$argumentsOfFloorFeatures = array(
    "Durabilidade" => "Pisos de madeira tratados duram décadas com nossa técnica de raspagem e vedação premium.",
    "Aparência" => "Sofisticação imobiliária atemporal que aumenta o valor comercial do seu imóvel.", 
    "Versatilidade" => "Tratamentos foscos, acetinados ou brilhantes adaptáveis ao seu projeto arquitetônico.", 
    "Manutenção" => "Limpeza simplificada devido às películas seladoras importadas de alta resistência.", 
    "Saúde" => "Superfícies hipoalergênicas que impossibilitam o acúmulo de ácaros e poeiras tóxicas.", 
    "Sustentabilidade" => "Madeiras com procedência certificada e restaurações que evitam desperdício florestal."
);
        
function listOfFeatures($argumentsOfFloorFeatures) {
    echo '<div class="row g-3">';
    foreach($argumentsOfFloorFeatures as $name => $argument) {
        echo '<div class="col-md-6">';
        echo "<button class='btn btn-outline-dark w-100 mb-2 py-2 fw-bold text-start' type='button' data-bs-toggle='collapse' data-bs-target='#feature-$name' aria-expanded='false'>+ $name</button>";
        echo "<div class='collapse mb-3' id='feature-$name'>
                <div class='card card-body bg-light border-0'>$argument</div>
              </div>";
        echo '</div>';
    }
    echo '</div>';
}

listOfFeatures($argumentsOfFloorFeatures);
?>

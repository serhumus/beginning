<?php
        $argumentsOfFloor=array("Instalação de assoalho de madeira" =>"Instalação de pisos de madeira em residências, comércios e outras edificações.  O serviço de instalação de assoalhos inclui a preparação e nivelamento do piso, o corte e encaixe das peças de madeira ou outro material escolhido e a fixação adequada das mesmas.","Lixamento de assoalhos de madeira" => "Processo de lixar e nivelar a superfície dos pisos de madeira para remover arranhões, manchas e outras imperfeições.", " Restauração de assoalhos de madeira"=>"Processo de reparação de pisos de madeira danificados pelo tempo, umidade ou desgaste, incluindo a substituição de tábuas de madeira soltas, rachadas, entre outras necessidades.  A restauração de assoalhos envolve a remoção do revestimento antigo, lixamento da madeira, reparação de danos e imperfeições e posterior aplicação de selador, verniz ou outro acabamento escolhido para devolver a beleza e funcionalidade ao piso.", "Aplicação de verniz ou selador." => "Aplicação de produtos na superfície dos pisos de madeira para protegê-los contra arranhões, manchas e desgaste.", "Polimento de assoalhos de madeira" => "Finalização de instalações com lixamento fino, para dar brilho e acabamento ao assoalho de madeira. ", "Raspagem de pisos de madeira" => "O serviço de raspagem de pisos de madeira é o processo de remover a camada superficial do assoalho de madeira com o objetivo de nivelar a superfície, remover manchas e imperfeições, e renovar a aparência do piso. O serviço envolve o uso de uma máquina de lixamento e pode ser seguido pelo polimento e aplicação de um acabamento protetor.

        Este serviço é importante porque o piso de madeira pode se desgastar ao longo do tempo devido ao tráfego de pedestres, quedas de objetos, riscos e manchas. A raspagem permite que o piso seja restaurado para um estado original ou próximo, e pode prolongar a vida útil do piso. Além disso, a renovação do piso de madeira pode valorizar uma propriedade e melhorar a aparência geral do interior da casa ou prédio.");
        
        
        function listOfButtons($argumentsOfFloor){
            $howManyItems=0;
            echo '<div class="accordion" id="accordianLike">';
            while(list($name,$argument)=each($argumentsOfFloor)){
                echo '<div class="accordion-item align-items-center">';
                echo "<div class=\"d-grid accordion-header\" id=\"heading$howManyItems\">";
                displayButtons($howManyItems, $name);
                echo '</div>';
                displayArgumentsCollapsed($howManyItems, $argument);
                echo '</div>';
                $howManyItems++;
            }
            echo '</div>';
        }

        function displayButtons($howManyItems, $name){
            echo "<button class=\"btn btn-info\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-toggle=\"collapse\" data-bs-target=\"#serviceList$howManyItems\" aria-expanded=\"false\" aria-controls=\"#serviceList$howManyItems\">$name</button>";
        }
        function displayArgumentsCollapsed($howManyItems, $argument){
            echo "<div class=\"accordion-collapse collapse\" data-bs-parent=\"#accordianLike\" aria-labelledby=\"#heading$howManyItems\" id=\"serviceList$howManyItems\">";
            echo "<div class=\"card card-body\">$argument";
            echo '</div>';
            echo '</div>';
        }
            listOfButtons($argumentsOfFloor);
        ?>
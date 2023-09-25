<?php
        $argumentsOfFloor=array("Instalação de assoalho de madeira" =>"Pisos de madeira são muito duráveis e podem durar por décadas, especialmente se forem bem cuidados.","Lixamento de assoalhos de madeira" => "Um piso de madeira confere um aspecto elegante e acolhedor para a sua casa, além de ser um clássico que nunca sai de moda.", " Restauração de assoalhos de madeira"=>"Há vários tipos de madeiras e acabamentos disponíveis, o que significa que há opções para se adequar a diferentes estilos de decoração.", "Aplicação de verniz ou selador" => "Pisos de madeira são relativamente fáceis de limpar e manter. Com os cuidados adequados, eles permanecerão bonitos por anos.", "Polimento de assoalhos de madeira" => "Ao contrário de outros materiais de piso, pisos de madeira não acumulam poeira, pelos de animais ou outros alérgenos, por isso são uma boa opção para pessoas com alergias ou problemas respiratórios.", "Raspagem de pisos de madeira" => "O serviço de raspagem de pisos de madeira é o processo de remover a camada superficial do assoalho de madeira com o objetivo de nivelar a superfície, remover manchas e imperfeições, e renovar a aparência do piso. O serviço envolve o uso de uma máquina de lixamento e pode ser seguido pelo polimento e aplicação de um acabamento protetor.

        Este serviço é importante porque o piso de madeira pode se desgastar ao longo do tempo devido ao tráfego de pedestres, quedas de objetos, riscos e manchas. A raspagem permite que o piso seja restaurado para um estado original ou próximo, e pode prolongar a vida útil do piso. Além disso, a renovação do piso de madeira pode valorizar uma propriedade e melhorar a aparência geral do interior da casa ou prédio.");
        
        
        function listOfButtons($argumentsOfFloor){
            $howManyItems=0;
            while(list($name,$argument)=each($argumentsOfFloor)){
                echo '<div class="row">';
                displayButtons($howManyItems, $name);
                displayArgumentsCollapsed($howManyItems, $argument);
                echo '</div>';
                $howManyItems++;
            }
        }

        function displayButtons($howManyItems, $name){
            echo "<button class=\"btn btn-secondary mb-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#serviceList$howManyItems\" aria-expanded=\"false\" aria-controls=\"#serviceList$howManyItems\">$name</button>";
        }
        function displayArgumentsCollapsed($howManyItems, $argument){
            echo "<div class=\"col\">
            <div class=\"collapse multi-collapse\" id=\"serviceList$howManyItems\">
              <div class=\"card card-body\">
                $argument
              </div>
            </div>
          </div>";
        }
            listOfButtons($argumentsOfFloor);
        ?>
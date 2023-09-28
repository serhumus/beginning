<?php
        $argumentsOfFloor=array("Durabilidade" =>"Pisos de madeira são muito duráveis e podem durar por décadas, especialmente se forem bem cuidados.","Aparência" => "Um piso de madeira confere um aspecto elegante e acolhedor para a sua casa, além de ser um clássico que nunca sai de moda.", "Versatilidade"=>"Há vários tipos de madeiras e acabamentos disponíveis, o que significa que há opções para se adequar a diferentes estilos de decoração.", "Manutenção" => "Pisos de madeira são relativamente fáceis de limpar e manter. Com os cuidados adequados, eles permanecerão bonitos por anos.", "Saúde" => "Ao contrário de outros materiais de piso, pisos de madeira não acumulam poeira, pelos de animais ou outros alérgenos, por isso são uma boa opção para pessoas com alergias ou problemas respiratórios.", "Sustentabilidade" => "Quando é obtida de fontes responsáveis, usar madeira como material de construção é uma opção sustentável e renovável.");
        
        function listOfButtons($argumentsOfFloor){
            while(list($name,$argument)=each($argumentsOfFloor)){
                echo '<div class="row">';
                displayButtons($name);
                displayArgumentsCollapsed($name, $argument);
                echo '</div>';
            }
        }

        function displayButtons($name){
            echo "<button class=\"btn btn-secondary mb-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#$name\" aria-expanded=\"false\" aria-controls=\"$name\">$name</button>";
        }
        function displayArgumentsCollapsed($name, $argument){
            echo "<div class=\"col\">
            <div class=\"collapse multi-collapse\" id=\"$name\">
              <div class=\"card card-body\">
                $argument
              </div>
            </div>
          </div>";
        }
            listOfButtons($argumentsOfFloor);
        ?>
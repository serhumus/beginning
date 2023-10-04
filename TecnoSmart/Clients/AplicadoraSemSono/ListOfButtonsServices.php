<?php
        $argumentsOfFloor=array("Calafetação com cola"=> "A calafetação com cola é um método utilizado para vedar juntas e fissuras em superfícies, como paredes, janelas, portas, pisos e telhados. A cola é aplicada em uma linha uniforme ao longo da junta ou fissura, formando uma barreira impermeável que impede a entrada de ar, água e poeira. Existem vários tipos de cola que podem ser usados para calafetar, incluindo a cola de silicone, a cola de poliuretano e a cola acrílica. Cada tipo de cola tem suas próprias propriedades e benefícios, e a escolha do tipo de cola depende do tipo de superfície que está sendo calafetada e das condições ambientais em que a superfície está exposta. A calafetação com cola é uma técnica eficaz para melhorar a eficiência energética de uma casa ou edifício, pois ajuda a reduzir a perda de calor ou ar condicionado através de juntas e fissuras. Além disso, a calafetação com cola também ajuda a prevenir a infiltração de umidade, o que pode causar danos estruturais e problemas de saúde, como mofo e bolor. Em resumo, a calafetação com cola é uma técnica importante para manter a integridade estrutural e a eficiência energética de uma casa ou edifício.", "Palatina"=> "A palatização de pisos de madeira é um processo de nivelamento e alisamento de pisos de madeira que foram danificados ou desgastados ao longo do tempo. O processo envolve a remoção de uma fina camada da superfície do piso de madeira para remover arranhões, manchas e outras imperfeições. O processo de palatização começa com a limpeza completa do piso de madeira para remover toda a sujeira e detritos. Em seguida, uma máquina de palatização é usada para lixar a superfície do piso de madeira, removendo uma camada fina da madeira. O processo é repetido várias vezes com diferentes tipos de lixas, começando com uma lixa grossa e terminando com uma lixa fina para obter uma superfície lisa e uniforme. Depois que o piso de madeira é lixado, é aplicado um acabamento para proteger a madeira e dar-lhe um brilho. O acabamento pode ser um verniz, uma cera ou um óleo, dependendo do tipo de madeira e do acabamento desejado. É importante notar que a palatização de pisos de madeira é um processo que deve ser realizado por profissionais experientes, pois se não for feito corretamente, pode danificar permanentemente o piso de madeira.", "Clareamento" => "Processo de lixar e nivelar a superfície dos pisos de madeira para remover arranhões, manchas e outras imperfeições.", " Restauração de assoalhos de madeira"=>"Processo de reparação de pisos de madeira danificados pelo tempo, umidade ou desgaste, incluindo a substituição de tábuas de madeira soltas, rachadas, entre outras necessidades.  A restauração de assoalhos envolve a remoção do revestimento antigo, lixamento da madeira, reparação de danos e imperfeições e posterior aplicação de selador, verniz ou outro acabamento escolhido para devolver a beleza e funcionalidade ao piso.", "Aplicação de verniz ou selador." => "Aplicação de produtos na superfície dos pisos de madeira para protegê-los contra arranhões, manchas e desgaste.", "Polimento de assoalhos de madeira." => "Finalização de instalações com lixamento fino, para dar brilho e acabamento ao assoalho de madeira. ", "Raspagem de pisos de madeira" => "O serviço de raspagem de pisos de madeira é o processo de remover a camada superficial do assoalho de madeira com o objetivo de nivelar a superfície, remover manchas e imperfeições, e renovar a aparência do piso. O serviço envolve o uso de uma máquina de lixamento e pode ser seguido pelo polimento e aplicação de um acabamento protetor. Este serviço é importante porque o piso de madeira pode se desgastar ao longo do tempo devido ao tráfego de pedestres, quedas de objetos, riscos e manchas. A raspagem permite que o piso seja restaurado para um estado original ou próximo, e pode prolongar a vida útil do piso. Além disso, a renovação do piso de madeira pode valorizar uma propriedade e melhorar a aparência geral do interior da casa ou prédio.");
        
        
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
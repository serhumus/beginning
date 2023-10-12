<?php
        $argumentsOfFloor=array("Ebanização"=>"Ebanização é o processo de tingir de preto a madeira, utilizado em tacos, assoalhos e madeira de demolição, com o objetivo é valorizar os veios da madeira sem cobri-la totalmente.", "Calafetação com cola"=> "A calafetação com cola é um método utilizado para vedar juntas e fissuras em superfícies, como paredes, janelas, portas, pisos e telhados. A cola é aplicada em uma linha uniforme ao longo da junta ou fissura, formando uma barreira impermeável que impede a entrada de ar, água e poeira. Existem vários tipos de cola que podem ser usados para calafetar, incluindo a cola de silicone, a cola de poliuretano e a cola acrílica. Cada tipo de cola tem suas próprias propriedades e benefícios, e a escolha do tipo de cola depende do tipo de superfície que está sendo calafetada e das condições ambientais em que a superfície está exposta. A calafetação com cola é uma técnica eficaz para melhorar a eficiência energética de uma casa ou edifício, pois ajuda a reduzir a perda de calor ou ar condicionado através de juntas e fissuras. Além disso, a calafetação com cola também ajuda a prevenir a infiltração de umidade, o que pode causar danos estruturais e problemas de saúde, como mofo e bolor. Em resumo, a calafetação com cola é uma técnica importante para manter a integridade estrutural e a eficiência energética de uma casa ou edifício.", "Aplicação de Bona"=>"A aplicação de bona em assoalhos de madeira é um processo relativamente simples, mas que requer alguns cuidados para garantir um acabamento de qualidade. Primeiramente, é necessário lixar o assoalho para remover qualquer imperfeição e deixá-lo uniforme. Em seguida, é feita a aplicação do selador, que ajuda a proteger a madeira e prepará-la para receber o verniz. Depois de seco, é aplicado o verniz Bona em camadas finas e uniformes, com o auxílio de um aplicador específico. É importante aguardar o tempo de secagem entre as camadas e lixar levemente a superfície antes de aplicar a próxima. Ao final, o resultado é um assoalho de madeira com um acabamento brilhante e duradouro." , "Aplicação de Skania e Sinteko"=>"Skania e Sinteko são marcas de produtos utilizados para a aplicação de verniz em assoalhos de madeira. Ambos os produtos são conhecidos por sua alta qualidade e durabilidade, proporcionando uma camada protetora que ajuda a preservar a beleza e a resistência da madeira. A aplicação desses produtos é feita por profissionais especializados, que realizam um processo de lixamento e preparação da superfície antes da aplicação do verniz. Além de proteger o assoalho contra desgaste e riscos, a aplicação de Skania e Sinteko também pode ajudar a realçar a cor e o brilho da madeira, deixando o ambiente ainda mais elegante e aconchegante.", "PU (Verniz poliuretano)" =>"PU é a sigla para poliuretano, um tipo de resina sintética muito utilizada na indústria de revestimentos e acabamentos. Quando aplicado em assoalhos de madeira, o PU forma uma camada protetora resistente e durável, que ajuda a preservar a beleza e a integridade da madeira por muito mais tempo. Além disso, o PU confere um acabamento brilhante e uniforme ao assoalho, realçando suas características naturais e conferindo um aspecto elegante e sofisticado ao ambiente. A aplicação do PU em assoalhos de madeira é uma técnica muito comum em projetos de construção e reforma, pois oferece uma excelente relação custo-benefício e pode ser facilmente realizada por profissionais especializados.", "Pátina de madeira"=> "A realização de pátina de madeira envolve a aplicação de técnicas de pintura e acabamento em superfícies de madeira para criar um efeito envelhecido ou desgastado com aplicações de técnicas de pintura, escolha de materiais e ferramentas adequadas, além de habilidades em trabalhos manuais e criatividade para desenvolver novos efeitos. Algumas das principais técnicas de pátina de madeira incluem a técnica de lixamento, que consiste em lixar a superfície da madeira para criar um efeito desgastado, atécnica de envelhecimento, que envolve a aplicação de uma camada de tinta e a remoção parcial da mesma para criar um efeito de desgaste, e a técnica de esfregamento, que consiste em aplicar uma camada de tinta e esfregar a superfície com um pano para criar um efeito de desgaste suave.É importante buscar cursos e treinamentos na área, além de investir em materiais de qualidade e ferramentas adequadas para realizar o trabalho com eficiência e precisão.", "Clareamento" => "Processo de lixar e nivelar a superfície dos pisos de madeira para remover arranhões, manchas e outras imperfeições.", " Restauração de assoalhos de madeira"=>"Processo de reparação de pisos de madeira danificados pelo tempo, umidade ou desgaste, incluindo a substituição de tábuas de madeira soltas, rachadas, entre outras necessidades.  A restauração de assoalhos envolve a remoção do revestimento antigo, lixamento da madeira, reparação de danos e imperfeições e posterior aplicação de selador, verniz ou outro acabamento escolhido para devolver a beleza e funcionalidade ao piso.", "Aplicação de verniz ou selador." => "Aplicação de produtos na superfície dos pisos de madeira para protegê-los contra arranhões, manchas e desgaste.", "Polimento de assoalhos de madeira." => "Finalização de instalações com lixamento fino, para dar brilho e acabamento ao assoalho de madeira. ", "Raspagem de pisos de madeira" => "O serviço de raspagem de pisos de madeira é o processo de remover a camada superficial do assoalho de madeira com o objetivo de nivelar a superfície, remover manchas e imperfeições, e renovar a aparência do piso. O serviço envolve o uso de uma máquina de lixamento e pode ser seguido pelo polimento e aplicação de um acabamento protetor. Este serviço é importante porque o piso de madeira pode se desgastar ao longo do tempo devido ao tráfego de pedestres, quedas de objetos, riscos e manchas. A raspagem permite que o piso seja restaurado para um estado original ou próximo, e pode prolongar a vida útil do piso. Além disso, a renovação do piso de madeira pode valorizar uma propriedade e melhorar a aparência geral do interior da casa ou prédio.");
        
        
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
            echo "<button class=\"btn btn-dark\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-toggle=\"collapse\" data-bs-target=\"#serviceList$howManyItems\" aria-expanded=\"false\" aria-controls=\"#serviceList$howManyItems\">$name</button>";
        }
        function displayArgumentsCollapsed($howManyItems, $argument){
            echo "<div class=\"accordion-collapse collapse\" data-bs-parent=\"#accordianLike\" aria-labelledby=\"#heading$howManyItems\" id=\"serviceList$howManyItems\">";
            echo "<div class=\"card card-body\">$argument";
            echo '</div>';
            echo '</div>';
        }
            listOfButtons($argumentsOfFloor);
        ?>
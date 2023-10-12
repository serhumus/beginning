        function zoom(e){
        var zoomer = e.currentTarget;
        e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
        e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
        x = offsetX/zoomer.offsetWidth*100
        y = offsetY/zoomer.offsetHeight*100
        zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }
        
        var arrayOfImgs=["../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.39 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.38 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.38.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.32 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.32 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.32.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.31 (3).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.31 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.31 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.31.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.30 (3).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.30 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.30 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.30.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.29 (3).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.29 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.29 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.29.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.28 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.28.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.24 (3).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.24 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.24 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.24.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.23 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.23 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.23.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.22 (3).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.22 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.22 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.22.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.21 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.21 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.21.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.20 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.22.20.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.38.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.37 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.37 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.37.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.36 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.36 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.36.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.35 (3).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.35 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.35 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.35.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.34 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.34 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.21.34.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.20.44 (1).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.20.44.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.20.43 (3).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.20.43 (2).jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.20.43.jpeg", "../assets/galeria/WhatsApp Image 2023-09-18 at 12.20.42.jpeg"]
        
        var arrayOfImgsSlashed=["../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.39\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.38\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.38.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.32\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.32\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.32.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.31\ \(3\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.31\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.31\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.31.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.30\ \(3\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.30\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.30\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.30.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.29\ \(3\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.29\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.29\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.29.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.28\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.28.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.24\ \(3\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.24\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.24\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.24.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.23\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.23\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.23.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.22\ \(3\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.22\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.22\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.22.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.21\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.21\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.21.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.20\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.22.20.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.38.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.37\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.37\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.37.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.36\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.36\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.36.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.35\ \(3\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.35\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.35\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.35.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.34\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.34\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.21.34.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.20.44\ \(1\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.20.44.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.20.43\ \(3\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.20.43\ \(2\).jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.20.43.jpeg", "../assets/galeria/WhatsApp\ Image\ 2023-09-18\ at\ 12.20.42.jpeg"]
        
        var internalPoint=0
        var xElements=arrayOfImgs.length
        var staticImageElement = document.getElementById('imageStatic');
        var zoomedImageElement = document.getElementById('zoomedImage');
        function nextImg(){
            if(internalPoint==xElements-1){
                internalPoint=0
            }else{
                internalPoint++
            }
            changerImg(internalPoint)
        }
        function previousImg(){
            if(internalPoint==0){
                internalPoint=xElements-1
            }else{
                internalPoint--
            }
            changerImg(internalPoint)
        }

        function randomNumberInRange(min,max){
            return Math.floor(
                Math.random()*(max-min)+min
            )
        }

        function changerImg(x){
            staticImageElement.src=arrayOfImgs[x]
            let url="url('"+arrayOfImgsSlashed[x]+"')"
            zoomedImageElement.style.backgroundImage=url
            console.log(url)
        }
       
        var imageRandomHomePage=document.getElementById("randomImg") 
        function changerRandomImg(){
            console.log(imageRandomHomePage.src)
            imageRandomHomePage.src=arrayOfImgs[randomNumberInRange(0, xElements)]
            console.log(imageRandomHomePage.src)
        }

            //function to Whatsapp buttom and footer card to tecnosmart.com.br indication
            hideWhatsappButton=function (){
                $(".WhatsAppButton").hide("slow");
                $(".cardtecnosmart").show("slow")
            };
            showWhatsappButton=function (){
                $(".WhatsAppButton").show("slow");
                $(".cardtecnosmart").hide("slow")
            };
            
            //Load prime link to whatsapp and footer
            showWhatsappButton()
            $(".cardtecnosmart").show("slow")

            var lastScrollTop = 0;
            $(window).scroll(function(event){
                st = $(this).scrollTop();
                if (st > lastScrollTop){
                    hideWhatsappButton();
                    }
                else {
                    showWhatsappButton();
                    }
                lastScrollTop = st;
                });
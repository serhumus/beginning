<div class="b-example-divider"></div>          
            <div class="container bg-dark cardtecnosmart">
                <footer class="d-flex flex-wrap justify-content-end align-items-center py-3 my-4 border-top">
                  <ul class="nav col-md-4 list-unstyled d-flex">
                    <li>
                        <span class="mb-3 px-5 text-white">© 2023</span>
                    </li>
                    <li>
                        <span class="text-white ">Developed by <a class="text-white" href="https://www.tecnosmart.com.br">Tecno Smart</a></span>
                    </li>
                  </ul>
                </footer>
              </div>
              <div class="b-example-divider"></div> 

              <a href="http://wa.me/5511999670572"><img alt="Link direto para o WhatsApp" class="WhatsAppButton" style="display: none;" src="https://i0.wp.com/tecnosmart.com.br/wd/wp-content/uploads/2020/08/WhatsappLogo100x102.png?w=580" data-recalc-dims="1"></a>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
            //function to Whatsapp buttom and footer card to tecnosmart.com.br indication
            hideWhatsappButton=function (){
                $(".WhatsAppButton").hide("slow");
                $(".cardtecnosmart").show("slow")
            };
            showWhatsappButton=function (){
                $(".WhatsAppButton").show("slow");
                $(".cardtecnosmart").hide("slow")
            };
            
            let lastScrollTop = 0;
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
        </script>
    </body>
</html>
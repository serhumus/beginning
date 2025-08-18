//Modal functions:
		function hideModal()
		{
			$("#exampleModal").modal('hide')
		}
		
		function showModal()
		{
			$("#exampleModal").modal('show')
		}
		
		function refuseCookie()
		{
			hideModal();
		}
		
		function acceptCookie()
		{
			hideModal();
			setCookie("deniedCookie", 0, 350);
		}
		
		function setCookie(cname, cvalue, exdays)
		{
			const d = new Date();
			d.setTime(d.getTime() + (exdays*24*60*60*1000));
			let expires = "expires="+ d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
		}
		
		function getCookie(cname)
		{
			let name = cname + "=";
			let decodedCookie = decodeURIComponent(document.cookie);
			let ca = decodedCookie.split(';');
			for(let i = 0; i <ca.length; i++)
			{
				let c = ca[i];
				while (c.charAt(0) == ' ')
				{
					c = c.substring(1);
				}
				if (c.indexOf(name) == 0)
				{
					return c.substring(name.length, c.length);
				}
			}
			return "1";
		}
		
		function checkCookie()
		{
			let answer = getCookie("deniedCookie");
			if (answer != "0")
			{
				showModal();
			}
		}

            //function to Whatsapp buttom and footer card to tecnosmart.com.br indication
            hideWhatsappButton=function (){
                $(".WhatsAppButton").hide("slow");
            };
            showWhatsappButton=function (){
                $(".WhatsAppButton").show("slow");
            };
            
            //Load prime link to whatsapp and footer
            showWhatsappButton()

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

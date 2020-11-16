function check()
           {
                const nick = $('#nick');
                if(nick.val() === '' || nick.val() === null){
                nick.css('background','red');
                return false;
                }else{
                nick.css('background','rgba(0,0,0,0.50)');
                }
                const id = $('#id');
                if(id.val() === '' || id.val() === null){
                id.css('background','red');
                return false;
                }else{
                id.css('background','rgba(0,0,0,0.50)');
                }
           }

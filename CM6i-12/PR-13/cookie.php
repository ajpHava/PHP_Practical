<?php
        $username = "Tushar";
        $password = "123";
            
        setcookie($username,$password,time()+(86400*30),"/");

        if(isset($_COOKIE[$username])){
            echo "Cookie Name ".$username;
            echo "Cookie Value ".$password;
        }else{
            echo "Cookie not set";
        }
        
    ?>
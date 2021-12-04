<div id="logout">
        
        <?php

        session_start(); 
        session_unset(); // Apaga dados da sessão
        session_destroy(); // Encerra a sessão
        header('location:/projetos-php/news/pages/login.php');

        ?>
        
</div>
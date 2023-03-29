
<?php

   if($_POST["usuario"]== "admin" && $_POST["senha"]== 123){
    echo "Usuário logado";
   }else{   
    echo "Usuário ou senha inválidos!";
   }
?>
<?php 
function verificaUsuario($usuario,$senha){
    if($usuario=='admin' && $senha == 'admin'){

    } else{ 
        header("Location: http://localhost/funcao?erro=true");
    }
}
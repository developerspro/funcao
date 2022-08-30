<?php 
function verificaUsuario($usuario,$senha){
    if($usuario=='admin' && $senha == 'admin'){

    } else{ 
        header("Location: http://localhost/funcao?erro=true");
    }
}

function inc($pagina){
    include $pagina.".php";
}
function index()
{
    layout("tabela_dashboard","menu","cabecalho","rodape");
}

function layout($conteudo,$menu="menu",$cabecalho="cabecalho",$rodape="rodape")
{
    inc($cabecalho);
    inc($menu);
    inc($conteudo);
    inc($rodape);
}



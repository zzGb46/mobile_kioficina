<?php
 
class Rotas{
    public function executar(){
        $url = '/';
 
        if (isset($_GET['url'])){
            $url .= $_GET['url'];
        }
 
        $parametro = array();
 
        //Verifica se a URL nao esta vazia e nao é a raiz
        if (!empty($url) && $url != '/'){
 
            $url = explode('/', $url);
            array_shift(($url)); //Remove a barra
 
            $controladorAtual = ucfirst($url[0]).'Controller';
            array_shift($url); //Remover a primeira casa do Vetor
 
            if (!isset($url[0]) && !empty([0])){
                $acaoAtual = $url[0];
                array_shift($url);
            }else{
                $acaoAtual = 'index';
            }
 
            //Se ainda tiver algum elemento na URL será considerado paramentro
            if(count($url) > 0){
                $parametro = $url;
            }
        }else{
            $controladorAtual = 'LoginController';
            $acaoAtual = 'index';
        }
        if (!file_exists('../app/controllers/' . $controladorAtual . '.php') || !method_exists($controladorAtual, $acaoAtual)){
            echo 'Estou aqui, não existe o arquivo ' . $controladorAtual . ' e nem ação atual ' . $acaoAtual;
 
            //Definir um controlador de erro
            // $controladorAtual = 'ErroController';
            $acaoAtual = 'index';
        }
        //Criar uma instância para o controlador atual
        $controller = new $controladorAtual;
 
        // Chamar a ação dentro do controlador e passar o parâmetro
        call_user_func_array(array($controller, $acaoAtual), $parametro);
    }
}
 
?>
 
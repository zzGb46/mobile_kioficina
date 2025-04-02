<?php

class DepoimentosController extends Controller{
    public function index(){
        $dados = array();
        $dados['titulo'] = 'kiOficina - Depoimentos';
        $this->carregarViews('depoimentos', $dados);
    }
}
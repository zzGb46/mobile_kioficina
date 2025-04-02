<?php

class PerfilController extends Controller{
    public function index(){
        $dados = array();
        $dados['titulo'] = 'kiOficina - Perfil';
        $this->carregarViews('perfil', $dados);
    }
}
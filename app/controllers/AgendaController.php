<?php

class AgendaController extends Controller{
    public function index(){
        $dados = array();
        $dados['titulo'] = 'kiOficina - Agenda';
        $this->carregarViews('agenda', $dados);
    }
}
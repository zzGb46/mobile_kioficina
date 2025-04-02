<?php

class AgendamentoController extends Controller{
    public function index(){
        $dados = array();
        $dados['titulo'] = 'kiOficina - Agendamento';
        $this->carregarViews('agendamento', $dados);
    }
}
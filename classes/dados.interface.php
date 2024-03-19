<?php

interface Dados{

    public function __construct();
    
    public function inserir();// criar

    public function buscar(); // ler/read

    public function atualizar(); // atualizar/update

    public function excluir(); // delete/exclui

}
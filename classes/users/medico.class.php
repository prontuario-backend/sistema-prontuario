<?php
include './auxiliar/crm.class.php';
class Medico{
    private Crm $crm;
    private string $nome;
    private string $senha;

    public function __construct(string $nome, string $senha, Crm $crm){
        
    }
}
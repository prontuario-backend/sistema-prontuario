<?php

require 'paciente.php';
require 'histSaude.php';
require 'registros.php';
require 'custos.php';


class Consulta {
    // Atributos
    private $dadosPaciente; // Objeto do tipo DadosPaciente
    private $custos; // Objeto do tipo Custos
    private $histSaude; // Objeto do tipo HistSaude
    private $registros; // Objeto do tipo Registros

    // Construtor
    public function __construct($dadosPaciente, $custos, $histSaude, $registros) {
        $this->dadosPaciente = $dadosPaciente;
        $this->custos = $custos;
        $this->histSaude = $histSaude;
        $this->registros = $registros;
    }

    // Métodos

    
    public function getExame($exame) {
        // Lógica para obter exame
    }

    
    public function getReceita($receita) {
        // Lógica para obter receita
    }

    
    public function getRelatorio($relatorio) {
        // Lógica para obter relatório
    }
}

?>

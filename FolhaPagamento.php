<?php

class FolhaPagamento{

    private $_salario;
    public $_abono;
    public $_qtdFilho;
    public $_salarioFamilia;
    public $_inss;
    public $_idade;


    public function __construct(){

       echo "\n\n\nExecutei construtor\n\n\n"; 
      
    }

    public function getSalario():float {
            return $this->_salario;
    }

    public function setSalario($_salario) {
        $this->_salario = $_salario;
    }

    public function getAbono():float {
        return $this->_abono;
    }

    public function setAbono($_abono) {
        $this->_abono = $_abono;
    }

    public function getQtdFilho():int{
        return $this->_qtdFilho;
    }

    public function setQtdFilho($_qtdFilho) {
        $this->_qtdFilho = $_qtdFilho;
    }

    public function getInss():float{
        return $this->_inss;
    }

    public function setInss($_inss){
        $this->_inss = $_inss;
    }

    public function getIdade():int {
        return $this->_idade;
    }

    public function setIdade($_idade) {
        $this->_idade = $_idade;
    }

    public function getSalarioFamilia():int{
        return $this->_salarioFamilia;
    }
    public function setSalarioFamilia($_salarioFamilia){
        $this->_salarioFamilia = $_salarioFamilia;
    }




    public function calculaAbono(){

        if($this->getIdade()>=40)
        {
             $this->setAbono(800.00);
        }
        else
        {
            $this->setAbono(0.00);
            
        }

    }

    
    public function calculaInss(){

        $this->setInss($this->getSalario()*0.08);

            //return $_salario*0.08;
    }


    public function calculaSalarioFamilia(){
        
              $this->setSalarioFamilia($this->getQtdFilho()*30);
    }

    public function calculaSalarioBruto(){

            $this->setSalario($this->getSalario()-$this->getInss());  
    }

    public function calculaSalarioLiquido(){

            $this->setSalario($this->getSalario()-$this->getInss());
    }



    
    

}

?>
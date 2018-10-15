<?php

    require_once("FolhaPagamento.php");

  

    

    $_Folha = new FolhaPagamento();
    $_Folha->setSalario(3000);
    $_Folha->setQtdFilho(1);
    $_Folha->setIdade(39);

    
    
    echo "\n\n\n: Salario:";
    echo $_Folha->getSalario();
    echo "\n\n\n";

        
    echo "\n\n\n: Filho:";
    echo $_Folha->getQtdFilho();
    echo "\n\n\n";

    echo "\n\n\n: Idade:";
    echo $_Folha->getIdade();
    echo "\n\n\n";
   

    echo "\n\n\n Abono:";
    echo $_Folha->calculaAbono();
    echo $_Folha->getAbono();
    echo "\n\n\n";

    echo "\n\n\n INSS:";
    echo $_Folha->calculaInss();
    echo $_Folha->getInss();
    echo "\n\n\n";

    echo "\n\n\n Salario familia:";
    echo $_Folha->calculaSalarioFamilia();
    echo $_Folha->getSalarioFamilia();
    echo "\n\n\n";

    echo "\n\n\n Salario Bruto:";
    echo $_Folha->calculaSalarioBruto();
    echo $_Folha->getSalario();
    echo "\n\n\n";

    echo "\n\n\n Salario Liquido:";
    echo $_Folha->calculaSalarioLiquido();
    echo $_Folha->getSalario();
    echo "\n\n\n";



        
   
   



?>
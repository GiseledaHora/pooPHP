<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php'); //Chamr a classe 
    require_once('Cliente.php');
    require_once('Funcionario.php');
    require_once('Endereco.php');
    
    use PHP\Modelo\Pessoa; //Defina qual classe vou utilizar aqui dentro
    use PHP\Modelo\Cliente;
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Endereco;


    $cliente1 = new Cliente('568123697860',
                            'Gisela H',
                            '11986452307',
                            'Rua',
                            1500);

    $cliente2 = new Cliente('5896235820',
                            'Neemias F',
                            '11989227539',
                            'avenida',
                             890);


    $funcionario1 = new Funcionario('589623256',
                                    'Otavio',
                                    '1196613687',
                                    'avenida',
                                    2000);
    
    $funcionario2 = new Funcionario('589823215',
                                    'Ota',
                                    '1198662229',
                                    'avenida',
                                    30000);                                


    $endereco1 = new Endereco(1,'Avenida',
                                '89',
                                'Centro',
                                'São Paulo',
                                'São Paulo',
                                '09960000',
                                'Brasil');





    // echo "<br><br>".$cliente1->imprimir();
    // echo "<br><br>".$cliente2->imprimir();
    // echo "<br><br>".$funcionario1->imprimir();
    // echo "<br><br>".$funcionario2->imprimir();      //para aparecer na tela 
    echo "<br><br>".$endereco1->imprimir();

?>
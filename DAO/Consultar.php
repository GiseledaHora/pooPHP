<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarEndereco(Conexao $conexao,
                                  int $codigo)
        {
            try {
                $conn = $conexao->conectar();
                $sql  = "select * from endereco
                         where codigo = '$codigo'";
                $result = mysqli_query($conn, $sql);
                
                while ($dados = mysqli_fetch_Array($result)) {
                    if ($dados ['codigo'] == $codigo) {
                        echo "<br>Código".$dados['codigo'].
                             "<br>Logradouro".$dados['logradouro'].
                             "<br>Número".$dados['nujmero'].
                             "<br>Bairro".$dados['bairro'].
                             "<br>Cidade".$dados['cidade'].
                             "<br>Estado".$dados['estado'].
                             "<br>CEP".$dados['cep'].
                             "<br>País.$dados['pais'];
                    }
                }
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
  
  
  
  
     }
?>
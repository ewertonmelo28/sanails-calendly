<?php
session_start();
include('view/conexao.php');
?>

    <!-- Tabela de Preços -->
    <div class="catalogo">
        <br>
        <table class="table table-borderedless">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Serviço</th>
                    <th>Aplicação</th>
                    <th>Manutenção</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result_catal = "SELECT 
upper(servico) AS servico,
Concat('R$ ',   
        Replace  
            (Replace  
                (Replace  
                    (Format(aplicacao, 2), '.', '|'), ',', '.'), '|', ',')) AS aplicacao,
Concat('R$ ',   
        Replace  
            (Replace  
                (Replace  
                    (Format(manutencao, 2), '.', '|'), ',', '.'), '|', ',')) AS manutencao
FROM catalogo";
                $resultado_catal = mysqli_query($conexao_catal, $result_catal);

                $cont = 1;
                while ($row_catal = mysqli_fetch_array($resultado_catal)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $cont ?></th>
                        <td><?php echo $row_catal["servico"] ?></td>
                        <td><?php if($row_catal["aplicacao"] != "R$ 0,00"){
                            echo $row_catal["aplicacao"];
                        } ?></td>
                        <td><?php if($row_catal["manutencao"] != "R$ 0,00"){
                            echo $row_catal["manutencao"];
                        } ?></td>
                    </tr>
            </tbody>
        <?php $cont++;} ?>
        </table>
    </div>
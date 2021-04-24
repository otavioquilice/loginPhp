<?php

    session_start();
    // Verifica se algo foi postado
    if ( ! empty( $_GET ) ) {
        
        
        // O resto do nosso código virá aqui
        include_once("conexao.php");
        $primeiro_nome=$_GET['primeiro_nome'];
        $ultimo_nome=$_GET['ultimo_nome'];
        $telefone=$_GET['telefone'];
        $placa_veiculo=$_GET['placa_veiculo'];
        $modelo_veiculo=$_GET['modelo_veiculo'];
        $valor_os=$_GET['valor_os'];
        $descricao=$_GET['descricao'];
        $tipo_os=$_GET["tipo_os"]
        
        
        $result_msg_contato = "INSERT INTO os (primeiro_nome, ultimo_nome, telefone, placa_veiculo, modelo_veiculo, valor_os, descricao, tipo_os, date) 
        VALUES ('$primeiro_nome', '$ultimo_nome','$telefone', '$placa_veiculo', '$modelo_veiculo', '$valor_os', '$descricao', '$tipo_os', NOW())";

        $resultado_msg_contato = mysqli_query($conn, $result_msg_contato);
        
        header("Location: os.php");
    
        
    } else {
        
        // Se nada for postado, aparece a mensagem
        echo 'Não foi postado informação.'. '<br>';
    }
?>

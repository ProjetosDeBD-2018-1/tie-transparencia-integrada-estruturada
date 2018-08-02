<?php

function open_database(){
    $host       = "127.0.0.1";
    $user       = "root";
    $password   = "alunodeinfo";
    $database   = "tie";

    try{
        //header('Content-Type: text/html; charset=utf-8');
        $connection = new mysqli($host, $user, $password, $database);
        $connection->query("SET NAMES 'utf8'");
        /*$connection->query('SET character_set_connection=utf8');
        $connection->query('SET character_set_client=utf8');
        $connection->query('SET character_set_results=utf8');*/
        return $connection;
    } catch (Exception $ex) {
        echo $ex->getMessage();
        return null;
    }
}

function my_select($sql){
    $database = open_database();
    $result = $database->query($sql);
    $database->close();
    
    while($row = mysqli_fetch_array($result)){
        $grupo[] = $row;
    }
    
    return $grupo;
}

function select_convenio_total_pago(){
    $sql = "SELECT convenio.NR_convenio, FORMAT(pagamento_select.totalpago,2,'de_DE') AS totalpago, FORMAT(empenho_select.totalempenho,2,'de_DE') AS totalempenho, FORMAT((empenho_select.totalempenho - pagamento_select.totalpago),2, 'de_DE') as difereca
            FROM convenio, 
            (SELECT NR_convenio, SUM(valor_empenho) AS totalempenho FROM empenho GROUP BY NR_convenio) AS empenho_select,
            (SELECT NR_convenio, SUM(vl_pago) AS totalpago FROM pagamento GROUP BY NR_convenio) AS pagamento_select
            WHERE pagamento_select.NR_convenio = convenio.NR_convenio AND convenio.NR_convenio = empenho_select.NR_convenio
            GROUP BY NR_convenio
            HAVING difereca < 0;";
    
    return my_select($sql);
}

function select_convenio_total_pago_com_nome_parlamentar(){
    $sql = "SELECT nome_parlamentar, convenio.NR_convenio, FORMAT(pagamento_select.totalpago,2,'de_DE') AS totalpago, FORMAT(empenho_select.totalempenho,2,'de_DE') AS totalempenho, FORMAT((empenho_select.totalempenho - pagamento_select.totalpago),2, 'de_DE') as difereca
            FROM convenio, parlamentar AS par, emenda AS e, proposta AS prop,
            (SELECT NR_convenio, SUM(valor_empenho) AS totalempenho FROM empenho GROUP BY NR_convenio) AS empenho_select,
            (SELECT NR_convenio, SUM(vl_pago) AS totalpago FROM pagamento GROUP BY NR_convenio) AS pagamento_select
            WHERE pagamento_select.NR_convenio = convenio.NR_convenio AND convenio.NR_convenio = empenho_select.NR_convenio AND par.id = e.id_parlamentar AND e.Id_proposta = prop.id_proposta and prop.id_proposta = convenio.ID_proposta
            GROUP BY NR_convenio
            HAVING difereca < 0;";
    
    return my_select($sql);
}

function select_quantidade_proposta_emenda(){
    $sql = "SELECT COUNT(emenda.id_proposta) AS qtdProposta, emenda.id_proposta, NR_emenda, nome_parlamentar, nm_proponente
            FROM emenda, parlamentar, proponente, proposta 
            WHERE emenda.id_parlamentar = parlamentar.id AND emenda.Id_proposta = proposta.id_proposta AND proposta.identif_proponente = proponente.identif_proponente 
            GROUP BY id_proposta HAVING qtdProposta > 1
            ORDER BY qtdProposta DESC;";
    
    return my_select($sql);
}

?>
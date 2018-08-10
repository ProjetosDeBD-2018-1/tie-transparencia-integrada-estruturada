<?php
$rows_per_page = 15;
$limit_query = " LIMIT " . $GLOBALS['rows_per_page'] . " OFFSET ";

$create_query_1 = "CREATE TABLE IF NOT EXISTS query_1 ";
$create_query_2 = "CREATE TABLE IF NOT EXISTS query_2 ";
$create_query_3 = "CREATE TABLE IF NOT EXISTS query_3 ";

$query_1 = "SELECT convenio.NR_convenio, FORMAT(pagamento_select.totalpago,2,'de_DE') AS totalpago, FORMAT(empenho_select.totalempenho,2,'de_DE') AS totalempenho, FORMAT((empenho_select.totalempenho - pagamento_select.totalpago),2, 'de_DE') AS diferenca, (empenho_select.totalempenho - pagamento_select.totalpago) AS diferenca_raw
            FROM convenio, 
            (SELECT NR_convenio, SUM(valor_empenho) AS totalempenho FROM empenho GROUP BY NR_convenio) AS empenho_select,
            (SELECT NR_convenio, SUM(vl_pago) AS totalpago FROM pagamento GROUP BY NR_convenio) AS pagamento_select
            WHERE pagamento_select.NR_convenio = convenio.NR_convenio AND convenio.NR_convenio = empenho_select.NR_convenio
            GROUP BY NR_convenio
            HAVING diferenca_raw < 0
            ORDER BY diferenca_raw";

$query_2 = "SELECT nome_parlamentar, convenio.NR_convenio, FORMAT(pagamento_select.totalpago,2,'de_DE') AS totalpago, FORMAT(empenho_select.totalempenho,2,'de_DE') AS totalempenho, FORMAT((empenho_select.totalempenho - pagamento_select.totalpago),2, 'de_DE') AS diferenca, (empenho_select.totalempenho - pagamento_select.totalpago) AS diferenca_raw
            FROM convenio, parlamentar AS par, emenda AS e, proposta AS prop,
            (SELECT NR_convenio, SUM(valor_empenho) AS totalempenho FROM empenho GROUP BY NR_convenio) AS empenho_select,
            (SELECT NR_convenio, SUM(vl_pago) AS totalpago FROM pagamento GROUP BY NR_convenio) AS pagamento_select
            WHERE pagamento_select.NR_convenio = convenio.NR_convenio AND convenio.NR_convenio = empenho_select.NR_convenio AND par.id = e.id_parlamentar AND e.Id_proposta = prop.id_proposta and prop.id_proposta = convenio.ID_proposta
            GROUP BY NR_convenio
            HAVING diferenca_raw < 0
            ORDER BY diferenca_raw";

$query_3 = "SELECT COUNT(emenda.id_proposta) AS qtdProposta, emenda.id_proposta, NR_emenda, nome_parlamentar, nm_proponente
            FROM emenda, parlamentar, proponente, proposta 
            WHERE emenda.id_parlamentar = parlamentar.id AND emenda.Id_proposta = proposta.id_proposta AND proposta.identif_proponente = proponente.identif_proponente 
            GROUP BY id_proposta HAVING qtdProposta > 1
            ORDER BY qtdProposta DESC";

function open_database(){
    try{
        //header('Content-Type: text/html; charset=utf-8');
        $connection = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_NAME);
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

function launch_query($sql){
    // echo $sql;
    $database = open_database();
    $result = $database->query($sql);
    $database->close();
    
    return $result;
}

function sql_to_array($result){
    while($row = mysqli_fetch_array($result)){
        $array_result[] = $row;
    }

    $result->close();

    return $array_result;
}

function my_select($sql){
    $result = launch_query($sql);
    $array_result = sql_to_array($result);

    return $array_result; 
}

function select_convenio_total_pago(){
    launch_query($GLOBALS['create_query_1'] . $GLOBALS['query_1']);

    $sql = "SELECT * FROM query_1";

    return my_select($sql);
}

function select_convenio_total_pago_com_nome_parlamentar(){
    launch_query($GLOBALS['create_query_2'] . $GLOBALS['query_2']);
    
    $sql = "SELECT * FROM query_2";

    return my_select($sql);
}

function select_quantidade_proposta_emenda(){
    launch_query($GLOBALS['create_query_3'] . $GLOBALS['query_3']);

    $sql = "SELECT * FROM query_3";
    
    return my_select($sql);
}

function get_rows_per_page(){
    return $GLOBALS['rows_per_page'];
}

?>
<?php
	require_once __DIR__ . '/DB/DBConnect.php';

    $cep = $_REQUEST['cep'];

    $con = connectMySQL(); 
    mysql_select_db('cep', $con);

    $query = "SELECT * FROM CEP WHERE CEP=".$_REQUEST['cep'];

    $dados = mysql_query($query, $con) or die(mysql_error());

    $row = mysql_fetch_assoc($dados);
    $total = mysql_num_rows($dados);
    $jsonCEP = "";

    if($total > 0) {
        $jsonCEP = json_encode($row);
        print_r($jsonCEP); 
    } else {
        $json_str = '{"error":"1", "description":"NO_DATA_FOUND"}';
        print_r($json_str);
    }

    mysql_free_result($dados);
?>

<br/> 
<br/>
<a href="javascript:window.history.go(-1)">Voltar</a>
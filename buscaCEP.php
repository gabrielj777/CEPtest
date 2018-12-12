<?php
	require __DIR__ . '/src/BuscaViaCEP_inc.php';
    use Jarouche\ViaCEP\HelperViaCep;

    $cep = $_REQUEST['cep'];
    $arr_cep = HelperViaCep::getBuscaViaCEP('JSON',$cep);
    print_r($arr_cep);
?>

<br/> 
<br/>
<a href="javascript:window.history.go(-1)">Voltar</a>
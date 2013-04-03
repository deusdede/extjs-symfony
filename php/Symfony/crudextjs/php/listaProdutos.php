<?php
	//chama o arquivo de conexão com o bd
	include("conectar.php");

	$start = $_REQUEST['start'];
	$limit = $_REQUEST['limit'];

	$start = 0;
	$limit = 3;

	$queryString = "SELECT * FROM contact LIMIT $start,  $limit";

	//consulta sql
	$query = mysql_query($queryString) or die(mysql_error());

	//faz um looping e cria um array com os campos da consulta
	$contatos = array();
	while($contato = mysql_fetch_assoc($query)) {
	    $contatos[] = $contato;
	}

	//consulta total de linhas na tabela
	$queryTotal = mysql_query('SELECT count(*) as num FROM contact') or die(mysql_error());
	$row = mysql_fetch_assoc($queryTotal);
	$total = $row['num'];

	// $contatos = array();
	// $contato= array("id" => 1,
	                // "email" => "dsj@gmail.com",
					 // "name" => "deusdede",
					 // "phone" => "6284119900");
	// array_push($contatos,$contato);
    // $total="1";
    $res=json_encode(array(
		"success" => mysql_errno() == 0,
		"total" => $total,
		"contatos" => $contatos
	));
	
	//echo gettype($contato);
	//echo gettype($contatos);
	
	//echo "<pre>";
	//echo print_r($contatos);
	//echo "</pre>";
	//encoda para formato JSON
	echo $res;
?>
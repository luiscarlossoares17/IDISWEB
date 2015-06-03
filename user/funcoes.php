<?php
require_once 'mysql.connect.php';
session_start();

function sair(){
    session_destroy();
}  

function ligar_base_dados(){    
    $ligacao = mysql_connect(MYSQL_SERVER, MYSQL_USERNAME, MYSQL_PASSWORD) or die('Erro ao ligar ao servidor...');        
    mysql_select_db(MYSQL_DATABASE, $ligacao) or die('Erro ao selecionar a base de dados...');
    mysql_set_charset('utf8');
	return $ligacao;

}

?>
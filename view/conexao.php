<?php
/* Conexção com banco de dados */
define('HOST', '127.0.0.1');
define('USUARIO', 'teste');
define('SENHA', 'teste123');
define('DB_LOGIN', 'login');
define('DB_CATAL', 'catalogo');

$conexcao_login = mysqli_connect(HOST, USUARIO, SENHA, DB_LOGIN) or die('Não foi possivel conectar');
$conexao_catal = mysqli_connect(HOST, USUARIO, SENHA, DB_CATAL) or die('Não foi possivel conectar');
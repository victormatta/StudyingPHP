<!-- $_ENV => variáveis de ambiente;
$_GET => Parâmetros que firam enviados por resquest GET;
$_POST => Parâmetros que foram enviados por POST;
$_COOKIE => Valores de cookies;
$_SERVER => Informações sobre o servidor;
$_FILES => Informações sobre os arquivos que vieram por upload; -->

<!-- ============================================================================== -->

<!-- $_SERVER:
SERVER_SOFTWARE => Identificação do servidor;
SERVER_NAME => Hostname, DNS ou IP do servidor;
SERVER_PROTOCOL => Protocolo do servidor;
SERVER_PORT => Porta do servidor;
QUERY_STRING => Argumentos após o ? na URL; -->

<?php

print_r($_SERVER);
echo "<br>";
echo $_SERVER["MYSQL_HOME"];
echo "<br>";
if ($_SERVER["SERVER_NAME"] == "localhost") {
    echo "Server acessing";
}

?>
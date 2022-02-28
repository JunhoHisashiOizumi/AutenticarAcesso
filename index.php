<?php

require "vendor/autoload.php";

use OizumiJunho\AutenticarAcesso\AutenticarAcesso;

$dados = array(
    "chave" => "u3312273171474917280"
);

$token = AutenticarAcesso::ExeGerarToken($dados);

$dados = array(
    "chave" => "u3312273171474917280",
    "token" => $token
);

echo AutenticarAcesso::ExeAutenticar($dados);
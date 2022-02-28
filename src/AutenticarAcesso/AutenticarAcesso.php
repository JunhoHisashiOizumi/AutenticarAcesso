<?php

namespace OizumiJunho\AutenticarAcesso;

class AutenticarAcesso
{
    /*
     $dados = array(
         "chave" => "MTIzNA==",
         "token" => "dGVzdGVAdGVzdGUuY29tLmJyTVRJek5BPT0xOQ=="
        ); 
    */

    public static function ExeAutenticar($dados)
    {
        if ($dados['token'] == self::ExeGerarToken($dados)) {
            return "liberado";
        } else {
            return "negado";
        }
    }

    /*
     $dados = array(
         "chave" => "MTIzNA=="
        ); 
    */

    public static function ExeGerarToken($dados)
    {
        if (self::ValidarUsuario($dados) == "liberado") {

            $h = date("H");

            return base64_encode("{$dados['chave']}{$h}");
        } else {
            return "negado";
        }
    }

    public static function ValidarUsuario($dados)
    {
        $autorizacao = "negado";

        foreach (ChavesAutorizadas as $item) {
            if ($dados['chave'] == $item) {
                $autorizacao =  'liberado';
            }
        }

        return $autorizacao;
    }
}

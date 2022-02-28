# Objetivo
Criado para fazer o controle de acesso a arquivos

# Requisitos
PHP: Versão 7 ou acima | oizumi-junho\autenticar-acesso-php: Qualquer versão

# Configuração do arquivo composer.json

```

    "require": {
        "oizumi-junho\autenticar-acesso-php": "dev-master",
        "php": ">=7.0"
    }

```

# Configuração do config.php

```

<?php

define("ChavesAutorizadas", ['u3312273171474917280', 'k0550372638976909905', 'g2958435189446975752']);

```

# Exemplos de uso

```

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

```
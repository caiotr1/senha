```php
<?php

// VALIDADOR DE SENHA - MODO TEXTO

echo "==============================\n";
echo "      VALIDADOR DE SENHA\n";
echo "==============================\n";

echo "Digite sua senha: ";
$senha = trim(fgets(STDIN));

// Variáveis para verificar a senha
$temNumero = false;
$temMaiuscula = false;
$temMinuscula = false;
$temEspecial = false;

// Verifica cada caractere da senha
for ($i = 0; $i < strlen($senha); $i++) {

    $caractere = $senha[$i];

    // Verifica número
    if (ctype_digit($caractere)) {
        $temNumero = true;
    }

    // Verifica letra maiúscula
    if (ctype_upper($caractere)) {
        $temMaiuscula = true;
    }

    // Verifica letra minúscula
    if (ctype_lower($caractere)) {
        $temMinuscula = true;
    }

    // Verifica caractere especial
    if (preg_match('/[^a-zA-Z0-9]/', $caractere)) {
        $temEspecial = true;
    }
}

// Verifica o tamanho
if (strlen($senha) < 8) {
    echo "\nSenha invalida!\n";
    echo "A senha precisa ter pelo menos 8 caracteres.\n";

} elseif (!$temNumero) {
    echo "\nSenha invalida!\n";
    echo "A senha precisa ter pelo menos um numero.\n";

} elseif (!$temMaiuscula) {
    echo "\nSenha invalida!\n";
    echo "A senha precisa ter pelo menos uma letra maiuscula.\n";

} elseif (!$temMinuscula) {
    echo "\nSenha invalida!\n";
    echo "A senha precisa ter pelo menos uma letra minuscula.\n";

} elseif (!$temEspecial) {
    echo "\nSenha invalida!\n";
    echo "A senha precisa ter pelo menos um caractere especial.\n";

} else {
    echo "\nSenha valida!\n";
    echo "Sua senha atende a todos os requisitos.\n";
}

echo "\n==============================\n";

?>
```

### Regras da senha

A senha precisa ter:

* ✅ Pelo menos **8 caracteres**
* ✅ **1 número**
* ✅ **1 letra maiúscula**
* ✅ **1 letra minúscula**
* ✅ **1 caractere especial**, como `@`, `#`, `$`, `!`

### Exemplo

```text
==============================
      VALIDADOR DE SENHA
==============================
Digite sua senha: Caio123!

Senha valida!
Sua senha atende a todos os requisitos.

==============================
```

Salve como **`senha.php`** e execute no terminal com:

```text
php senha.php
```

Se você estiver usando **VS Code**, também posso te mostrar exatamente **onde criar o arquivo e como executar o código**.

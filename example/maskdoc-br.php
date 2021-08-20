<?php
require dirname(__DIR__) . "/vendor/autoload.php";

/**
 * Para testar os scripts, use um gerador de documentos como o 4Devs
 */
$cpf = "71756816077";
$cnpj = "49620643000127";

$cpfMasked = mask_document($cpf, '***.***.***-**');
$cnpjMasked = mask_document($cnpj, '**.***.***/****-**');

$cpfHidden = hide_document($cpfMasked);
$cnpjHidden = hide_document($cnpjMasked);

echo "Docs sem máscara - CPF: $cpf; CNPJ: $cnpj";
echo "<hr>";
echo "Docs com máscara - CPF: $cpfMasked; CNPJ: $cnpjMasked";
echo "<hr>";
echo "Docs parcialmente ocultos - CPF: $cpfHidden; CNPJ: $cnpjHidden";
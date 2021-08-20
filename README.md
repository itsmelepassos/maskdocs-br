# Maskdocs-BR

[![Maintainer](http://img.shields.io/badge/maintainer-@itsmelepassos-blue.svg?style=flat-square)](https://twitter.com/itsmelepassos)
[![Source Code](http://img.shields.io/badge/source-itsmelepassos/maskdocs--br-blue.svg?style=flat-square)](https://github.com/itsmelepassos/maskdocs-br)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/itsmelepassos/maskdocs-br.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/maskdocs-br)
[![Latest Version](https://img.shields.io/github/release/itsmelepassos/maskdocs-br.svg?style=flat-square)](https://github.com/itsmelepassos/maskdocs-br/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/itsmelepassos/maskdocs-br.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/maskdocs-br)
[![Quality Score](https://img.shields.io/scrutinizer/g/itsmelepassos/maskdocs-br.svg?style=flat-square)](https://scrutinizer-ci.com/g/itsmelepassos/maskdocs-br)
[![Total Downloads](https://img.shields.io/packagist/dt/itsmelepassos/maskdocs-br.svg?style=flat-square)](https://packagist.org/packages/itsmelepassos/maskdocs-br)

Pequena aplicação para tratamento e ocultação de documentos sensíveis

### Como usar?

 - Baixe o repositório via Composer (2.*) ou clone este repositório
 - Teste os exemplos com um CPF ou CNPJ válidos (recomendo o uso de geradores de documentos como o 4Devs 
(https://4devs.com.br))
 - Se necessário, use as funções em seu código copiando para um arquivo específico que seja detectável pelo arquivo
composer.json, como no exemplo abaixo
```
"autoload": {
    "files": [
        "Helpers/Helpers.php"
    ]
}
```
---
### Como usar?
Teste o conteúdo do documento, que só pode conter números, seja na variável, seja puxando um dado do seu BD.
```php
<?php
require dirname(__DIR__) . "/vendor/autoload.php";

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
```

---
### Suporte
No caso de descobrir alguma vulnerabilidade, sugerir algumas correções ou desejar contribuir para o projeto, 
entre em contato com o desenvolvedor (eu) por e-mail [itsmelepassos@gmail.com]

Teste/implemente à vontade

---
### Obrigado

---

###Créditos
- [Leandro Passos](https://github.com/itsmelepassos) (Developer)
---

###License
The MIT License (MIT). Please see [License File](https://github.com/itsmelepassos/maskdocs-br/blob/master/LICENSE) for
more information.
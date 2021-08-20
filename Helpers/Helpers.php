<?php
/*
 * Copyright (c) 2021. Leandro Passos
 */

/**
 * Função mask_document
 * Aplica a máscara de pontuação para ser exibida na tela
 *
 * @param string $document
 * @param string $chars
 * @param string $mask
 * @param int $index
 * @return string
 */
function mask_document(string $document, string $chars, string $mask = '', int $index = 0): string
{
    for ($i = 0; $i <= strlen($chars) - 1; $i++) {
        if ($chars[$i] == '*' || $chars[$i] == '#') {
            if (isset($document[$index])) {
                $mask .= $document[$index++];
            }
        } else {
            if (isset($chars[$i])) {
                $mask .= $chars[$i];
            }
        }
    }

    return $mask;
}

/**
 * Função hide_document
 * Oculta caracteres de certos documentos exibidos na tela - ideal para projetos adequados ou em processo de
 * adequação à Lei Geral de Proteção de Dados (LGPD)
 *
 * @param string|null $document
 * @return string|null
 */
function hide_document(?string $document): ?string

{
    if ($document) {
        return ((strlen($document) === 18)
            ? substr_replace($document, '**.***.***/****', -18, 15)
            : substr_replace($document, '***.***.***', -14, 11));
    }

    return null;
}
<?php
namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        $result = array();

        foreach (array_count_values(self::products) as $product => $value) {
            $result[explode('-', $product)[0]][explode('-', $product)[1]] = $value;
        }
        return $result;
    }
}
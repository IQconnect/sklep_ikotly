<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$store = new FieldsBuilder('store', ['label' => 'Sklep']);

$store
    ->addFields(get_field_partial('components.title'))
    ->addLink('link', ['label' => 'Link'])
    ->addRepeater('products', ['label' => 'Polecane produkty', 'min' => 0, 'layout' => 'block'])
        ->addText('prefix', ['label' => 'Prefix'])
        ->addText('title', ['label' => 'Tytuł'])
        ->addWysiwyg('desc', ['label' => 'Opis', 'media_upload' => 0])
        ->addLink('link', ['label' => 'Link'])
        ->addGallery('images', ['label' => 'zdjęcia produktu', 'max' => 2]);

return $store;
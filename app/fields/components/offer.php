<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$offer = new FieldsBuilder('offer', ['label' => 'Oferta']);

$offer
    ->addFields(get_field_partial('components.title'))
    ->addImage('image', ['label' => 'Obrazek'])
    ->addLink('link', ['label' => 'Link'])
    ->addRepeater('boxes', ['label' => 'Boxy', 'min' => 4, 'max' => 4, 'layout' => 'block'])
        ->addText('title', ['label' => 'Tytuł'])
        ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis']);

return $offer;
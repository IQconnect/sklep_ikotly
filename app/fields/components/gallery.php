<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$gallery = new FieldsBuilder('gallery', ['label' => 'galeria']);

$gallery
    ->addRepeater('gallery', ['label' => 'Galeria'])
        ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 20]])
        ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis', 'wrapper' => ['width' => 30]])
        ->addGallery('images');

return $gallery;
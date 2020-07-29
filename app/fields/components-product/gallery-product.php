<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$galleryProduct = new FieldsBuilder('gallery-product', ['label' => 'Galeria']);

$galleryProduct
    ->addSelect('bg', ['label' => 'Tło','choices' => ['jasne', 'ciemne'], 'default_value' => ['jasne'],'allow_null' => 0])
    ->addText('title', ['label' => 'Tytuł (opcjonalny)'])
    ->addRepeater('gallery', ['label' => 'Galeria'])
        ->addImage('image', ['label' => 'Zdjęcie'])
        ->addText('title', ['label' => 'Tytuł (opcjonalny)', 'wrapper' => ['width' => 50]]);

return $galleryProduct;
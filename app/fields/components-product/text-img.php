<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$textImg = new FieldsBuilder('text-img', ['label' => 'Zdjęcie z tekstem']);

$textImg
    ->addSelect('bg', ['label' => 'Tło','choices' => ['jasne', 'ciemne'], 'default_value' => ['jasne'],'allow_null' => 0])
    ->addText('title', ['label' => 'Tytuł (opcjonalny)'])
    ->addRepeater('boxes')
        ->addImage('image',['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']])
        ->addWysiwyg('content', ['label' => 'Treść', 'media_upload' => 0]);

return $textImg;
<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$textImg = new FieldsBuilder('text', ['label' => 'text']);

$textImg
    ->addWysiwyg('text', ['label' => 'Treść', 'media_upload' => 0]);

return $textImg;
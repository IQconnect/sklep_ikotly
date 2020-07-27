<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$text = new FieldsBuilder('text', ['label' => 'Tekst']);

$text
    ->addSelect('bg', ['label' => 'Tło','choices' => ['jasne', 'ciemne'], 'default_value' => ['jasne'],'allow_null' => 0])
    ->addText('title', ['label' => 'Tytuł sekcji'])
    ->addWysiwyg('text', ['label' => 'Treść', 'media_upload' => 0]);

return $text;
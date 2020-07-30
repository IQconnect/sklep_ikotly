<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$text = new FieldsBuilder('text', ['label' => 'Edytor']);

$text
    ->addSelect('bg', ['label' => 'Tło','choices' => ['jasne', 'ciemne'], 'default_value' => ['jasne'],'allow_null' => 0])
    ->addText('title', ['label' => 'Tytuł sekcji (opcjonalny)'])
    ->addWysiwyg('text', ['label' => 'Treść', 'media_upload' => 1, 'toolbar' => 'full', 'tabs' => 'all']);

return $text;
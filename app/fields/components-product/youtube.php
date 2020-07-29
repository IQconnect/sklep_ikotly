<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$youtube = new FieldsBuilder('youtube', ['label' => 'Filmik youtube']);

$youtube
    ->addSelect('bg', ['label' => 'Tło','choices' => ['jasne', 'ciemne'], 'default_value' => ['jasne'],'allow_null' => 0])
    ->addText('title', ['label' => 'Tytuł sekcji (opcjonalny)'])
        ->addRepeater('youtube', ['label' => 'Filmiki youtube'])
            ->addOembed('iframe', ['label' => 'filmik']);

return $youtube;
<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$boxes = new FieldsBuilder('boxes', ['label' => 'Boxy']);

$boxes
    ->addRepeater('boxes', ['min' => 3, 'layout' => 'block'])
        ->addText('title', ['label' => 'Tytuł'])
        ->addWysiwyg('desc', ['label' => 'Opis', 'media_upload' => 0])
        ->addLink('link', ['label' => 'Link']);

return $boxes;
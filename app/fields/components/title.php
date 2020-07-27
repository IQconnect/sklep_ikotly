<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$title = new FieldsBuilder('title', ['label' => 'Tytuł']);

$title
    ->addText('prefix', ['label' => 'Prefix', 'wrapper' => ['width' => 30]])
    ->addText('title', ['label' => 'Tytuł', 'wrapper' => ['width' => 30]])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis']);

return $title;
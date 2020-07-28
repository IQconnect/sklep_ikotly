<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$icons = new FieldsBuilder('icons', ['label' => 'boxy z ikonami']);

$icons
    ->addRepeater('icons', ['label' => 'ikony'])
      ->addImage('icon', ['label' => 'Ikona']);

return $icons;
<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$smallHero = new FieldsBuilder('small-hero', ['label' => 'Small Hero']);

$smallHero
    ->addImage('image', ['label' => 'Tło'])
    ->addText('title', ['label' => 'Tytuł']);

return $smallHero;
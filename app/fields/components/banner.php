<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$banner = new FieldsBuilder('banner', ['label' => 'banner']);

$banner
    ->addRepeater('baner', ['min' => 0, 'layout' => 'block'])
        ->addImage('image', ['label' => 'Tło'])
        ->addLink('link', ['label' => 'Link']);

return $banner;
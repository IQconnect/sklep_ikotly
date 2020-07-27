<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$menu = new FieldsBuilder('menu', ['label' => 'Menu']);

$menu
    ->addFields(get_field_partial('components.title'));

return $menu;
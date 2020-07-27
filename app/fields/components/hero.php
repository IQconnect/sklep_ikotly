<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$hero = new FieldsBuilder('hero', ['label' => 'hero']);

$hero
    ->addFile('bg', ['label' => 'Filmik w tle'])
    ->addText('header', ['label' => 'tytuł'])
    ->addTextarea('subheader', ['rows' => 4, 'new_lines' => 'br', 'label' => 'podtytuł'])
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addLink('link', ['label' => 'Link']);

return $hero;
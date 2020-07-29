<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$power = new FieldsBuilder('power', ['label' => 'Dobór mocy do obiektu']);

$power
    ->addSelect('bg', ['label' => 'Tło','choices' => ['jasne', 'ciemne'], 'default_value' => ['jasne'],'allow_null' => 0])
    ->addText('title', ['label' => 'Tytuł sekcji', 'default_value' => 'Dobór mocy do obiektu'])
    ->addImage('image',['label' => 'Zdjęcie', 'wrapper' => ['width' => '80%']])
    ->addRepeater('table')
        ->addText('power', ['label' => 'Moc kotła'])
        ->addText('m2')
        ->addText('m3')
    ->endRepeater()
    ->addWysiwyg('content', ['label' => 'Treść', 'media_upload' => 0, 'default_value' => 'Powierzchnia podana jest przy wysokości pomieszczeń 2,5 m.']);

return $power;
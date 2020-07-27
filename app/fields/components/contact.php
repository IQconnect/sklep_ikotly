<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$contact = new FieldsBuilder('contact', ['label' => 'Kontakt']);

$contact
    ->addWysiwyg('content', ['label' => 'Opis', 'media_upload' => 0]);

return $contact;
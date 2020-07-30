<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$download = new FieldsBuilder('download', ['label' => 'Do pobrania - zakładki']);

$download
    ->addSelect('bg', ['label' => 'Tło','choices' => ['jasne', 'ciemne'], 'default_value' => ['jasne'],'allow_null' => 0])
    ->addText('title', ['label' => 'Tytuł sekcji (opcjonalny)', 'default_value' => 'Do pobrania'])
    ->addRepeater('tabs', ['label' => 'Zakładki', 'layout' => 'block'])
        ->addText('title', ['label' => 'Tytuł zakładki'])
        ->addRepeater('files')
            ->addText('title', ['label' => 'Nazwa pliku'])
            ->addFile('file', ['label' => 'Plik do pobrania']);

return $download;
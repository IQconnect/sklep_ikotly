<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builder = new FieldsBuilder('builder');

$builder
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Dodaj komponent'])
            ->addLayout(get_field_partial('components.gallery'))
            ->addLayout(get_field_partial('components.slider'))
            ->addLayout(get_field_partial('components.banner'))
            ->addLayout(get_field_partial('components.hero'))
            ->addLayout(get_field_partial('components.small-hero'))
            ->addLayout(get_field_partial('components.text-img'))
            ->addLayout(get_field_partial('components.text'))
            ->addLayout(get_field_partial('components.icons'))
            ->addLayout(get_field_partial('components.page-title'))
            ->addLayout(get_field_partial('components.hr'))
            ->addLayout(get_field_partial('components.contact'))
            ->addLayout(get_field_partial('components.offer'))
            ->addLayout(get_field_partial('components.blog'))
            ->addLayout(get_field_partial('components.store'))
            ->addLayout(get_field_partial('components.boxes'))
            ->addLayout(get_field_partial('components.menu'))
            ->addLayout('content', ['label' => 'Treść'])
            ->addLayout('content-columns', ['label' => 'Treść Kolumny']);

return $builder;
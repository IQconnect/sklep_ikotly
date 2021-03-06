<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$builderp = new FieldsBuilder('builderp');

$builderp
    ->addTab('builder', ['placement' => 'left'])
        ->addFlexibleContent('components', ['button_label' => 'Dodaj komponent'])
            ->addLayout(get_field_partial('components-product.text'))
            ->addLayout(get_field_partial('components-product.power'))
            ->addLayout(get_field_partial('components-product.table'))
            ->addLayout(get_field_partial('components-product.icons'))
            ->addLayout(get_field_partial('components-product.youtube'))
            ->addLayout(get_field_partial('components-product.banner-img'))
            ->addLayout(get_field_partial('components-product.text-img'))
            ->addLayout(get_field_partial('components-product.gallery-product'))
            ->addLayout(get_field_partial('components-product.download'))
            ->addLayout(get_field_partial('components-product.download-simple'))
            ->addLayout(get_field_partial('components-product.boxes'));

return $builderp;
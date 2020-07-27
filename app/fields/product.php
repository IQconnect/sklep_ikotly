<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$product = new FieldsBuilder('product');

$product
    ->setLocation('post_type', '==', 'product');

$product
    ->addFields(get_field_partial('partials.builderp'));

return $product;
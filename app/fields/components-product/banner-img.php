<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$bannerImg = new FieldsBuilder('banner-img', ['label' => 'Banner ze zdjęciem']);

$bannerImg
    ->addImage('image',['label' => 'Zdjęcie']);

return $bannerImg;
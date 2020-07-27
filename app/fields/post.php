<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$post = new FieldsBuilder('post');

$post
    ->setLocation('post_type', '==', 'post');

$post
    ->addTab('blog', ['label'=>'Ustawienia wpisów', 'placement' => 'left'])
        ->addImage('blogbg', ['label' => 'Tło']);
return $post;
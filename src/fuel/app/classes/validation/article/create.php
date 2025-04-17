<?php

use Fuel\Core\Validation;

class Validation_Article_Create
{
    public static function forge(): Validation
    {
        $val = Validation::forge();

        $val->add('title', 'タイトル')
            ->add_rule('required')
            ->add_rule('min_length', 1)
            ->add_rule('max_length', 255);

        $val->add('body', '内容')
            ->add_rule('required')
            ->add_rule('min_length', 1);

        return $val;
    }
}
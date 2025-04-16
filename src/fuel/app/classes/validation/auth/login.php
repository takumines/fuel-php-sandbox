<?php

use Fuel\Core\Validation;

class Validation_Auth_Login
{
    public static function forge(): Validation
    {
        $val = Validation::forge();

        $val->add('username', 'ユーザー名')
            ->add_rule('required')
            ->add_rule('min_length', 3)
            ->add_rule('max_length', 20);

        $val->add('password', 'パスワード')
            ->add_rule('required')
            ->add_rule('min_length', 6);

        return $val;
    }
}
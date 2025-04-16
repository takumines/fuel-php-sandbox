<?php

use Fuel\Core\DB;
use Fuel\Core\Validation;

class Validation_Auth_Register
{
    public static function forge(): Validation
    {
        $val = Validation::forge();

        $val->add('username', 'ユーザー名')
            ->add_rule('required')
            ->add_rule('min_length', 3)
            ->add_rule('max_length', 20);

        $val->add('email', 'メールアドレス')
            ->add_rule('required')
            ->add_rule('valid_email');

        $val->add('password', 'パスワード')
            ->add_rule('required')
            ->add_rule('min_length', 6);

        $val->add('password_confirm', 'パスワード（確認）')
            ->add_rule('required')
            ->add_rule('match_field', 'password');

        return $val;
    }

    /**
     * ユーザー名がユニークかどうかを確認する
     *
     * @param $username
     * @return bool
     */
    public static function valid_username_unique($username): bool
    {
        return DB::select('username')
            ->from('users')
            ->where('username', '=', $username)
            ->execute()
            ->count() === 0;
    }

    /**
     * メールアドレスがユニークかどうかを確認する
     *
     * @param $email
     * @return bool
     */
    public static function valid_email_unique($email): bool
    {
        return DB::select('email')
            ->from('users')
            ->where('email', '=', $email)
            ->execute()
            ->count() === 0;
    }
}
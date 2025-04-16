<?php

class Model_User extends \Orm\Model
{
	protected static array $_properties = [
        'id',
        'username',
        'password',
        'email',
        'group',
        'login_hash',
        'last_login',
        'created_at',
        'updated_at',
    ];

	protected static array $_observers = [
		'Orm\Observer_CreatedAt' => [
			'events' => [
                'before_insert'
            ],
			'property' => 'created_at',
			'mysql_timestamp' => false,
		],
		'Orm\Observer_UpdatedAt' => [
			'events' => [
                'before_insert',
                'before_update',
            ],
			'property' => 'updated_at',
			'mysql_timestamp' => false,
		],
	];

	protected static string $_table_name = 'users';

	protected static $_primary_key = ['id'];

	protected static array $_has_many = [
        'articles'
    ];
}

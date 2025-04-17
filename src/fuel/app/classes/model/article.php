<?php

use Orm\Model;

class Model_Article extends Model
{
	protected static array $_properties = [
        'id',
        'title',
        'body',
        'user_id',
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
                'before_update'
            ],
			'property' => 'updated_at',
			'mysql_timestamp' => false,
		],
	];

	protected static string $_table_name = 'articles';

	protected static $_primary_key = ['id'];

	protected static array $_has_many = [
        'comments'
    ];

	protected static array $_belongs_to = [
        'user' => [
            'model_to' => 'Auth\Model\Auth_User',
            'key_from' => 'user_id',
            'key_to'   => 'id',
            'cascade_delete' => false,
        ]
    ];
}

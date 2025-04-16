<?php

class Model_Comment extends \Orm\Model
{
	protected static array $_properties = [
        'id',
        'article_id',
        'user_id',
        'body',
        'created_at',
    ];

	protected static array $_observers = [
		'Orm\Observer_UpdatedAt' => [
			'events' => [
                'before_insert',
                'before_update'
            ],
			'property' => 'updated_at',
			'mysql_timestamp' => false,
		],
	];

	protected static string $_table_name = 'comments';

	protected static $_primary_key = ['id'];

	protected static $_belongs_to = [
        'article',
        'user'
    ];

}

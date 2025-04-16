<?php

namespace Fuel\Migrations;

use Fuel\Core\DBUtil;

class Create_comments
{
	public function up(): void
    {
		DBUtil::create_table(
            'comments',
            [
                'id'          => ['type' => 'int', 'auto_increment' => true, 'unsigned' => true],
                'article_id'  => ['type' => 'int', 'unsigned' => true],
                'user_id'     => ['type' => 'int', 'null' => true],
                'body'        => ['type' => 'text'],
                'created_at'  => ['type' => 'int'],
            ],
            ['id']
        );

        DBUtil::add_foreign_key(
            'comments',
            [
                'constraint' => 'fk_comments_user_id',
                'key'        => 'user_id',
                'reference'  => [
                    'table' => 'users',
                    'column'   => 'id'
                ],
                'on_delete'  => 'SET NULL'
            ]
        );

        DBUtil::add_foreign_key(
            'comments',
            [
                'constraint' => 'fk_comments_article_id',
                'key'        => 'article_id',
                'reference'  => [
                    'table' => 'articles',
                    'column'   => 'id'
                ],
                'on_delete'  => 'CASCADE'
            ]
        );
	}

	public function down(): void
    {
		DBUtil::drop_table('comments');
	}
}
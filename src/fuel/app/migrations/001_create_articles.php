<?php

namespace Fuel\Migrations;

use Fuel\Core\DBUtil;

class Create_articles
{
	public function up(): void
    {
		DBUtil::create_table(
            'articles',
            [
                'id'          => ['type' => 'int', 'auto_increment' => true, 'unsigned' => true],
                'title'       => ['type' => 'varchar', 'constraint' => 255],
                'body'        => ['type' => 'text'],
                'user_id'     => ['type' => 'int'],
                'created_at'  => ['type' => 'int'],
                'updated_at'  => ['type' => 'int'],
            ],
            ['id']
        );
        DBUtil::add_foreign_key(
            'articles',
            [
                'constraint' => 'fk_articles_user_id',
                'key'        => 'user_id',
                'reference'  => [
                    'table' => 'users',
                    'column'   => 'id'
                ],
                'on_delete'  => 'CASCADE'
            ]
        );
	}

	public function down(): void
    {
		DBUtil::drop_table('articles');
	}
}
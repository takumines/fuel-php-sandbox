<?php

namespace Fuel\Migrations;

use Fuel\Core\DBUtil;

class Create_users
{
	public function up(): void
    {
		DBUtil::create_table(
            'users',
            [
                'id'           => ['type' => 'int', 'auto_increment' => true, 'unsigned' => true],
                'username'     => ['type' => 'varchar', 'constraint' => 50],
                'password'     => ['type' => 'varchar', 'constraint' => 255],
                'email'        => ['type' => 'varchar', 'constraint' => 255],
                'group'        => ['type' => 'int', 'default' => 1],
                'login_hash'   => ['type' => 'varchar', 'constraint' => 255, 'null' => true],
                'last_login'   => ['type' => 'int', 'null' => true],
                'created_at'   => ['type' => 'int'],
                'updated_at'   => ['type' => 'int'],
            ],
            ['id']
        );
	}

	public function down(): void
    {
		DBUtil::drop_table('users');
	}
}
<?php

use yii\db\Migration;

class m220606_142941_create_table_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%arm.user}}',
            [
                'id' => $this->primaryKey(),
                'username' => $this->string()->notNull(),
                'auth_key' => $this->string(32)->notNull(),
                'password_hash' => $this->string()->notNull(),
                'password_reset_token' => $this->string(),
                'email' => $this->string()->notNull(),
                'status' => $this->smallInteger()->notNull()->defaultValue('10'),
                'created_at' => $this->integer()->notNull(),
                'updated_at' => $this->integer()->notNull(),
                'role' => $this->integer(),
                'user' => $this->integer(),
            ],
            $tableOptions
        );

        $this->createIndex('email', '{{%arm.user}}', ['email'], true);
        $this->createIndex('password_reset_token', '{{%arm.user}}', ['password_reset_token'], true);
        $this->createIndex('username', '{{%arm.user}}', ['username'], true);
    }

    public function safeDown()
    {
        $this->dropTable('{{%arm.user}}');
    }
}

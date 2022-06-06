<?php

use yii\db\Migration;

class m220606_142935_create_table_books extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%arm.books}}',
            [
                'id' => $this->primaryKey(),
                'title' => $this->string()->notNull(),
                'img' => $this->string(),
                'desc' => $this->text()->notNull(),
                'status' => $this->tinyInteger(),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%arm.books}}');
    }
}

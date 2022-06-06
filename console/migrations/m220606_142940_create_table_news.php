<?php

use yii\db\Migration;

class m220606_142940_create_table_news extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%news}}',
            [
                'id' => $this->primaryKey(),
                'title_uz' => $this->string()->notNull(),
                'text_uz' => $this->text()->notNull(),
                'img' => $this->string()->notNull(),
                'date' => $this->date()->notNull(),
                'title_ru' => $this->string()->notNull(),
                'title_en' => $this->string()->notNull(),
                'text_ru' => $this->text()->notNull(),
                'text_en' => $this->text()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%news}}');
    }
}

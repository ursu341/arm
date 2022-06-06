<?php

use yii\db\Migration;

class m220606_142936_create_table_bulim extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%arm.bulim}}',
            [
                'id' => $this->primaryKey(),
                'name_uz' => $this->string()->notNull(),
                'name_ru' => $this->string()->notNull(),
                'name_en' => $this->string()->notNull(),
                'text_uz' => $this->text()->notNull(),
                'text_ru' => $this->text()->notNull(),
                'text_en' => $this->text()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%arm.bulim}}');
    }
}

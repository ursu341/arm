<?php

use yii\db\Migration;

class m220606_142939_create_table_hodim1 extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%arm.hodim1}}',
            [
                'id' => $this->primaryKey(),
                'img' => $this->string()->notNull(),
                'fio_uz' => $this->string()->notNull(),
                'lavozim_uz' => $this->string()->notNull(),
                'pochta' => $this->string()->notNull(),
                'tel' => $this->string()->notNull(),
                'bulim_id' => $this->integer()->notNull(),
                'fio_ru' => $this->string()->notNull(),
                'fio_en' => $this->string()->notNull(),
                'lavozim_ru' => $this->string()->notNull(),
                'lavozim_en' => $this->string()->notNull(),
                'malumoti_uz' => $this->string()->notNull(),
                'malumoti_ru' => $this->string()->notNull(),
                'malumoti_en' => $this->string()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%arm.hodim1}}');
    }
}

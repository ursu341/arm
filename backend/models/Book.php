<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $u_soni
 * @property string $list_uz
 * @property string $list_ru
 * @property string $list_en
 * @property string $o_soni
 * @property string $list1_uz
 * @property string $list1_ru
 * @property string $list1_en
 * @property string $b_soni
 * @property string $list2_uz
 * @property string $list2_ru
 * @property string $list2_en
 * @property string $i_soni
 * @property string $list3_uz
 * @property string $list3_ru
 * @property string $list3_en
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%arm.books}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['u_soni', 'list_uz', 'list_ru', 'list_en', 'o_soni', 'list1_uz', 'list1_ru', 'list1_en', 'b_soni', 'list2_uz', 'list2_ru', 'list2_en', 'i_soni', 'list3_uz', 'list3_ru', 'list3_en'], 'required'],
            [['list_uz', 'list_ru', 'list_en', 'list1_uz', 'list1_ru', 'list1_en', 'list2_uz', 'list2_ru', 'list2_en', 'list3_uz', 'list3_ru', 'list3_en'], 'string'],
            [['u_soni', 'o_soni', 'b_soni', 'i_soni'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'u_soni' => 'U Soni',
            'list_uz' => 'List Uz',
            'list_ru' => 'List Ru',
            'list_en' => 'List En',
            'o_soni' => 'O Soni',
            'list1_uz' => 'List1 Uz',
            'list1_ru' => 'List1 Ru',
            'list1_en' => 'List1 En',
            'b_soni' => 'B Soni',
            'list2_uz' => 'List2 Uz',
            'list2_ru' => 'List2 Ru',
            'list2_en' => 'List2 En',
            'i_soni' => 'I Soni',
            'list3_uz' => 'List3 Uz',
            'list3_ru' => 'List3 Ru',
            'list3_en' => 'List3 En',
        ];
    }
}

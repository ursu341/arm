<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bosh".
 *
 * @property int $id
 * @property string $about_uz
 * @property string $about_ru
 * @property string $about_en
 * @property string $list_uz
 * @property string $list_ru
 * @property string $list_en
 * @property string $list1_uz
 * @property string $list1_ru
 * @property string $list1_en
 * @property string $list2_uz
 * @property string $list2_ru
 * @property string $list2_en
 */
class Bosh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bosh';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['about_uz', 'about_ru', 'about_en', 'list_uz', 'list_ru', 'list_en', 'list1_uz', 'list1_ru', 'list1_en', 'list2_uz', 'list2_ru', 'list2_en'], 'required'],
            [['about_uz', 'about_ru', 'about_en', 'list_uz', 'list_ru', 'list_en', 'list1_uz', 'list1_ru', 'list1_en', 'list2_uz', 'list2_ru', 'list2_en'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'about_uz' => 'About Uz',
            'about_ru' => 'About Ru',
            'about_en' => 'About En',
            'list_uz' => 'List Uz',
            'list_ru' => 'List Ru',
            'list_en' => 'List En',
            'list1_uz' => 'List1 Uz',
            'list1_ru' => 'List1 Ru',
            'list1_en' => 'List1 En',
            'list2_uz' => 'List2 Uz',
            'list2_ru' => 'List2 Ru',
            'list2_en' => 'List2 En',
        ];
    }
}

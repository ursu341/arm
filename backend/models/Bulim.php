<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bulim".
 *
 * @property int $id
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $text_uz
 * @property string $text_ru
 * @property string $text_en
 */
class Bulim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%arm.bulim}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'text_uz', 'text_ru', 'text_en'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['name_uz', 'name_ru', 'name_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'text_en' => 'Taxt En',
        ];
    }
}

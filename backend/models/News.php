<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title_uz
 * @property string $text_uz
 * @property string $img
 * @property string $date
 * @property string $title_ru
 * @property string $title_en
 * @property string $text_ru
 * @property string $text_en
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $image;

    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'text_uz','date', 'title_ru', 'title_en', 'text_ru', 'text_en'], 'required'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
            [['date'], 'safe'],
            [['title_uz', 'img', 'title_ru', 'title_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Sahifa Uz',
            'text_uz' => "To'liq matn Uz",
            'image' => 'Asosiy surat',
            'date' => 'Sana',
            'title_ru' => 'Sahifa Ru',
            'title_en' => 'Sahifa En',
            'text_ru' => "To'liq matn Ru",
            'text_en' => "To'liq matn En",
        ];
    }
    public function beforeSave($insert){

        $this->image = UploadedFile::getInstance($this,'image');
        if($this->image != null &&  $this->image->saveAs(Yii::getAlias  ('@frontend').'/images/' . time() . '.' . $this->image->extension)){
            $this->img = time() . '.' . $this->image->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists(('images/' .$this->img)))
            unlink('images/' .$this->img);
        return true;
    }
}

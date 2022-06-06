<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "hodim".
 *
 * @property int $id
 * @property string $img
 * @property string $fio_uz
 * @property string $lavozim_uz
 * @property string $pochta
 * @property string $tel
 * @property int $bulim_id
 * @property string $fio_ru
 * @property string $fio_en
 * @property string $lavozim_ru
 * @property string $lavozim_en
 * @property string $lavoz
 * @property string $malumoti_uz
 * @property string $malumoti_ru
 * @property string $malumoti_en
 * @property string $malumoti
 * @property string $fio
 * @property int $lavozim
 */
class Hodim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%arm.hodim}}';
    }

    /**
     * {@inheritdoc}
     */
    public $imageFile;
    
    public function rules()
    {
        return [
            [['fio_uz', 'lavozim_uz', 'pochta', 'tel', 'bulim_id', 'fio_ru', 'fio_en', 'lavozim_ru', 'lavozim_en', 'malumoti_uz', 'malumoti_ru', 'malumoti_en'], 'required'],
            [['bulim_id','lavozim'], 'integer'],
            [['img', 'fio_uz', 'lavozim_uz', 'pochta', 'tel', 'fio_ru', 'fio_en', 'lavozim_ru', 'lavozim_en', 'malumoti_uz', 'malumoti_ru', 'malumoti_en'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'fio_uz' => 'Fio Uz',
            'lavozim_uz' => 'Lavozim Uz',
            'pochta' => 'Pochta',
            'tel' => 'Tel',
            'bulim_id' => 'Bulim ID',
            'fio_ru' => 'Fio Ru',
            'fio_en' => 'Fio En',
            'lavozim_ru' => 'Lavozim Ru',
            'lavozim_en' => 'Lavozim En',
            'malumoti_uz' => 'Malumoti Uz',
            'malumoti_ru' => 'Malumoti Ru',
            'malumoti_en' => 'Malumoti En',
        ];
    }
    public function beforeSave($insert){

        $this->imageFile = UploadedFile::getInstance($this,'imageFile');
        if($this->imageFile != null &&  $this->imageFile->saveAs(Yii::getAlias('@backend').'/web/hodim/' . $this->imageFile->baseName . '.' . $this->imageFile->extension)){
            $this->img = $this->imageFile->baseName . '.' . $this->imageFile->extension;
        }

        return true;

    }

    public function afterDelete(){
        if(file_exists('images/'.$this->img))
            unlink('images/'.$this->img);
        return true;
    }

    /**
     * @return string
     */
    public function getFio()
    {
        $lang = "fio_".Yii::$app->language;
        return $this->$lang;
    }

    /**
     * @return string
     */
    public function getMalumoti()
    {
        $lang = "malumoti_".Yii::$app->language;
        return $this->$lang;
    }

    /**
     * @return string
     */
    public function getLavoz()
    {
        $lang = "lavozim_".Yii::$app->language;
        return $this->$lang;
    }
}

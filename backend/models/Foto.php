<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "foto".
 *
 * @property int $id
 * @property string $img
 */
class Foto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $imageFile;

    public static function tableName()
    {
        return 'foto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            [['img'], 'string', 'max' => 255],
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
        ];
    }

    public function beforeSave($insert)
    {

        $this->img = UploadedFile::getInstance($this, 'img');
        if ($this->img !== null && $this->img->saveAs(Yii::getAlias('@web') . '/images/' . $this->img->baseName . '.' . $this->img->extension)) {
            $this->img = $this->img->baseName . '.' . $this->img->extension;
        }

        return true;

    }

    public function afterDelete()
    {
        if (file_exists('images/' . $this->img))
            unlink('images/' . $this->img);
        return true;
    }

}

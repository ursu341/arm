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

        $img = UploadedFile::getInstance($this, 'img');
        if ($img !== null && $img->saveAs(Yii::getAlias('@web') . '/images/' . $img->baseName . '.' . $img->extension)) {
            $this->img = $img->baseName . '.' . $img->extension;
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

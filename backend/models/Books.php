<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "books".
 *
 * @property int $id
 * @property string $title
 * @property string|null $img
 * @property string $desc
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $images;

    public static function tableName()
    {
        return 'books';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'desc'], 'required'],
            [['desc'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'img'], 'string', 'max' => 255],
            ['status', 'default', 'value' => 10],
            ['images', 'file',  'extensions' => ['png', 'jpg', 'jpeg'], 'maxSize' => 1024 * 1024 * 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'img' => 'Img',
            'desc' => 'Desc',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function beforeSave($insert)
    {
        $this->images = UploadedFile::getInstance($this, 'images');
        if ($this->images != null) {
            if ($this->images->saveAs(Yii::getAlias('@frontend') . '/web/uploads/' . $this->images->baseName . '.' . $this->images->extension))
                $this->img = $this->images->baseName . '.' . $this->images->extension;
        }
        return true;
    }
}

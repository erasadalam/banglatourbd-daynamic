<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slider".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image_path
 * @property int $status
 */
class Slider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'slider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['status'], 'integer'],
            [['title'], 'string', 'max' => 50],
            [['image_path'], 'file', 'extensions' => 'jpeg,jpg,png.gif'],
            [['title'], 'unique'],
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
            'description' => 'Description',
            'image_path' => 'Image Path',
            'status' => 'Status',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SliderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SliderQuery(get_called_class());
    }
}

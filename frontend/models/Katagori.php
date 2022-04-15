<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "katagori".
 *
 * @property int $id
 * @property string $nama
 * @property int $parent_catagori
 */
class Katagori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'katagori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'parent_catagori'], 'required'],
            [['parent_catagori'], 'integer'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'parent_catagori' => 'Parent Catagori',
        ];
    }
}

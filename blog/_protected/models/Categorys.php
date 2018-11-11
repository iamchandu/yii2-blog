<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorys".
 *
 * @property int $id
 * @property string $date_time
 * @property string $category_name
 * @property string $status
 *
 * @property PostCategory[] $postCategories
 */
class Categorys extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categorys';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_time', 'category_name', 'status'], 'required'],
            [['date_time'], 'safe'],
            [['status'], 'string'],
            [['category_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_time' => 'Date Time',
            'category_name' => 'Category Name',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPostCategories()
    {
        return $this->hasMany(PostCategory::className(), ['category_id' => 'id']);
    }
}

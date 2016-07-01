<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tocheck".
 *
 * @property integer $post_id
 * @property string $post_title
 */
class Tocheck extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tocheck';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
        ];
    }
}

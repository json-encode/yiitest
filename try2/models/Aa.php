<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aa".
 *
 * @property integer $a_id
 * @property string $a_content
 */
class Aa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_content'], 'required'],
            [['a_content'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'a_id' => 'A ID',
            'a_content' => 'A Content',
        ];
    }
}

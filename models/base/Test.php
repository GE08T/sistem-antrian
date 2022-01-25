<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property string $jal
 * @property int $id
 * @property string $tak
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jal', 'tak'], 'required'],
            [['jal', 'tak'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'jal' => 'Jal',
            'id' => 'ID',
            'tak' => 'Tak',
        ];
    }
}

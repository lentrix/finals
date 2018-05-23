<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "units".
 *
 * @property int $id
 * @property string $make
 * @property string $model
 * @property string $plate
 * @property int $condition
 * @property string $dateAcquired
 */
class Units extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'units';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['make', 'model', 'plate', 'dateAcquired'], 'required'],
            [['condition'], 'integer'],
            [['dateAcquired'], 'safe'],
            [['make', 'model'], 'string', 'max' => 45],
            [['plate'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'make' => 'Make',
            'model' => 'Model',
            'plate' => 'Plate',
            'condition' => 'Condition',
            'dateAcquired' => 'Date Acquired',
        ];
    }
}

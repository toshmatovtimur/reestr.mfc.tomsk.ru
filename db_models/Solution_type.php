<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "solution_type".
 *
 * @property int $id
 * @property string|null $solution
 *
 * @property Registry[] $registries
 */
class Solution_type extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'solution_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['solution'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'solution' => 'Solution',
        ];
    }

    /**
     * Gets query for [[Registries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistries()
    {
        return $this->hasMany(Registry::class, ['fk_solution' => 'id']);
    }
}

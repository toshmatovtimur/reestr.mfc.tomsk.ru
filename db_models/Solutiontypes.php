<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "solutiontypes".
 *
 * @property int $solutiontype_id
 * @property string|null $solutionname
 *
 * @property Registryes[] $registryes
 */
class Solutiontypes extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'solutiontypes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['solutionname'], 'string', 'max' => 50],
            [['solutionname'], 'required', 'message' => 'Поле не должны быть пустым.'],
            [['solutionname'], 'unique', 'message' => 'Решение уже существует.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'solutiontype_id' => 'id Решения',
            'solutionname' => 'Решение',
        ];
    }

    /**
     * Gets query for [[Registryes]].
     *
     * @return ActiveQuery
     */
    public function getRegistryes()
    {
        return $this->hasMany(Registryes::class, ['solution_fk' => 'solutiontype_id']);
    }
}

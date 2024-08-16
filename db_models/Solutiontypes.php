<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "solutiontypes".
 *
 * @property int $solutiontype_id
 * @property string|null $solutionname
 *
 * @property Registryes[] $registryes
 */
class Solutiontypes extends \yii\db\ActiveRecord
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
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'solutiontype_id' => 'Solutiontype ID',
            'solutionname' => 'Solutionname',
        ];
    }

    /**
     * Gets query for [[Registryes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistryes()
    {
        return $this->hasMany(Registryes::class, ['solution_fk' => 'solutiontype_id']);
    }
}

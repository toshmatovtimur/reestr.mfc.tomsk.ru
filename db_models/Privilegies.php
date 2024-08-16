<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "privilegies".
 *
 * @property int $privilege_id
 * @property string|null $privilegename
 *
 * @property Applicants[] $applicants
 */
class Privilegies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'privilegies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['privilegename'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'privilege_id' => 'Privilege ID',
            'privilegename' => 'Privilegename',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::class, ['privileges_fk' => 'privilege_id']);
    }
}

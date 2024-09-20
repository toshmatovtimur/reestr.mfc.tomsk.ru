<?php

namespace app\db_models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "privilegies".
 *
 * @property int $privilege_id
 * @property string|null $privilegename
 *
 * @property Applicants[] $applicants
 */
class Privilegies extends ActiveRecord
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
            [['privilegename'], 'unique', 'message' => 'Льгота уже существует.'],
            [['privilegename'], 'required', 'message' => 'Поле не должны быть пустым.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'privilege_id' => 'id льготы',
            'privilegename' => 'Льгота',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::class, ['privileges_fk' => 'privilege_id']);
    }
}

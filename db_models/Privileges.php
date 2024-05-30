<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "privileges".
 *
 * @property int $id
 * @property string|null $privilege_name
 *
 * @property Applicant[] $applicants
 */
class Privileges extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'privileges';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['privilege_name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'privilege_name' => 'Privilege Name',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::class, ['fk_privilegia' => 'id']);
    }
}

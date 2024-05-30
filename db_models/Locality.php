<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "locality".
 *
 * @property int $id
 * @property string|null $local
 *
 * @property Applicant[] $applicants
 */
class Locality extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'locality';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['local'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'local' => 'Local',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::class, ['fk_locality' => 'id']);
    }
}

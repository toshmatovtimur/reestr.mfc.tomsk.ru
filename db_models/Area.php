<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "area".
 *
 * @property int $id
 * @property string|null $areya
 *
 * @property Applicant[] $applicants
 */
class Area extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'area';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['areya'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'areya' => 'Areya',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicant::class, ['fk_area' => 'id']);
    }
}

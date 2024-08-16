<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "localityes".
 *
 * @property int $locality_id
 * @property string|null $localname
 *
 * @property Applicants[] $applicants
 */
class Localityes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'localityes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['localname'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locality_id' => 'Locality ID',
            'localname' => 'Localname',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::class, ['locality_fk' => 'locality_id']);
    }
}

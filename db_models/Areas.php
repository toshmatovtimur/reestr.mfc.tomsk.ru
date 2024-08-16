<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "areas".
 *
 * @property int $area_id
 * @property string|null $areaname
 *
 * @property Applicants[] $applicants
 */
class Areas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'areas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['areaname'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'area_id' => 'Area ID',
            'areaname' => 'Areaname',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::class, ['area_fk' => 'area_id']);
    }
}

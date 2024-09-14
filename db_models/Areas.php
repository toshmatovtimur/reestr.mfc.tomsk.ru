<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "areas".
 *
 * @property int $area_id
 * @property string|null $areaname
 *
 * @property Applicants[] $applicants
 */
class Areas extends ActiveRecord
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
            [['areaname'], 'unique', 'message' => 'Такой район уже существует.'],
            [['areaname'], 'required', 'message' => 'Поле не должны быть пустым.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'areaname' => 'Район',
            'area_id' => 'id района',

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

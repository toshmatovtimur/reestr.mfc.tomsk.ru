<?php

namespace app\db_models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "localityes".
 *
 * @property int $locality_id
 * @property string|null $localname
 *
 * @property Applicants[] $applicants
 */
class Localityes extends ActiveRecord
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
            [['localname'], 'required', 'message' => 'Поле не должны быть пустым.'],
            [['localname'], 'unique', 'message' => 'Населенный пункт с таким названием уже существует.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locality_id' => 'id Населенного пункта',
            'localname' => 'Населенный пункт',
        ];
    }

    /**
     * Gets query for [[Applicants]].
     *
     * @return ActiveQuery
     */
    public function getApplicants()
    {
        return $this->hasMany(Applicants::class, ['locality_fk' => 'locality_id']);
    }
}

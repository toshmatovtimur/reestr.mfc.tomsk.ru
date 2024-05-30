<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "applicant".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $middlename
 * @property string|null $lastname
 * @property string|null $snils
 * @property string|null $adress
 * @property int|null $fk_area
 * @property int|null $fk_locality
 * @property int|null $fk_privilegia
 *
 * @property Area $fkArea
 * @property Locality $fkLocality
 * @property Privileges $fkPrivilegia
 * @property Registry[] $registries
 */
class Applicant extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applicant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['adress'], 'string'],
            [['fk_area', 'fk_locality', 'fk_privilegia'], 'default', 'value' => null],
            [['fk_area', 'fk_locality', 'fk_privilegia'], 'integer'],
            [['firstname', 'middlename', 'lastname'], 'string', 'max' => 120],
            [['snils'], 'string', 'max' => 50],
            [['fk_area'], 'exist', 'skipOnError' => true, 'targetClass' => Area::class, 'targetAttribute' => ['fk_area' => 'id']],
            [['fk_locality'], 'exist', 'skipOnError' => true, 'targetClass' => Locality::class, 'targetAttribute' => ['fk_locality' => 'id']],
            [['fk_privilegia'], 'exist', 'skipOnError' => true, 'targetClass' => Privileges::class, 'targetAttribute' => ['fk_privilegia' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'snils' => 'Snils',
            'adress' => 'Adress',
            'fk_area' => 'Fk Area',
            'fk_locality' => 'Fk Locality',
            'fk_privilegia' => 'Fk Privilegia',
        ];
    }

    /**
     * Gets query for [[FkArea]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArea()
    {
        return $this->hasOne(Area::class, ['id' => 'fk_area']);
    }

    /**
     * Gets query for [[FkLocality]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocality()
    {
        return $this->hasOne(Locality::class, ['id' => 'fk_locality']);
    }

    /**
     * Gets query for [[FkPrivilegia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPrivilegia()
    {
        return $this->hasOne(Privileges::class, ['id' => 'fk_privilegia']);
    }

    /**
     * Gets query for [[Registries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistries()
    {
        return $this->hasMany(Registry::class, ['fk_applicant' => 'id']);
    }
}

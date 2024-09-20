<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "applicants".
 *
 * @property int $applicant_id
 * @property string|null $firstname
 * @property string|null $middlename
 * @property string|null $lastname
 * @property int|null $area_fk
 * @property int|null $locality_fk
 * @property string|null $address
 * @property string|null $snils
 * @property int|null $privileges_fk
 *
 * @property Areas $areaFk
 * @property Localityes $localityFk
 * @property Privilegies $privilegesFk
 * @property Registryes[] $registryes
 */
class Applicants extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'applicants';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_fk', 'locality_fk', 'privileges_fk'], 'default', 'value' => null],
            [['area_fk', 'locality_fk', 'privileges_fk'], 'integer'],
            [['firstname', 'middlename', 'lastname'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 200],
            [['snils'], 'string', 'max' => 20],
            [['area_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Areas::class, 'targetAttribute' => ['area_fk' => 'area_id']],
            [['locality_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Localityes::class, 'targetAttribute' => ['locality_fk' => 'locality_id']],
            [['privileges_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Privilegies::class, 'targetAttribute' => ['privileges_fk' => 'privilege_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'applicant_id' => 'Applicant ID',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'area_fk' => 'Area Fk',
            'locality_fk' => 'Locality Fk',
            'address' => 'Address',
            'snils' => 'Snils',
            'privileges_fk' => 'Privileges Fk',
        ];
    }

    /**
     * Gets query for [[AreaFk]].
     *
     * @return ActiveQuery
     */
    public function getAreas()
    {
        return $this->hasOne(Areas::class, ['area_id' => 'area_fk']);
    }

    /**
     * Gets query for [[LocalityFk]].
     *
     * @return ActiveQuery
     */
    public function getLocalityes()
    {
        return $this->hasOne(Localityes::class, ['locality_id' => 'locality_fk']);
    }

    /**
     * Gets query for [[PrivilegesFk]].
     *
     * @return ActiveQuery
     */
    public function getPrivilegies()
    {
        return $this->hasOne(Privilegies::class, ['privilege_id' => 'privileges_fk']);
    }

    /**
     * Gets query for [[Registryes]].
     *
     * @return ActiveQuery
     */
    public function getRegistryes()
    {
        return $this->hasMany(Registryes::class, ['applicant_fk' => 'applicant_id']);
    }
}
<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "registry".
 *
 * @property int $id
 * @property int|null $fk_applicant
 * @property string|null $serial_number_sert
 * @property string|null $date_get_sert
 * @property int|null $fk_pay
 * @property int|null $fk_solution
 * @property string|null $date_and_number_solution_sert
 * @property string|null $commentariy
 * @property string|null $trek
 * @property string|null $data_otpravki_pochtoy
 * @property string|null $data_obrasheniya_zayavitelya
 *
 * @property Applicant $fkApplicant
 * @property PayAmount $fkPay
 * @property SolutionType $fkSolution
 */
class Registry extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registry';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_applicant', 'fk_pay', 'fk_solution'], 'default', 'value' => null],
            [['fk_applicant', 'fk_pay', 'fk_solution'], 'integer'],
            [['date_get_sert', 'data_otpravki_pochtoy', 'data_obrasheniya_zayavitelya'], 'safe'],
            [['commentariy'], 'string'],
            [['serial_number_sert'], 'string', 'max' => 120],
            [['date_and_number_solution_sert', 'trek'], 'string', 'max' => 200],
            [['fk_applicant'], 'exist', 'skipOnError' => true, 'targetClass' => Applicant::class, 'targetAttribute' => ['fk_applicant' => 'id']],
            [['fk_pay'], 'exist', 'skipOnError' => true, 'targetClass' => PayAmount::class, 'targetAttribute' => ['fk_pay' => 'id']],
            [['fk_solution'], 'exist', 'skipOnError' => true, 'targetClass' => SolutionType::class, 'targetAttribute' => ['fk_solution' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fk_applicant' => 'Fk Applicant',
            'serial_number_sert' => 'Serial Number Sert',
            'date_get_sert' => 'Date Get Sert',
            'fk_pay' => 'Fk Pay',
            'fk_solution' => 'Fk Solution',
            'date_and_number_solution_sert' => 'Date And Number Solution Sert',
            'commentariy' => 'Commentariy',
            'trek' => 'Trek',
            'data_otpravki_pochtoy' => 'Data Otpravki Pochtoy',
            'data_obrasheniya_zayavitelya' => 'Data Obrasheniya Zayavitelya',
        ];
    }

    /**
     * Gets query for [[FkApplicant]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicant()
    {
        return $this->hasOne(Applicant::class, ['id' => 'fk_applicant']);
    }

    /**
     * Gets query for [[FkPay]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPay()
    {
        return $this->hasOne(PayAmount::class, ['id' => 'fk_pay']);
    }

    /**
     * Gets query for [[FkSolution]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSolution()
    {
        return $this->hasOne(SolutionType::class, ['id' => 'fk_solution']);
    }
}

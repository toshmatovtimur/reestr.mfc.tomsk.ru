<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "registryes".
 *
 * @property int $registry_id
 * @property int|null $applicant_fk
 * @property string|null $serialandnumbersert
 * @property string|null $dategetsert
 * @property int|null $payamount_fk
 * @property int|null $solution_fk
 * @property string|null $dateandnumbsolutionsert
 * @property string|null $comment
 * @property string|null $trek
 * @property string|null $mailingdate
 * @property string|null $dateoftheapp
 * @property int|null $usercreate_fk
 *
 * @property Applicants $applicantFk
 * @property Payamounts $payamountFk
 * @property Solutiontypes $solutionFk
 * @property Users $usercreateFk
 */
class Registryes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'registryes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['applicant_fk', 'payamount_fk', 'solution_fk', 'usercreate_fk'], 'default', 'value' => null],
            [['applicant_fk', 'payamount_fk', 'solution_fk', 'usercreate_fk'], 'integer'],
            [['dategetsert', 'mailingdate', 'dateoftheapp'], 'safe'],
            [['comment'], 'string'],
            [['serialandnumbersert', 'trek'], 'string', 'max' => 200],
            [['dateandnumbsolutionsert'], 'string', 'max' => 150],
            [['applicant_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Applicants::class, 'targetAttribute' => ['applicant_fk' => 'applicant_id']],
            [['payamount_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Payamounts::class, 'targetAttribute' => ['payamount_fk' => 'payamount_id']],
            [['solution_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Solutiontypes::class, 'targetAttribute' => ['solution_fk' => 'solutiontype_id']],
            [['usercreate_fk'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['usercreate_fk' => 'user_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'registry_id' => 'Registry ID',
            'applicant_fk' => 'Applicant Fk',
            'serialandnumbersert' => 'Serialandnumbersert',
            'dategetsert' => 'Dategetsert',
            'payamount_fk' => 'Payamount Fk',
            'solution_fk' => 'Solution Fk',
            'dateandnumbsolutionsert' => 'Dateandnumbsolutionsert',
            'comment' => 'Comment',
            'trek' => 'Trek',
            'mailingdate' => 'Mailingdate',
            'dateoftheapp' => 'Dateoftheapp',
            'usercreate_fk' => 'Usercreate Fk',
        ];
    }

    /**
     * Gets query for [[ApplicantFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplicantFk()
    {
        return $this->hasOne(Applicants::class, ['applicant_id' => 'applicant_fk']);
    }

    /**
     * Gets query for [[PayamountFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayamountFk()
    {
        return $this->hasOne(Payamounts::class, ['payamount_id' => 'payamount_fk']);
    }

    /**
     * Gets query for [[SolutionFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSolutionFk()
    {
        return $this->hasOne(Solutiontypes::class, ['solutiontype_id' => 'solution_fk']);
    }

    /**
     * Gets query for [[UsercreateFk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsercreateFk()
    {
        return $this->hasOne(Users::class, ['user_id' => 'usercreate_fk']);
    }
}

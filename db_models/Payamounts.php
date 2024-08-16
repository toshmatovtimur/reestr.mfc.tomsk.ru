<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "payamounts".
 *
 * @property int $payamount_id
 * @property float|null $pay
 *
 * @property Registryes[] $registryes
 */
class Payamounts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payamounts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pay'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payamount_id' => 'Payamount ID',
            'pay' => 'Pay',
        ];
    }

    /**
     * Gets query for [[Registryes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistryes()
    {
        return $this->hasMany(Registryes::class, ['payamount_fk' => 'payamount_id']);
    }
}

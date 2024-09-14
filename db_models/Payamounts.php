<?php

namespace app\db_models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "payamounts".
 *
 * @property int $payamount_id
 * @property float|null $pay
 *
 * @property Registryes[] $registryes
 */
class Payamounts extends ActiveRecord
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
            [['pay'], 'required', 'message' => 'Поле не должны быть пустым.'],
            [['pay'], 'unique', 'message' => 'Выплата уже существует.'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payamount_id' => 'id выплаты',
            'pay' => 'Выплата',
        ];
    }

    /**
     * Gets query for [[Registryes]].
     *
     * @return ActiveQuery
     */
    public function getRegistryes()
    {
        return $this->hasMany(Registryes::class, ['payamount_fk' => 'payamount_id']);
    }
}

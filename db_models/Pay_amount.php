<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "pay_amount".
 *
 * @property int $id
 * @property float|null $pay
 *
 * @property Registry[] $registries
 */
class Pay_amount extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pay_amount';
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
            'id' => 'ID',
            'pay' => 'Pay',
        ];
    }

    /**
     * Gets query for [[Registries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistries()
    {
        return $this->hasMany(Registry::class, ['fk_pay' => 'id']);
    }
}

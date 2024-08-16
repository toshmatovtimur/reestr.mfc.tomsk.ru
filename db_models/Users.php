<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $user_id
 * @property string|null $fio
 * @property string|null $login
 * @property string|null $passwopt
 * @property int|null $roles
 *
 * @property Registryes[] $registryes
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['roles'], 'default', 'value' => null],
            [['roles'], 'integer'],
            [['fio'], 'string', 'max' => 200],
            [['login', 'passwopt'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fio' => 'Fio',
            'login' => 'Login',
            'passwopt' => 'Passwopt',
            'roles' => 'Roles',
        ];
    }

    /**
     * Gets query for [[Registryes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegistryes()
    {
        return $this->hasMany(Registryes::class, ['usercreate_fk' => 'user_id']);
    }
}

<?php

namespace app\db_models;

use Yii;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

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
class Users extends ActiveRecord
{

    public static function tableName()
    {
        return 'users';
    }

    public static function findByUsername($login)
    {
        return static::findOne(['login' => $login]);
    }


    public function rules()
    {
        return [
            [['roles'], 'default', 'value' => null],
            [['roles'], 'integer'],
            [['fio'], 'string', 'max' => 200],
            [['login', 'passwopt'], 'string', 'max' => 50],
            [['login'], 'unique', 'message' => 'Логин занят'],
            [['login'], 'required', 'message' => 'Поле не должны быть пустым.'],
        ];
    }


    public function attributeLabels()
    {
        return [
            'user_id' => 'id',
            'fio' => 'ФИО',
            'login' => 'Логин',
            'passwopt' => 'Пароль',
            'roles' => 'Роль',
        ];
    }

    /**
     * Gets query for [[Registryes]].
     *
     * @return ActiveQuery
     */
    public function getRegistryes()
    {
        return $this->hasMany(Registryes::class, ['usercreate_fk' => 'user_id']);
    }
}

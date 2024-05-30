<?php

namespace app\db_models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $middlename
 * @property string|null $lastname
 * @property string|null $login
 * @property string|null $password
 * @property string|null $role
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
            [['firstname', 'middlename', 'lastname', 'login', 'role'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 150],
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
            'login' => 'Login',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }
}

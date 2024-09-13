<?php

namespace app\models;

use app\db_models\Users;
use Yii;
use yii\base\Model;


class LoginForm extends Model
{
    public $login;
    public $passwopt;
    public $rememberMe = true;

    private $_user = false;


    public function attributeLabels()
    {
        return [
            'login' => 'Логин',
            'passwopt' => 'Пароль',
            'rememberMe' => 'Запомнить меня',
        ];
    }


    public function rules()
    {
        return [
            // username and password are both required
            [['login', 'passwopt'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['passwopt', 'validatePassword'],
        ];
    }


    public function validatePassword($attribute, $params) // Валидация пароля
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->passwopt)) {
                $this->addError($attribute, 'Неправильный логин или пароль');
            }
        }
    }


    public function login() // Залогинивание
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }


    public function getUser() // Получить имя юзера
    {
        if ($this->_user === false) {
            $this->_user = UserIdentity::findByUsername($this->login);
        }

        return $this->_user;
    }
}
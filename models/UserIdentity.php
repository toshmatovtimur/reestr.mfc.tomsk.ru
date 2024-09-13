<?php

namespace app\models;

use app\db_models\Users;
use yii\web\IdentityInterface;

class UserIdentity extends Users implements IdentityInterface
{

    public static function findIdentity($user_id)
    {
        return static::findOne($user_id);
    }


    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }


    /**
     * Вернет admin если пользователь Админ, иначе user;
     */
    public function isAdmin()
    {
        if(!\Yii::$app->user->isGuest) {
            if(\Yii::$app->user->identity->roles === 1) {
                return true;
            }
        }

        return false;
    }

    /**
     * Вернет true если пользователь Юзер
     */
    public function isUser()
    {
        if(!\Yii::$app->user->isGuest) {
            if(\Yii::$app->user->identity->roles === 0) {
                return true;
            }
        }

        return false;
    }

    public static function findByUsername($login)
    {
        return static::findOne(['login' => $login]);
    }

    public function getId()
    {
        return $this->user_id;
    }


    public function getAuthKey()
    {
        //return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->passwopt === $password;
    }
}
<?php

use yii\web\Application;
use yii\web\User;

class Yii {
    /**
     * @var Application|\yii\console\Application|__Application
     */
    public static $app;
}

/**
 * @property yii\rbac\DbManager $authManager 
 * @property User|__WebUser $user
 * 
 */
class __Application {
}

/**
 * @property app\models\UserIdentity $identity
 */
class __WebUser {
}

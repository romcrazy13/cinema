<?php

namespace frontend\modules\v1\controllers;

use common\models\User;
use frontend\controllers\BaseApiController;
use Yii;
use yii\filters\AccessControl;

class UserController extends BaseApiController
{
    public $modelClass = User::class;

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                ],
            ];
        return $behaviors;
    }

    public function actionUserInfo()
    {
        return ['actionUserInfo'];
    }
}

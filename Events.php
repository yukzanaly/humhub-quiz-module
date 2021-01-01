<?php

namespace  humhub\modules\quiz\quiz;

use Yii;
use yii\helpers\Url;

class Events
{
    /**
     * Defines what to do when the top menu is initialized.
     *
     * @param $event
     */
    public static function onTopMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Quiz',
            'icon' => '<i class="fa fa-desktop"></i>',
            'url' => Url::to(['/quiz/index']),
            'sortOrder' => 99999,
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'quiz' && Yii::$app->controller->id == 'index'),
        ]);
    }

    /**
     * Defines what to do if admin menu is initialized.
     *
     * @param $event
     */
    public static function onAdminMenuInit($event)
    {
        $event->sender->addItem([
            'label' => 'Quiz',
            'url' => Url::to(['/quiz/admin']),
            'group' => 'manage',
            'icon' => '<i class="fa fa-desktop"></i>',
            'isActive' => (Yii::$app->controller->module && Yii::$app->controller->module->id == 'quiz' && Yii::$app->controller->id == 'admin'),
            'sortOrder' => 99999,
        ]);
    }
}

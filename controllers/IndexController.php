<?php

namespace humhub\modules\quiz\quiz\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@quiz/views/layouts/default";

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}


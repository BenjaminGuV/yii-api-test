<?php

namespace frontend\controllers;

//use app\helpers\BehaviorsFromParamsHelper;
use yii\rest\ActiveController;
use frontend\resource\Post;

/**
 * Class PostController
 *
 * 
 */
class PostController extends ActiveController
{
    public $modelClass = Post::class;

}
<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 19.12.2017
 * Time: 15:01
 */

namespace app\controllers;


use yii\web\Controller;

class CustomController extends Controller
{
protected function setMeta($title=Null,$keywords=null,$description=null)
{
    $this->view->title=$title;
    $this->view->registerMetaTag(['name'=>'keywords','content'=>$keywords]);
    $this->view->registerMetaTag(['name'=>'description','content'=>$description]);

}
}
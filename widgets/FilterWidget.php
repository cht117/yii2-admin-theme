<?php
/**
 * Created by PhpStorm.
 * User: xuguoliang
 * Date: 2018/11/14
 * Time: 12:19
 */
namespace app\widgets;

use app\assets\FormAsset;

class FilterWidget extends \yii\base\Widget
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
        FormAsset::register($this->getView());
    }

    public function run()
    {
        return $this->render('filter-widget');
    }
}
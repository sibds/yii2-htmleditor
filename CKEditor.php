<?php

namespace sibds\widgets;

use yii\helpers\ArrayHelper;

class CKEditor extends \dosamigos\ckeditor\CKEditor
{
    public $preset = 'full';

    public function init(){
        $this->clientOptions = ArrayHelper::merge([
            'allowedContent' => true,
            'protectedSource' => [
                new \yii\web\JsExpression('/<i[^>]*><\/i>/g'),
                new \yii\web\JsExpression('/<span[^>]*><\/span>/g')
            ]
        ], $this->clientOptions);
        $this->clientOptions = ArrayHelper::merge($this->clientOptions,
            \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]));
        parent::init();
    }
}

<?php

namespace sibds\widgets;

class CKEditor extends \dosamigos\ckeditor\CKEditor
{
    public $preset = 'full';

    public function init(){
        $this->clientOptions = \mihaildev\elfinder\ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]);
        parent::init();
    }
}

<?php

namespace trylife\yii2Xss;

class XssAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/xss/';

    public $js = [
        'dist/xss.min.js'
    ];
}

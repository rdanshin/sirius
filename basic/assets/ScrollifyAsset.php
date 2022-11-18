<?php

namespace app\assets;

use yii\web\AssetBundle;

class ScrollifyAsset extends AssetBundle
{

    public $sourcePath = '@bower/Scrollify';
    public $baseUrl = '@web';
    public $js = [ 'jquery.scrollify.js', ];
}

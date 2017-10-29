<?php
namespace mildlygeeky\craftredactorscriptbuttons;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;
use craft\web\assets\redactor\RedactorAsset;

class RedactorScriptsAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = '@mildlygeeky/craftredactorscriptbuttons/resources';
        $this->depends = [
            CpAsset::class,
            RedactorAsset::class,
        ];
        $this->js = [
            'script.js'
        ];
        parent::init();
    }
}
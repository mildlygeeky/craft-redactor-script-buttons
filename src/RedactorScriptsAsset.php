<?php
namespace mildlygeeky\craftredactorscriptbuttons;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;
use craft\redactor\assets\redactor\RedactorAsset;

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
            'scriptbuttons.js'
        ];
        parent::init();
    }
}

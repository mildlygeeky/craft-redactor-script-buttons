<?php
/**
 * Redactor Script Buttons plugin for Craft CMS 3.x
 *
 * Adds superscript and subscript plugin to Redactor
 *
 * @link      https://mildlygeeky.com
 * @copyright Copyright (c) 2017 Mildly Geeky, Inc.
 */

namespace mildlygeeky\craftredactorscriptbuttons;

use Craft;
use craft\base\Plugin;
use craft\redactor\events\RegisterPluginPathsEvent;
use craft\redactor\Field as RichText;
use yii\base\Event;

/**
 *
 * @author    Mildly Geeky, Inc.
 * @package   RedactorScriptButtons
 * @since     1.0.0
 *
 */
class CraftRedactorScriptButtons extends Plugin
{
    /**
     * @var CraftRedactorScriptButtons
     */
    public static $plugin;

    public function init()
    {
        parent::init();
        self::$plugin = $this;

        if (Craft::$app->getPlugins()->getPlugin('redactor')) {
            Event::on(
                RichText::class,
                RichText::EVENT_REGISTER_PLUGIN_PATHS,
                function (RegisterPluginPathsEvent $event) {
                    $src            = Craft::getAlias('@mildlygeeky/craftredactorscriptbuttons')
                                      . DIRECTORY_SEPARATOR
                                      . 'resources';
                    $event->paths[] = $src;
                    Craft::$app->getView()->registerAssetBundle(RedactorScriptsAsset::class);
                }
            );
        }
    }
}

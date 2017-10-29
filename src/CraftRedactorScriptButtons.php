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
use craft\fields\RichText;
use craft\events\RegisterRedactorPluginEvent;

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

        // Handler: RichText::EVENT_REGISTER_REDACTOR_PLUGIN
        Event::on(
            RichText::class,
            RichText::EVENT_REGISTER_REDACTOR_PLUGIN,
            function (RegisterRedactorPluginEvent $event) {
                Craft::trace(
                    'RichText::EVENT_REGISTER_REDACTOR_PLUGIN',
                    'redactorscriptbuttons'
                );
                if ($event->plugin == 'scriptbuttons') {
                    Craft::$app->getView()->registerAssetBundle(RedactorScriptsAsset::class);
                }
            }
        );

        Craft::info(
            Craft::t(
                'redactor-script-buttons',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }
}

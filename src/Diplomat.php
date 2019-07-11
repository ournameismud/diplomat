<?php
/**
 * Diplomat plugin for Craft CMS 3.x
 *
 * Simple twig variable for fetching a list of fetching countries
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2019 @cole007
 */

namespace ournameismud\diplomat;

use ournameismud\diplomat\variables\DiplomatVariable;
use ournameismud\diplomat\models\Settings;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class Diplomat
 *
 * @author    @cole007
 * @package   Diplomat
 * @since     0.0.1
 *
 */
class Diplomat extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Diplomat
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '0.0.1';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('diplomat', DiplomatVariable::class);
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'diplomat',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'diplomat/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}

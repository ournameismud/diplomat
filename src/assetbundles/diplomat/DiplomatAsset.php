<?php
/**
 * Diplomat plugin for Craft CMS 3.x
 *
 * Simple twig variable for fetching a list of fetching countries
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2019 @cole007
 */

namespace ournameismud\diplomat\assetbundles\Diplomat;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    @cole007
 * @package   Diplomat
 * @since     0.0.1
 */
class DiplomatAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@ournameismud/diplomat/assetbundles/diplomat/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Diplomat.js',
        ];

        $this->css = [
            'css/Diplomat.css',
        ];

        parent::init();
    }
}

<?php
/**
 * Diplomat plugin for Craft CMS 3.x
 *
 * Simple twig variable for fetching a list of fetching countries
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2019 @cole007
 */

namespace ournameismud\diplomat\models;

use ournameismud\diplomat\Diplomat;

use Craft;
use craft\base\Model;

/**
 * @author    @cole007
 * @package   Diplomat
 * @since     0.0.1
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $countries = '';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['countries', 'string'],
        ];
    }
}

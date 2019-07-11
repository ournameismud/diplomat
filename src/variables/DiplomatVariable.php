<?php
/**
 * Diplomat plugin for Craft CMS 3.x
 *
 * Simple twig variable for fetching a list of fetching countries
 *
 * @link      http://ournameismud.co.uk/
 * @copyright Copyright (c) 2019 @cole007
 */

namespace ournameismud\diplomat\variables;

use ournameismud\diplomat\Diplomat;

use Craft;

/**
 * @author    @cole007
 * @package   Diplomat
 * @since     0.0.1
 */
class DiplomatVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}

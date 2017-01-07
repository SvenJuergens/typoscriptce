<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2008 Steffen Kamper <info@sk-typo3.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

use TYPO3\CMS\Core\TypoScript\Parser\TypoScriptParser;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Plugin\AbstractPlugin;

/**
 * Plugin 'Typoscript Object' for the 'typoscriptce' extension.
 *
 * @author    Steffen Kamper <info@sk-typo3.de>
 * @package    TYPO3
 * @subpackage    tx_typoscriptce
 */
class tx_typoscriptce_pi1 extends AbstractPlugin
{
    public $prefixId = 'tx_typoscriptce_pi1';        // Same as class name
    public $scriptRelPath = 'pi1/class.tx_typoscriptce_pi1.php';// Path to this script relative to the extension dir.
    public $extKey = 'typoscriptce';    // The extension key.
    public $pi_checkCHash = true;

    /**
     * The main method of the PlugIn
     *
     * @param    string $content : The PlugIn content
     * @param    array $conf : The PlugIn configuration
     * @return   string the content that is displayed on the website
     */
    function main($content, $conf)
    {
        // get data
        $obj = $this->cObj->data['imageborder'] ? 'COA_INT' : 'COA';
        $tsRaw = $this->cObj->data['bodytext'];
        // parse TS
        $tsParser = GeneralUtility::makeInstance(TypoScriptParser::class);
        $tsParser->parse($tsRaw);
        $result = $tsParser->setup;
        // render output
        return $this->pi_wrapInBaseClass($this->cObj->cObjGetSingle($obj, $result));
    }
}

<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Matteo Savio <msavio@ajado.com>
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

// require_once(PATH_tslib . 'class.tslib_pibase.php');

/**
 * Plugin 'Search box' for the 'ajado_companies' extension.
 *
 * @author	Matteo Savio <msavio@ajado.com>
 * @package	TYPO3
 * @subpackage	tx_ajadocompanies
 */
class tx_ajadocompanies_pi3 extends tslib_pibase {
	public $prefixId      = 'tx_ajadocompanies_pi3';		// Same as class name
	public $scriptRelPath = 'pi3/class.tx_ajadocompanies_pi3.php';	// Path to this script relative to the extension dir.
	public $extKey        = 'ajado_companies';	// The extension key.
	public $pi_checkCHash = TRUE;
	
	/**
	 * The main method of the Plugin.
	 *
	 * @param string $content The Plugin content
	 * @param array $conf The Plugin configuration
	 * @return string The content that is displayed on the website
	 */
	public function main($content, array $conf) {
		$this->conf = $conf;
		$this->pi_setPiVarDefaults();
		$this->pi_loadLL();
		
	
		$content = '
			<strong>This is a few paragraphs:</strong><br />
			<p>This is line 1</p>
			<p>This is line 2</p>
	
			<h3>This is a form:</h3>
			<form action="' . $this->pi_getPageLink($GLOBALS['TSFE']->id) . '" method="POST">
				<input type="text" name="' . $this->prefixId . '[input_field]" value="' . htmlspecialchars($this->piVars['input_field']) . '" />
				<input type="submit" name="' . $this->prefixId . '[submit_button]" value="' . htmlspecialchars($this->pi_getLL('submit_button_label')) . '" />
			</form>
			<br />
			<p>You can click here to ' . $this->pi_linkToPage('get to this page again', $GLOBALS['TSFE']->id) . '</p>
		';
	
		return $this->pi_wrapInBaseClass($content);
	}
}



if (defined('TYPO3_MODE') && isset($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ajado_companies/pi3/class.tx_ajadocompanies_pi3.php'])) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ajado_companies/pi3/class.tx_ajadocompanies_pi3.php']);
}

?>
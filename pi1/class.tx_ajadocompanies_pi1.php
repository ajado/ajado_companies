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
 * Plugin 'List view' for the 'ajado_companies' extension.
 *
 * @author	Matteo Savio <msavio@ajado.com>
 * @package	TYPO3
 * @subpackage	tx_ajadocompanies
 */
class tx_ajadocompanies_pi1 extends tslib_pibase {
	public $prefixId      = 'tx_ajadocompanies_pi1';		// Same as class name
	public $scriptRelPath = 'pi1/class.tx_ajadocompanies_pi1.php';	// Path to this script relative to the extension dir.
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
		
		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery(
		        '*',
		        'tx_ajadocompanies_company',
		        'pid=' . intval($this->conf['pid_list']),
		        '',
		        'title',
		        ''
            );

        // starttime, endtime, hidden, deleted???
  
		while($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			$content .= '<h3>' . $row['title'] . '</h3>';
			$content .= '<p>';
			if($row['subtitle'] != '') {
				$content .= '<b>' . $row['subtitle'] . '</b><br />';
			}
			if($row['address1'] != '') {
				$content .= $row['address1'] . '<br />';
			}
			if($row['address2'] != '') {
				$content .= $row['address2'] . '<br />';
			}
			if(($row['zip'] != '')||($row['city'] != '')||($row['state'] != '')) {
				$content .= $row['zip'] . ' ' . $row['city'] . ' ' . $row['state'] . '<br />';
			}
			if($row['country'] != '') {
				$content .= $row['country'] . '<br />';
			}
			if($row['telephone'] != '') {
				$content .= 'Telephone: ' . $row['telephone'] . '<br />';
			}
			if($row['mobile'] != '') {
				$content .= 'Mobile: ' . $row['mobile'] . '<br />';
			}
			if($row['fax'] != '') {
				$content .= 'Fax: ' . $row['fax'] . '<br />';
			}
			if($row['email'] != '') {
				$content .= 'E-Mail: ' . $row['email'] . '<br />';
			}
			if($row['url'] != '') {
				$content .= 'URL: ' . $row['url'] . '<br />';
			}
			$content .= '</p>';
		}
	
		return $this->pi_wrapInBaseClass($content);
	}
}



if (defined('TYPO3_MODE') && isset($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ajado_companies/pi1/class.tx_ajadocompanies_pi1.php'])) {
	include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/ajado_companies/pi1/class.tx_ajadocompanies_pi1.php']);
}

?>
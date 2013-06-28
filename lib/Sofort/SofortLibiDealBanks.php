<?php

namespace Sofort;

use Sofort\SofortLibAbstract;

/**
 * This class encapsulates retrieval of listed banks of the Netherlands
 *
 * Copyright (c) 2012 SOFORT AG
 * 
 * Released under the GNU General Public License (Version 2)
 * [http://www.gnu.org/licenses/gpl-2.0.html]
 *
 * $Date: 2013-02-27 11:37:15 +0100 (Wed, 27 Feb 2013) $
 * @version SofortLib 1.5.4  $Id: SofortLibiDealBanks.php 6029 2013-02-27 10:37:15Z rotsch $
 * @author SOFORT AG http://www.sofort.com (integration@sofort.com)
 *
 */
class SofortLibiDealBanks extends SofortLibAbstract {
	
	protected $_xmlRootTag = 'ideal';
	
	protected $_parameters = array();
	
	protected $_response = array();
	
	private $_banks = array();
	
	
	/**
	 * 
	 * Constructor for SofortLibiDealBanks
	 * @param string $configKey
	 * @param strign $apiUrl
	 */
	public function __construct($configKey, $apiUrl = '') {
		list ($userId, $projectId, $apiKey) = explode(':', $configKey);
		parent::__construct($userId, $apiKey, $apiUrl.'/banks');
	}
	
	
	/**
	 * 
	 * Getter for bank list
	 */
	public function getBanks() {
		return $this->_banks;
	}
	
	
	/**
	 * Parse the xml (override)
	 * (non-PHPdoc)
	 * @see SofortLibAbstract::_parseXml()
	 */
	protected function _parseXml() {
		if (isset($this->_response['ideal']['banks']['bank'][0]['code']['@data'])) {
			foreach($this->_response['ideal']['banks']['bank'] as $key => $bank) {
				$this->_banks[$key]['code'] = $bank['code']['@data'];
				$this->_banks[$key]['name'] = $bank['name']['@data'];
			}
		}
	}
}
?>
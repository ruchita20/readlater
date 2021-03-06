<?php
/**
 * ownCloud - readlater
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Ruchita Rathi <ruchita@berkeley.edu	>
 * @copyright Ruchita Rathi 2014
 */

namespace OCA\ReadLater\BusinessLayer;

use \OCA\ReadLater\Db\ItemManagerManager;
use \OCA\ReadLater\Utility\Config;

class ItemBusinessLayer {
	private $ItemManager;
	public function __construct($ItemManager) {
		$this -> ItemManager = $ItemManager;
	}

	public function create($item) {
		return $this -> ItemManager -> insert($item);
	}
	
	public function getItems() {
	return $this -> ItemManager -> getItems();
	}
	
	
	public function delete($itemId) {
	return $this -> ItemManager -> delete($itemId);
	}
	
	public function searchItems($itemName) {
	$result = $this -> ItemManager -> search($itemName);
	return $result;
	}
	
	
}
?>

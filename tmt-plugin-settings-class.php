<?php


/**
 * TmtDealPostsSettings class.
 */
class TmtPluginSettings {

	private $labelsArray;
	private $otherArgsArray;
	
	public function __construct($labelsArray, $otherArgsArray) {
		$this->labelsArray = $labelsArray;
		$this->otherArgsArray = $otherArgsArray;
	}
	
	public function createSettings() {
		$this->settings = array();
		$this->addLabelsToSettings();
		$this->addOtherSettings();
	}
	
	private function addOtherSettings() {
		foreach($this->otherArgsArray as $argName => $argValue) {
			$this->settings[$argName] = $argValue;
		}
	}
	
	private function addLabelsToSettings() {
		$this->settings['labels'] = $this->labelsArray;
	}
	
	public function getSettings() {
		return $this->settings;
	}
}

?>
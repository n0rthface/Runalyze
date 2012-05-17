<?php
/**
 * Class for input fields: sportid
 * @author Hannes Christiansen <mail@laufhannes.de>
 */
class TrainingInputSport extends FormularSelectBox {
	/**
	 * Construct new input field for: weather
	 * Using $_POST by default
	 * @param string $value [optional]
	 */
	public function __construct($value = '') {
		parent::__construct('sportid', 'Sportart', $value);

		foreach (Sport::getNamesAsArray() as $id => $name)
			$this->addOption($id, $name);
	}
}
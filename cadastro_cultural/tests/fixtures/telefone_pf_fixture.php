<?php
/* TelefonePf Fixture generated on: 2012-02-01 14:02:38 : 1328102858 */
class TelefonePfFixture extends CakeTestFixture {
	var $name = 'TelefonePf';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'telefone' => array('type' => 'string', 'null' => false, 'length' => 12),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'telefone' => 'Lorem ipsu'
		),
	);
}
?>
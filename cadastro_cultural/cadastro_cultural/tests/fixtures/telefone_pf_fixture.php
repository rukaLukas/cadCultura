<?php
/* TelefonePf Fixture generated on: 2012-02-07 02:02:37 : 1328578777 */
class TelefonePfFixture extends CakeTestFixture {
	var $name = 'TelefonePf';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'telefone' => array('type' => 'string', 'null' => false, 'length' => 12),
		'pf_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'telefone' => 'Lorem ipsu',
			'pf_id' => 1
		),
	);
}
?>
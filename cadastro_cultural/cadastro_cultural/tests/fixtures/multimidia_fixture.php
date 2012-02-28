<?php
/* Multimidia Fixture generated on: 2012-02-02 15:02:41 : 1328191481 */
class MultimidiaFixture extends CakeTestFixture {
	var $name = 'Multimidia';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'multimidia' => array('type' => 'string', 'null' => false),
		'curriculo_id' => array('type' => 'integer', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'multimidia' => 'Lorem ipsum dolor sit amet',
			'curriculo_id' => 1
		),
	);
}
?>
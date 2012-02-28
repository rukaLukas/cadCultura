<?php
/* Unidadesfederativa Fixture generated on: 2012-01-31 15:01:47 : 1328021627 */
class UnidadesfederativaFixture extends CakeTestFixture {
	var $name = 'Unidadesfederativa';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'time', 'null' => true),
		'modified' => array('type' => 'time', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 1,
			'created' => '15:53:47',
			'modified' => '15:53:47'
		),
	);
}
?>
<?php
/* UnidadeFederativa Fixture generated on: 2012-02-01 13:02:29 : 1328098829 */
class UnidadeFederativaFixture extends CakeTestFixture {
	var $name = 'UnidadeFederativa';

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
			'created' => '13:20:29',
			'modified' => '13:20:29'
		),
	);
}
?>
<?php
/* UnidadesFederativa Fixture generated on: 2012-01-31 15:01:39 : 1328021079 */
class UnidadesFederativaFixture extends CakeTestFixture {
	var $name = 'UnidadesFederativa';

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
			'created' => '15:44:39',
			'modified' => '15:44:39'
		),
	);
}
?>
<?php
/* Uf Fixture generated on: 2012-02-01 13:02:45 : 1328100765 */
class UfFixture extends CakeTestFixture {
	var $name = 'Uf';

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
			'created' => '13:52:45',
			'modified' => '13:52:45'
		),
	);
}
?>
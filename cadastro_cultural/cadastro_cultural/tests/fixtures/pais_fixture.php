<?php
/* Pais Fixture generated on: 2012-02-01 14:02:21 : 1328103081 */
class PaisFixture extends CakeTestFixture {
	var $name = 'Pais';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => false, 'length' => 30),
		'created' => array('type' => 'time', 'null' => true),
		'modified' => array('type' => 'time', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'created' => '14:31:21',
			'modified' => '14:31:21'
		),
	);
}
?>
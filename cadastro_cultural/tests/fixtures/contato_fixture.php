<?php
/* Contato Fixture generated on: 2012-03-30 16:03:56 : 1333118396 */
class ContatoFixture extends CakeTestFixture {
	var $name = 'Contato';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'desc' => array('type' => 'string', 'null' => true, 'length' => 100),
		'data' => array('type' => 'date', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'desc' => 'Lorem ipsum dolor sit amet',
			'data' => '2012-03-30'
		),
	);
}
?>
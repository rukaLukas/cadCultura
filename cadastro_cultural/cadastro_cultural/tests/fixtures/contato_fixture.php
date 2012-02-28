<?php
/* Contato Fixture generated on: 2012-02-01 14:02:12 : 1328103912 */
class ContatoFixture extends CakeTestFixture {
	var $name = 'Contato';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 30),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>
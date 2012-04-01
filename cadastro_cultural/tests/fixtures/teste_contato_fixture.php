<?php
/* TesteContato Fixture generated on: 2012-03-30 16:03:20 : 1333117940 */
class TesteContatoFixture extends CakeTestFixture {
	var $name = 'TesteContato';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'contato_id' => array('type' => 'integer', 'null' => false),
		'email' => array('type' => 'string', 'null' => true, 'length' => 100),
		'telefone' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'contato_id' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'telefone' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>
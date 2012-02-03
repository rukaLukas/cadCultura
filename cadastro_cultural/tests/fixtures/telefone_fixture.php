<?php
/* Telefone Fixture generated on: 2012-02-01 14:02:53 : 1328104133 */
class TelefoneFixture extends CakeTestFixture {
	var $name = 'Telefone';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => true, 'length' => 10),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ip'
		),
	);
}
?>
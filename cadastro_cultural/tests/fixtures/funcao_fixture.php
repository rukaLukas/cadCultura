<?php
/* Funcao Fixture generated on: 2012-02-01 14:02:45 : 1328102625 */
class FuncaoFixture extends CakeTestFixture {
	var $name = 'Funcao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'ocupacao_id' => array('type' => 'integer', 'null' => false),
		'descricao' => array('type' => 'string', 'null' => false, 'length' => 30),
		'tipo' => array('type' => 'string', 'null' => false, 'length' => 1),
		'created' => array('type' => 'time', 'null' => true),
		'modified' => array('type' => 'time', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'ocupacao_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit ame',
			'created' => '14:23:45',
			'modified' => '14:23:45'
		),
	);
}
?>
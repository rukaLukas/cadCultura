<?php
/* Ocupacao Fixture generated on: 2012-02-01 14:02:58 : 1328102818 */
class OcupacaoFixture extends CakeTestFixture {
	var $name = 'Ocupacao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'segmento_cultural_id' => array('type' => 'integer', 'null' => false),
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
			'segmento_cultural_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit ame',
			'created' => '14:26:58',
			'modified' => '14:26:58'
		),
	);
}
?>
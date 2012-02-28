<?php
/* Cidade Fixture generated on: 2012-02-01 14:02:51 : 1328102031 */
class CidadeFixture extends CakeTestFixture {
	var $name = 'Cidade';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'uf_id' => array('type' => 'integer', 'null' => false),
		'descricao' => array('type' => 'string', 'null' => false, 'length' => 30),
		'created' => array('type' => 'time', 'null' => true),
		'modified' => array('type' => 'time', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'uf_id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'created' => '14:13:51',
			'modified' => '14:13:51'
		),
	);
}
?>
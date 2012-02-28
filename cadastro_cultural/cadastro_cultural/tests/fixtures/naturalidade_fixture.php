<?php
/* Naturalidade Fixture generated on: 2012-02-01 14:02:24 : 1328102484 */
class NaturalidadeFixture extends CakeTestFixture {
	var $name = 'Naturalidade';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => false, 'length' => 30),
		'created' => array('type' => 'time', 'null' => true),
		'modified' => array('type' => 'time', 'null' => true),
		'indexes' => array(),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'created' => '14:21:24',
			'modified' => '14:21:24'
		),
	);
}
?>
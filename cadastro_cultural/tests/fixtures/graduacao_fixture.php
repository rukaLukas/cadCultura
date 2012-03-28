<?php
/* Graduacao Fixture generated on: 2012-03-27 04:03:51 : 1332816591 */
class GraduacaoFixture extends CakeTestFixture {
	var $name = 'Graduacao';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'pf_id' => array('type' => 'integer', 'null' => false),
		'ano_graduacao' => array('type' => 'date', 'null' => true),
		'curso' => array('type' => 'string', 'null' => true, 'length' => 100),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'pf_id' => 1,
			'ano_graduacao' => '2012-03-27',
			'curso' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>
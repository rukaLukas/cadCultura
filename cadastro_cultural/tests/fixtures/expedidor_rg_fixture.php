<?php
/* ExpedidorRg Fixture generated on: 2012-01-31 15:01:26 : 1328019146 */
class ExpedidorRgFixture extends CakeTestFixture {
	var $name = 'ExpedidorRg';

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
			'created' => '15:12:26',
			'modified' => '15:12:26'
		),
	);
}
?>
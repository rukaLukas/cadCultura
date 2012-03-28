<?php
/* ContatoPf Fixture generated on: 2012-03-27 21:03:13 : 1332877813 */
class ContatoPfFixture extends CakeTestFixture {
	var $name = 'ContatoPf';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'pf_id' => array('type' => 'integer', 'null' => false),
		'telefone' => array('type' => 'string', 'null' => true, 'length' => 15),
		'email' => array('type' => 'string', 'null' => true),
		'site' => array('type' => 'string', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'pf_id' => 1,
			'telefone' => 'Lorem ipsum d',
			'email' => 'Lorem ipsum dolor sit amet',
			'site' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>
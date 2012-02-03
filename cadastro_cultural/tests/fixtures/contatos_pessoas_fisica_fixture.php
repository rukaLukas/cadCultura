<?php
/* ContatosPessoasFisica Fixture generated on: 2012-01-31 15:01:32 : 1328019212 */
class ContatosPessoasFisicaFixture extends CakeTestFixture {
	var $name = 'ContatosPessoasFisica';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'telefones_pfs_id' => array('type' => 'integer', 'null' => false),
		'fax' => array('type' => 'string', 'null' => true, 'length' => 12),
		'email' => array('type' => 'string', 'null' => false, 'length' => 50),
		'site' => array('type' => 'string', 'null' => true, 'length' => 50),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'telefones_pfs_id' => 1,
			'fax' => 'Lorem ipsu',
			'email' => 'Lorem ipsum dolor sit amet',
			'site' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>
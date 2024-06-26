<?php
/* ContatoPessoasfisica Fixture generated on: 2012-02-01 13:02:37 : 1328099137 */
class ContatoPessoasfisicaFixture extends CakeTestFixture {
	var $name = 'ContatoPessoasfisica';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'telefone_pessoasfisica_id' => array('type' => 'integer', 'null' => false),
		'fax' => array('type' => 'string', 'null' => true, 'length' => 12),
		'email' => array('type' => 'string', 'null' => false, 'length' => 50),
		'site' => array('type' => 'string', 'null' => true, 'length' => 50),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'telefone_pessoasfisica_id' => 1,
			'fax' => 'Lorem ipsu',
			'email' => 'Lorem ipsum dolor sit amet',
			'site' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>
<?php
/* FuncaoExercida Fixture generated on: 2012-02-01 15:02:37 : 1328108077 */
class FuncaoExercidaFixture extends CakeTestFixture {
	var $name = 'FuncaoExercida';

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
			'created' => '15:54:37',
			'modified' => '15:54:37'
		),
	);
}
?>
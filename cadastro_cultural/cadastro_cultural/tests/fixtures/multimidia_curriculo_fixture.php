<?php
/* MultimidiaCurriculo Fixture generated on: 2012-01-31 15:01:58 : 1328019178 */
class MultimidiaCurriculoFixture extends CakeTestFixture {
	var $name = 'MultimidiaCurriculo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'multimidia' => array('type' => 'string', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'multimidia' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>
<?php
/* PfsTipologia Fixture generated on: 2012-03-23 03:03:53 : 1332471293 */
class PfsTipologiaFixture extends CakeTestFixture {
	var $name = 'PfsTipologia';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'pf_id' => array('type' => 'integer', 'null' => false),
		'tipologia_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'pf_id' => 1,
			'tipologia_id' => 1
		),
	);
}
?>
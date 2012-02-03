<?php
/* SegmentoCultural Fixture generated on: 2012-02-01 14:02:52 : 1328103412 */
class SegmentoCulturalFixture extends CakeTestFixture {
	var $name = 'SegmentoCultural';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => false, 'length' => 30),
		'tipo' => array('type' => 'string', 'null' => false, 'length' => 1),
		'created' => array('type' => 'time', 'null' => true),
		'modified' => array('type' => 'time', 'null' => true),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'tipo' => 'Lorem ipsum dolor sit ame',
			'created' => '14:36:52',
			'modified' => '14:36:52'
		),
	);
}
?>
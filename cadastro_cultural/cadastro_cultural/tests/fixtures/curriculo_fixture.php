<?php
/* Curriculo Fixture generated on: 2012-02-08 15:02:11 : 1328711411 */
class CurriculoFixture extends CakeTestFixture {
	var $name = 'Curriculo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'descricao' => array('type' => 'text', 'null' => false, 'length' => 1073741824),
		'organizacao_responsavel' => array('type' => 'string', 'null' => false, 'length' => 30),
		'data' => array('type' => 'date', 'null' => false),
		'funcao_exercida_id' => array('type' => 'integer', 'null' => true),
		'pf_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'organizacao_responsavel' => 'Lorem ipsum dolor sit amet',
			'data' => '2012-02-08',
			'funcao_exercida_id' => 1,
			'pf_id' => 1
		),
	);
}
?>
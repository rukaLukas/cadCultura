<?php
/* Tipologia Fixture generated on: 2012-02-01 14:02:43 : 1328102443 */
class TipologiaFixture extends CakeTestFixture {
	var $name = 'Tipologia';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'segmento_cultural' => array('type' => 'integer', 'null' => false),
		'ocupacao_id' => array('type' => 'integer', 'null' => false),
		'funcao_id' => array('type' => 'integer', 'null' => false),
		'tempo_atuacao' => array('type' => 'date', 'null' => false),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'segmento_cultural' => 1,
			'ocupacao_id' => 1,
			'funcao_id' => 1,
			'tempo_atuacao' => '2012-02-01'
		),
	);
}
?>
<?php
/* CurriculosProduto Fixture generated on: 2012-02-08 15:02:36 : 1328711496 */
class CurriculosProdutoFixture extends CakeTestFixture {
	var $name = 'CurriculosProduto';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'produto_id' => array('type' => 'integer', 'null' => false),
		'curriculo_id' => array('type' => 'integer', 'null' => false),
		'indexes' => array(),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'produto_id' => 1,
			'curriculo_id' => 1
		),
	);
}
?>
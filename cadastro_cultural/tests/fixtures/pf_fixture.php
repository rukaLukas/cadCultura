<?php
/* Pf Fixture generated on: 2012-02-07 03:02:53 : 1328582873 */
class PfFixture extends CakeTestFixture {
	var $name = 'Pf';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 11, 'key' => 'primary'),
		'nacionalidade_id' => array('type' => 'integer', 'null' => false),
		'naturalidade_id' => array('type' => 'integer', 'null' => false),
		'expedidor_rg_id' => array('type' => 'integer', 'null' => false),
		'cidade_id' => array('type' => 'integer', 'null' => false),
		'escolaridade_id' => array('type' => 'integer', 'null' => false),
		'tipologia_id' => array('type' => 'integer', 'null' => false),
		'pais_id' => array('type' => 'integer', 'null' => false),
		'nome' => array('type' => 'string', 'null' => false, 'length' => 50),
		'nome_artistico' => array('type' => 'string', 'null' => false, 'length' => 50),
		'naturalizado' => array('type' => 'string', 'null' => true, 'length' => 1),
		'data_naturalizacao' => array('type' => 'date', 'null' => true),
		'tipo_visto' => array('type' => 'string', 'null' => true, 'length' => 1),
		'data_validade_visto' => array('type' => 'date', 'null' => true),
		'data_nascimento' => array('type' => 'date', 'null' => false),
		'sexo' => array('type' => 'string', 'null' => false, 'length' => 1),
		'cpf' => array('type' => 'string', 'null' => false, 'length' => 14),
		'rg' => array('type' => 'string', 'null' => false, 'length' => 12),
		'data_rg' => array('type' => 'date', 'null' => true),
		'ano_graduacao' => array('type' => 'string', 'null' => true, 'length' => 4),
		'curso' => array('type' => 'string', 'null' => true, 'length' => 20),
		'profissao' => array('type' => 'string', 'null' => false, 'length' => 20),
		'logradouro' => array('type' => 'string', 'null' => false, 'length' => 50),
		'numero' => array('type' => 'string', 'null' => false, 'length' => 7),
		'complemento' => array('type' => 'string', 'null' => false, 'length' => 50),
		'bairro' => array('type' => 'string', 'null' => false, 'length' => 30),
		'cep' => array('type' => 'string', 'null' => false, 'length' => 8),
		'comprovante' => array('type' => 'string', 'null' => false),
		'representante_oficial' => array('type' => 'string', 'null' => true, 'length' => 1),
		'representante_nome' => array('type' => 'string', 'null' => true, 'length' => 50),
		'representante_cpf' => array('type' => 'string', 'null' => true, 'length' => 14),
		'representante_rg' => array('type' => 'string', 'null' => true, 'length' => 10),
		'representante_dataexpedicao_rg' => array('type' => 'string', 'null' => true, 'length' => 5),
		'representante_expedidor_rg' => array('type' => 'string', 'null' => true, 'length' => 2),
		'representante_telefone' => array('type' => 'string', 'null' => true, 'length' => 20),
		'representante_celular' => array('type' => 'string', 'null' => true, 'length' => 20),
		'representante_email' => array('type' => 'string', 'null' => true, 'length' => 50),
		'representante_delegacao' => array('type' => 'string', 'null' => true, 'length' => 50),
		'deletado' => array('type' => 'string', 'null' => true, 'length' => 1),
		'created' => array('type' => 'datetime', 'null' => true),
		'modified' => array('type' => 'datetime', 'null' => true),
		'email' => array('type' => 'string', 'null' => false),
		'site' => array('type' => 'string', 'null' => true),
		'fax' => array('type' => 'string', 'null' => true, 'length' => 20),
		'indexes' => array('PRIMARY' => array('unique' => true, 'column' => 'id')),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => 1,
			'nacionalidade_id' => 1,
			'naturalidade_id' => 1,
			'expedidor_rg_id' => 1,
			'cidade_id' => 1,
			'escolaridade_id' => 1,
			'tipologia_id' => 1,
			'pais_id' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'nome_artistico' => 'Lorem ipsum dolor sit amet',
			'naturalizado' => 'Lorem ipsum dolor sit ame',
			'data_naturalizacao' => '2012-02-07',
			'tipo_visto' => 'Lorem ipsum dolor sit ame',
			'data_validade_visto' => '2012-02-07',
			'data_nascimento' => '2012-02-07',
			'sexo' => 'Lorem ipsum dolor sit ame',
			'cpf' => 'Lorem ipsum ',
			'rg' => 'Lorem ipsu',
			'data_rg' => '2012-02-07',
			'ano_graduacao' => 'Lo',
			'curso' => 'Lorem ipsum dolor ',
			'profissao' => 'Lorem ipsum dolor ',
			'logradouro' => 'Lorem ipsum dolor sit amet',
			'numero' => 'Lorem',
			'complemento' => 'Lorem ipsum dolor sit amet',
			'bairro' => 'Lorem ipsum dolor sit amet',
			'cep' => 'Lorem ',
			'comprovante' => 'Lorem ipsum dolor sit amet',
			'representante_oficial' => 'Lorem ipsum dolor sit ame',
			'representante_nome' => 'Lorem ipsum dolor sit amet',
			'representante_cpf' => 'Lorem ipsum ',
			'representante_rg' => 'Lorem ip',
			'representante_dataexpedicao_rg' => 'Lor',
			'representante_expedidor_rg' => '',
			'representante_telefone' => 'Lorem ipsum dolor ',
			'representante_celular' => 'Lorem ipsum dolor ',
			'representante_email' => 'Lorem ipsum dolor sit amet',
			'representante_delegacao' => 'Lorem ipsum dolor sit amet',
			'deletado' => 'Lorem ipsum dolor sit ame',
			'created' => '2012-02-07 03:47:53',
			'modified' => '2012-02-07 03:47:53',
			'email' => 'Lorem ipsum dolor sit amet',
			'site' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor '
		),
	);
}
?>
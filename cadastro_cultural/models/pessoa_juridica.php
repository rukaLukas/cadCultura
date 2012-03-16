<?php


/**
 * Description of Pessoa Juridica
 *
 * @author rodrigolima
 */
class PessoaJuridica extends AppModel{

    public $actsAs = array('Search.Searchable');

    var $name = 'PessoaJuridica';

    var $belongsTo = array('Esfera');
    

    var $hasMany = array(
            'Portifolio' => array(
                    'className' => 'Portifolio',
                    'foreignKey' => 'pessoa_juridica_id',
                    'dependent' => true
            ),
            'Representante' => array(
                    'className' => 'Representante',
                    'foreignKey' => 'pessoa_juridica_id',
                    'dependent' => true
            ),
            'ConselhoFiscal' => array(
                    'className' => 'ConselhoFiscal',
                    'foreignKey' => 'pessoa_juridica_id',
                    'dependent' => true
            ),
            'ConselhoAdministracao' => array(
                    'className' => 'ConselhoAdministracao',
                    'foreignKey' => 'pessoa_juridica_id',
                    'dependent' => true
            ),
            'Dirigente' => array(
                    'className' => 'Dirigente',
                    'foreignKey' => 'pessoa_juridica_id',
                    'dependent' => true
            )
    );



    public $filterArgs = array(array('name' => 'nome_fantasia', 'type' => 'query', 'method' => 'filtrarNomeFantasia'),
                               array('name' => 'cnpj', 'type' => 'string'));

    public function filtrarNomeFantasia($data,$field=null){

        if(empty ($data['nome_fantasia'])){

            return array();
        }

        $nomeFantasia = '%'. $data['nome_fantasia'] . '%';

        return array('OR'=>array($this->alias .'.nome_fantasia LIKE'=>$nomeFantasia));
    }




    public $validate = array(
        'razao_social' => array(
                'rule' => 'notempty',
                'message' => "A Razao Social deve ser preenchida",
        ),
        'nome_fantasia' => array(
                'rule' => 'notempty',
                'message' => "O Nome Fantasia deve ser preenchido",
        ),
        'cnpj' => array(
                'rule' => 'notempty',
                'message' => "O Cnpj deve ser preenchido",
        )
    );

}
?>

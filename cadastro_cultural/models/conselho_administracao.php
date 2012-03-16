<?php


/**
 * Description of ConselhoAdministracao
 *
 * @author rodrigolima
 */
class ConselhoAdministracao extends AppModel{

    var $name = 'ConselhoAdministracao';
    var $useTable = 'conselhos_administracao';


    public $validate = array(
        'nome' => array(
                'rule' => 'notempty',
                'message' => "O Nome deve ser preenchido",
        ),
        'cpf' => array(
                'rule' => 'notempty',
                'message' => "O Cpf deve ser preenchido",
        ),
        'rg' => array(
                'rule' => 'notempty',
                'message' => "O Rg deve ser preenchido",
        ),
        'data_expedicao' => array(
                'rule' => 'notempty',
                'message' => "A Data de Expedição  deve ser preenchida",
        ),
        'orgao_expedidor' => array(
                'rule' => 'notempty',
                'message' => "O Orgão Expedidor  deve ser preenchido",
        ),
        'data_inicio_mandato' => array(
                'rule' => 'notempty',
                'message' => "A Data de Início do Mandato deve ser preenchida",
        ),
        'data_fim_mandato' => array(
                'rule' => 'notempty',
                'message' => "A Data Fim do Mandato deve ser preenchida",
        ),
    );


}
?>

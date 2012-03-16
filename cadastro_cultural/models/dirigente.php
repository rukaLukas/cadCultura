<?php


/**
 * Description of Dirigente
 *
 * @author rodrigolima
 */
class Dirigente extends AppModel{

    var $name = 'Dirigente';


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
        'cargo' => array(
                'rule' => 'notempty',
                'message' => "O Cargo  deve ser preenchido",
        ),
        'telefone' => array(
                'rule' => 'notempty',
                'message' => "O Telefone  deve ser preenchido",
        ),
        'celular' => array(
                'rule' => 'notempty',
                'message' => "O Celular  deve ser preenchido",
        ),
        'email' => array(
                'rule' => 'notempty',
                'message' => "O Email  deve ser preenchid",
        ),
        'data_inicio_mandato' => array(
                'rule' => 'notempty',
                'message' => "A Data de Início do Mandato  deve ser preenchida",
        ),
        'data_fim_mandato' => array(
                'rule' => 'notempty',
                'message' => "A Data de Fim do Mandato  deve ser preenchida",
        ),

    );

   
}
?>

<?php


/**
 * Description of portifolio
 *
 * @author rodrigolima
 */
class Portifolio extends AppModel{

    var $name = 'Portifolio';

    //var $hasOne = array('PessoaJuridica');

    public $validate = array(
        'mes' => array(
                'rule' => 'notempty',
                'message' => "O mes deve ser preenchido",
        ),
        'ano' => array(
                'rule' => 'notempty',
                'message' => "O ano deve ser preenchido",
        ),
        'funcao' => array(
                'rule' => 'notempty',
                'message' => "A Função deve ser preenchida",
        )
    );

   
}
?>

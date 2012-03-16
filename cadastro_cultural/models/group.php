<?php


/**
 * Description of group
 *
 * @author rodrigolima
 */
class Group extends AppModel{

    var $name = 'Group';

    var $actsAs = array('Acl' => array('requester'));

    function parentNode() {
        return null;

    }


     function afterSave($created)
     {
	    $node = $this->node();
	    $aro = $node[0];
	    $aro['Aro']['alias'] = $this->data['Group']['name'];
	    $this->Aro->save($aro);

            }
}
?>

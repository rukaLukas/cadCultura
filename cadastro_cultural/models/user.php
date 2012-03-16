<?php


/**
 * Description of user
 *
 * @author rodrigolima
 */
class User extends AppModel{

    var $name = 'User';

    var $belongsTo = array('Group');

    var $actsAs = array('Acl' => 'requester');

    function parentNode() {

        if (!$this->id && empty($this->data)) {
            return null;
        }
        
        $data = $this->data;

        if (empty($this->data)) {
            $data = $this->read();

         }

         if (!$data['User']['group_id']) {
             return null;

          } else {

              return array('Group' => array('id' => $data['User']['group_id']));

              }

    }

    function  afterSave($created) {

        if(!$created){

            $parent = $this->parentNode();
            $parent = $this->node($parent);
            $node = $this->node();
            $aro = $node[0];
            $aro['Aro']['parent_id'] = $parent[0]['Aro']['id'];
            $aro['Aro']['alias'] = $parent[0]['User']['username'];
            $this->Aro->save($aro);

        }
    }
}
?>

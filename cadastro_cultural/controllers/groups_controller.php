<?php



/**
 * Description of groups_controller
 *
 * @author rodrigolima
 */
class GroupsController extends AppController {
    
    var $name = 'Groups';


    function  index(){
        
        $this->set('groups',$this->Group->find('all'));
    }


    function  view($id = null){


        $this->Group->id = $id;
        $this->set('group',$this->Group->read());

    }

    function add(){

        if (!empty($this->data)) {

             if ($this->Group->save($this->data)) {

                 $this->Session->setFlash('Seu grupo foi salvo.');
                 $this->redirect(array('action' => 'index'));
             }
        }
    }



    function delete($id){

        $this->Group->delete($id);

        $this->Session->setFlash('O grupo com id: '.$id.' foi excluído.');

        $this->redirect(array('action'=>'index'));

    }


    function edit($id = null){

        $this->Group->id = $id;

        if (empty($this->data)) {

            $this->data = $this->Group->read();
        }else{

            if ($this->Group->save($this->data)) {

                $this->Session->setFlash('Seu grupo foi atualizado.');
                $this->redirect(array('action' => 'index'));

            }
        }
    }
   
}
?>

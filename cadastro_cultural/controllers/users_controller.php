<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users_controller
 *
 * @author rodrigolima
 */
class UsersController extends AppController {
    
    var $name = 'Users';

     function beforeFilter() {

        parent::beforeFilter();
        $this->Auth->allowedActions = array('login', 'logout');
    }

    function  index(){

        $this->set('users',$this->User->find('all'));
    }


    function  view($id = null){


        $this->User->id = $id;
        $this->set('users',$this->User->read());

    }

    function add(){
     
        if (!empty($this->data)) {


             if ($this->User->save($this->data)) {

                 $this->Session->setFlash('Seu Usuario foi salvo.');
                 $this->redirect(array('action' => 'index'));
             }else{

                 $this->set("grupos",$this->User->Group->find('list'));
             }
        }else{

            $this->set("grupos",$this->User->Group->find('list'));
            $this->render();

        }
    }



    function delete($id){

        $this->User->delete($id);

        $this->Session->setFlash('O Usuario com id: '.$id.' foi excluído.');

        $this->redirect(array('action'=>'index'));

    }


    function edit($id = null){

        $this->User->id = $id;

        if (empty($this->data)) {

            $this->data = $this->User->read();
        }else{

            if ($this->User->save($this->data)) {

                $this->Session->setFlash('Seu Usuario foi atualizado.');
                $this->redirect(array('action' => 'index'));

            }
        }
    }



    function login(){

       


    }

    function logout(){

        $this->Session->setFlash('Tchauzinho!');
        $this->redirect($this->Auth->logout());

    }


    function initDB() {
        $group =& $this->User->Group;
        // Permite aos admins fazer tudo
        $group->id = 5;
        $this->Acl->allow($group, 'controllers');

        // Permite aos gerentes acessar posts e widgets
        $group->id = 6;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Posts');
        

        // Permite aos usuários apenas adicionar ou editar os posts e widgets
        $group->id = 7;
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Posts/add');
        $this->Acl->allow($group, 'controllers/Posts/edit');

        // nós adcionamos um exit para evitar que seja exibido o erro de missing views
        echo "all done";
        exit;
}




}
?>

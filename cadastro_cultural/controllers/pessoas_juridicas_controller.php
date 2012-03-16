<?php


/**
 * Description of pessoas_juridicas_controller
 *
 * @author rodrigolima
 */
class PessoasJuridicasController extends AppController {
    
    var $name = 'PessoaJuridica';
    var $components = array('Search.Prg');
    public $layout = 'ajax';

    public $presetVars = array(
        array('field' => 'nome_fantasia', 'type' => 'value'),
        array('field' => 'cnpj', 'type' => 'value'),
        );

     function beforeFilter() {

        parent::beforeFilter();
        Configure::write('debug', 0); // não mostra debug
        
    }


    function  index(){
        $this->layout = 'default';
        $this->Prg->commonProcess();
	$this->paginate['conditions'] = $this->PessoaJuridica->parseCriteria($this->passedArgs);
	$this->set('pessoasJuridicas', $this->paginate());
       // $this->set('pessoasJuridicas',$this->PessoaJuridica->find('all'));
    }


    function  view($id = null){


        $this->PessoaJuridica->id = $id;
        $this->set('pessoaJuridica',$this->PessoaJuridica->read());

    }

    function add(){
     $this->set('portifolios',$this->PessoaJuridica->find('all'));
        if (!empty($this->data)) {


             if ($this->PessoaJuridica->saveAll($this->data,array('validade'=>'first'))) {

                 $this->Session->setFlash('Pessoa Juridica cadastrado com sucesso.');
                 $this->redirect(array('action' => 'index'));
             }else{
                 
                 $this->set("esferas",$this->PessoaJuridica->Esfera->find('list'));
             }
        }else{

            $this->set("esferas",$this->PessoaJuridica->Esfera->find('list'));
            $this->render();
        }
        
    }



    function delete($id){

        $this->PessoaJuridica->delete($id);

        $this->Session->setFlash('Item Excluído com sucesso');

        $this->redirect(array('action'=>'index'));

    }


    function edit($id = null){

        $this->PessoaJuridica->id = $id;

        if (empty($this->data)) {

            $this->data = $this->PessoaJuridica->read();
        }else{

            if ($this->PessoaJuridica->save($this->data)) {

                $this->Session->setFlash('Seu Usuario foi atualizado.');
                $this->redirect(array('action' => 'index'));

            }
        }
    }
    


}
?>

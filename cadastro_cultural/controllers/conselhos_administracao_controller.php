<?php



/**
 * Description of conselhos_administracao_controller
 *
 * @author rodrigolima
 */
class ConselhosAdministracaoController extends AppController {
    
    var $name = 'ConselhoAdministracao';

    
    function beforeFilter() {

        parent::beforeFilter();
        $this->layout = 'ajax';
        $this->Auth->allowedActions = array('index', 'add','view','delete','edit','edit_error');
    }

    function  index(){
        
        $this->Session->delete('Message.flash');
        
        $novoElemento = $this->data["Ca"];
        $this->ConselhoAdministracao->set($this->data["Ca"]);
        $this->ConselhoAdministracao->validates();


        $erros = "";
        foreach( $this->ConselhoAdministracao->invalidFields() as $e){
               $erros .=$e . "<br>";
        }
        
        if(empty ($erros)){

            $novoElemento["data_fim_mandato"] = str_replace("_method=POST", "",$novoElemento["data_fim_mandato"] );
            
            if(empty ($this->data["ConselhoAdministracao"])){

                $elementos[]=array("ConselhoAdministracao"=> $novoElemento);
                $this->set('elementos',$elementos);

            }else{
                $elementos = $this->data["ConselhoAdministracao"];

                $novosElementos= array();
                foreach($elementos as $elemento){
                 $novosElementos[] = array("ConselhoAdministracao"=> $elemento);
                }



                $novosElementos[]=array("ConselhoAdministracao"=> $novoElemento);
                $this->set('elementos',$novosElementos);


            }
        }else{
             
             $this->Session->setFlash($erros);

             $this->autoRender = false; // não renderiza view alguma
             Configure::write('debug', 0); // não mostra debug
             
             echo "error";

        }
    
       



    
    }




    function  view($id = null){
       

    }

    function add(){
        

        
        
        
    }



    function delete($index){

        $elementos = $this->data["ConselhoAdministracao"];

        unset($elementos[$index]);

        $novosElementos= array();
        foreach($elementos as $elemento){
         $novosElementos[] = array("ConselhoAdministracao"=> $elemento);
        }

        $this->set('elementos',$novosElementos);
        $this->render('index');

    }


    function edit($index = null){


        if(empty ($this->data["Ca"])){
            $elementos = $this->data["ConselhoAdministracao"];

            $this->data["Ca"] = $elementos[$index];
            $this->data["Ca"]["index"] = $index;


        }else{



            $this->Session->delete('Message.flash');

            $novoElemento = $this->data["Ca"];
            $this->ConselhoAdministracao->set($this->data["Ca"]);
            $this->ConselhoAdministracao->validates();

            $erros = "";
            foreach( $this->ConselhoAdministracao->invalidFields() as $e){
                   $erros .=$e . "<br>";
            }

            if(empty ($erros)){
                
                $novoElemento["data_fim_mandato"] = str_replace("_method=POST", "",$novoElemento["data_fim_mandato"] );
                $elementos = $this->data["ConselhoAdministracao"];

                $novosElementos= array();
                foreach($elementos as $elemento){
                 $novosElementos[] = array("ConselhoAdministracao"=> $elemento);
                }



                $novosElementos[$novoElemento["index"]]=array("ConselhoAdministracao"=> $novoElemento);
                $this->set('elementos',$novosElementos);
                $this->render('index');



            }else{

                 $this->Session->setFlash($erros);

                 $this->autoRender = false; // não renderiza view alguma

                 echo "error";

            }



        }
      
    }

    function edit_error(){

        $this->render('edit');
    }
   
}
?>

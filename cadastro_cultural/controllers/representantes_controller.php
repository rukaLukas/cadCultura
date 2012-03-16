<?php



/**
 * Description of representantes_controller
 *
 * @author rodrigolima
 */
class RepresentantesController extends AppController {
    
    var $name = 'Representantes';

    
    function beforeFilter() {

        parent::beforeFilter();
        $this->layout = 'ajax';
        $this->Auth->allowedActions = array('index', 'add','view','delete','edit','edit_error');
    }

    function  index(){
        
        $this->Session->delete('Message.flash');
        
        $novoElemento = $this->data["Repre"];
        $this->Representante->set($this->data["Repre"]);
        $this->Representante->validates();


        $erros = "";
        foreach( $this->Representante->invalidFields() as $e){
               $erros .=$e . "<br>";
        }
        
        if(empty ($erros)){

            if(empty ($this->data["Representante"])){

                $elementos[]=array("Representante"=> $novoElemento);
                $this->set('representantes',$elementos);

            }else{
                $elementos = $this->data["Representante"];

                $novosElementos= array();
                foreach($elementos as $elemento){
                 $novosElementos[] = array("Representante"=> $elemento);
                }



                $novosElementos[]=array("Representante"=> $novoElemento);
                $this->set('representantes',$novosElementos);


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

        $elementos = $this->data["Representante"];

        unset($elementos[$index]);

        $novosElementos= array();
        foreach($elementos as $elemento){
         $novosElementos[] = array("Representante"=> $elemento);
        }

        $this->set('representantes',$novosElementos);
        $this->render('index');

    }


    function edit($index = null){


        if(empty ($this->data["Repre"])){
            $elementos = $this->data["Representante"];

            $this->data["Repre"] = $elementos[$index];
            $this->data["Repre"]["index"] = $index;


        }else{



            $this->Session->delete('Message.flash');

            $novoElemento = $this->data["Repre"];
            $this->Representante->set($this->data["Repre"]);
            $this->Representante->validates();

            $erros = "";
            foreach( $this->Representante->invalidFields() as $e){
                   $erros .=$e . "<br>";
            }

            if(empty ($erros)){


                $elementos = $this->data["Representante"];

                $novosElementos= array();
                foreach($elementos as $elemento){
                 $novosElementos[] = array("Representante"=> $elemento);
                }



                $novosElementos[$novoElemento["index"]]=array("Representante"=> $novoElemento);
                $this->set('representantes',$novosElementos);
                $this->render('index');



            }else{

                 $this->Session->setFlash($erros);

                 $this->autoRender = false; // não renderiza view alguma
                 echo $this->data["Repre"];

                 echo "error";

            }



        }
      
    }

    function edit_error(){

        $this->render('edit');
    }
   
}
?>

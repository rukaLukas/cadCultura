<?php



/**
 * Description of conselhos_fiscais_controller
 *
 * @author rodrigolima
 */
class ConselhosFiscaisController extends AppController {
    
    var $name = 'ConselhoFiscal';

    
    function beforeFilter() {

        parent::beforeFilter();
        $this->layout = 'ajax';
        $this->Auth->allowedActions = array('index', 'add','view','delete','edit','edit_error');
    }

    function  index(){
        
        $this->Session->delete('Message.flash');
        
        $novoElemento = $this->data["Cf"];
        $this->ConselhoFiscal->set($this->data["Cf"]);
        $this->ConselhoFiscal->validates();


        $erros = "";
        foreach( $this->ConselhoFiscal->invalidFields() as $e){
               $erros .=$e . "<br>";
        }
        
        if(empty ($erros)){

            $novoElemento["data_fim_mandato"] = str_replace("_method=POST", "",$novoElemento["data_fim_mandato"] );
            
            if(empty ($this->data["ConselhoFiscal"])){

                $elementos[]=array("ConselhoFiscal"=> $novoElemento);
                $this->set('elementos',$elementos);

            }else{
                $elementos = $this->data["ConselhoFiscal"];

                $novosElementos= array();
                foreach($elementos as $elemento){
                 $novosElementos[] = array("ConselhoFiscal"=> $elemento);
                }



                $novosElementos[]=array("ConselhoFiscal"=> $novoElemento);
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

        $elementos = $this->data["ConselhoFiscal"];

        unset($elementos[$index]);

        $novosElementos= array();
        foreach($elementos as $elemento){
         $novosElementos[] = array("ConselhoFiscal"=> $elemento);
        }

        $this->set('elementos',$novosElementos);
        $this->render('index');

    }


    function edit($index = null){


        if(empty ($this->data["Cf"])){
            $elementos = $this->data["ConselhoFiscal"];

            $this->data["Cf"] = $elementos[$index];
            $this->data["Cf"]["index"] = $index;


        }else{



            $this->Session->delete('Message.flash');

            $novoPotifolio = $this->data["Cf"];
            $this->ConselhoFiscal->set($this->data["Cf"]);
            $this->ConselhoFiscal->validates();

            $erros = "";
            foreach( $this->ConselhoFiscal->invalidFields() as $e){
                   $erros .=$e . "<br>";
            }

            if(empty ($erros)){
                
                $novoPotifolio["data_fim_mandato"] = str_replace("_method=POST", "",$novoPotifolio["data_fim_mandato"] );
                $portifolios = $this->data["ConselhoFiscal"];

                $novosPortifolios= array();
                foreach($portifolios as $portifolio){
                 $novosPortifolios[] = array("ConselhoFiscal"=> $portifolio);
                }



                $novosPortifolios[$novoPotifolio["index"]]=array("ConselhoFiscal"=> $novoPotifolio);
                $this->set('elementos',$novosPortifolios);
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

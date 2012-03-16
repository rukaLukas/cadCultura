<?php



/**
 * Description of portifolios_controller
 *
 * @author rodrigolima
 */
class PortifoliosController extends AppController {
    
    var $name = 'Portifolios';

    
    function beforeFilter() {

        parent::beforeFilter();
        $this->layout = 'ajax';
        $this->Auth->allowedActions = array('index', 'add','view','delete','edit','edit_error');
    }

    function  index(){
        
        $this->Session->delete('Message.flash');
        
        $novoPotifolio = $this->data["Port"];
        $this->Portifolio->set($this->data["Port"]);
        $this->Portifolio->validates();

        $erros = "";
        foreach( $this->Portifolio->invalidFields() as $e){
               $erros .=$e . "<br>";
        }
        
        if(empty ($erros)){
            
            $novoPotifolio["anexo_ato"] = str_replace("_method=POST", "",$novoPotifolio["anexo_ato"] );

            if(empty ($this->data["Portifolio"])){

                $portifolios[]=array("Portifolio"=> $novoPotifolio);
                $this->set('portifolios',$portifolios);

            }else{
                $portifolios = $this->data["Portifolio"];

                $novosPortifolios= array();
                foreach($portifolios as $portifolio){
                 $novosPortifolios[] = array("Portifolio"=> $portifolio);
                }



                $novosPortifolios[]=array("Portifolio"=> $novoPotifolio);
                $this->set('portifolios',$novosPortifolios);


            }
        }else{
             
             $this->Session->setFlash($erros);

             $this->autoRender = false; // não renderiza view alguma
             Configure::write('debug', 0); // não mostra debug
             echo $this->data["Port"];
             
             echo "error";

        }
    
       



    
    }




    function  view($id = null){
       

    }

    function add(){
        

        
        
        
    }



    function delete($index){

        $portifolios = $this->data["Portifolio"];

        unset($portifolios[$index]);

        $novosPortifolios= array();
        foreach($portifolios as $portifolio){
         $novosPortifolios[] = array("Portifolio"=> $portifolio);
        }

        $this->set('portifolios',$novosPortifolios);
        $this->render('index');

    }


    function edit($index = null){


        if(empty ($this->data["Port"])){
            $portifolios = $this->data["Portifolio"];

            $this->data["Port"] = $portifolios[$index];
            $this->data["Port"]["index"] = $index;


        }else{



            $this->Session->delete('Message.flash');

            $novoPotifolio = $this->data["Port"];
            $this->Portifolio->set($this->data["Port"]);
            $this->Portifolio->validates();

            $erros = "";
            foreach( $this->Portifolio->invalidFields() as $e){
                   $erros .=$e . "<br>";
            }

            if(empty ($erros)){

                 $novoPotifolio["anexo_ato"] = str_replace("_method=POST", "",$novoPotifolio["anexo_ato"] );
                $portifolios = $this->data["Portifolio"];

                $novosPortifolios= array();
                foreach($portifolios as $portifolio){
                 $novosPortifolios[] = array("Portifolio"=> $portifolio);
                }



                $novosPortifolios[$novoPotifolio["index"]]=array("Portifolio"=> $novoPotifolio);
                $this->set('portifolios',$novosPortifolios);
                $this->render('index');



            }else{

                 $this->Session->setFlash($erros);

                 $this->autoRender = false; // não renderiza view alguma
                 echo $this->data["Port"];

                 echo "error";

            }



        }
      
    }

    function edit_error(){

        $this->render('edit');
    }
   
}
?>

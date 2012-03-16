<?php



/**
 * Description of representantes_controller
 *
 * @author rodrigolima
 */
class DirigentesController extends AppController {

    var $name = 'Dirigentes';


    function beforeFilter() {

        parent::beforeFilter();
        $this->layout = 'ajax';
        $this->Auth->allowedActions = array('index', 'add','view','delete','edit','edit_error');
    }

    function  index(){

        $this->Session->delete('Message.flash');

        $novoRepresentante = $this->data["Dir"];
        $this->Dirigente->set($this->data["Dir"]);
        $this->Dirigente->validates();


        $erros = "";
        foreach( $this->Dirigente->invalidFields() as $e){
               $erros .=$e . "<br>";
        }

        if(empty ($erros)){

            $novoRepresentante["data_fim_mandato"] = str_replace("_method=POST", "",$novoRepresentante["data_fim_mandato"] );

            if(empty ($this->data["Dirigente"])){

                $representantes[]=array("Dirigente"=> $novoRepresentante);
                $this->set('representantes',$representantes);

            }else{
                $representantes = $this->data["Dirigente"];

                $novosRepresentantes= array();
                foreach($representantes as $representante){
                 $novosRepresentantes[] = array("Dirigente"=> $representante);
                }



                $novosRepresentantes[]=array("Dirigente"=> $novoRepresentante);
                $this->set('representantes',$novosRepresentantes);


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

        $portifolios = $this->data["Dirigente"];

        unset($portifolios[$index]);

        $novosPortifolios= array();
        foreach($portifolios as $portifolio){
         $novosPortifolios[] = array("Dirigente"=> $portifolio);
        }

        $this->set('representantes',$novosPortifolios);
        $this->render('index');

    }


    function edit($index = null){


        if(empty ($this->data["Dir"])){
            $portifolios = $this->data["Dirigente"];

            $this->data["Dir"] = $portifolios[$index];
            $this->data["Dir"]["index"] = $index;


        }else{



            $this->Session->delete('Message.flash');

            $novoPotifolio = $this->data["Dir"];
            $this->Dirigente->set($this->data["Dir"]);
            $this->Dirigente->validates();

            $erros = "";
            foreach( $this->Dirigente->invalidFields() as $e){
                   $erros .=$e . "<br>";
            }

            if(empty ($erros)){

                $novoPotifolio["data_fim_mandato"] = str_replace("_method=POST", "",$novoPotifolio["data_fim_mandato"] );
                $portifolios = $this->data["Dirigente"];

                $novosPortifolios= array();
                foreach($portifolios as $portifolio){
                 $novosPortifolios[] = array("Dirigente"=> $portifolio);
                }



                $novosPortifolios[$novoPotifolio["index"]]=array("Dirigente"=> $novoPotifolio);
                $this->set('representantes',$novosPortifolios);
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

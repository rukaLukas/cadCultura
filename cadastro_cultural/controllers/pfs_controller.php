<?php
class PfsController extends AppController {

	var $name = 'Pfs';
	var $uses = array('Pf', 'Estado');
	var $paginate = array('conditions' => array('deletado' => 'N'));	

	public $presetVars = array(
        array('field' => 'nome', 'type' => 'value'),                
        array('field' => 'cpf', 'type' => 'value')
                
    );	
    
	
	public function find() {							
	        $this->Prg->commonProcess();
	        $this->paginate['conditions'] = $this->Pf->parseCriteria($this->passedArgs); 
	        $this->Pf->recursive = 0;       
	        $this->set('pfs', $this->paginate());	              	        
	}
	
    
	private function upload($arquivo, $w, $id, $tipo)
	{		
		//echo "->>>".$tipo."<<<-"; 
		//echo "->>>".$w."<<<-"; exit;
		$this->Upload->upload($arquivo);
		$arqName = date('dmY_His').'_'.$id;
		$this->Upload->file_new_name_body   = $arqName;
		$this->Upload->image_resize         = true;
		$this->Upload->image_x              = $w;
		$this->Upload->image_ratio_y        = true;
		$this->Upload->jpeg_quality         = 70;
		$this->Upload->allowed = array('image/jpeg','image/jpg','image/gif','image/png','application/pdf','application/msword');
		
		if($tipo == 1){// se for comprovante		
			$this->Upload->process("../webroot/files/comprovantes");
			$endereco = 'files/comprovantes/'.$arqName.".".$this->Upload->file_src_name_ext;
		}
		if($tipo == 2){// se for curriculo anexo
			$this->Upload->process("../webroot/files/curriculos");
			$endereco = 'files/curriculos/'.$arqName.".".$this->Upload->file_src_name_ext;
		}
		if($tipo == 3){// se for documento(RG/CPF)
			$this->Upload->process("../webroot/files/documentos");
			$endereco = 'files/documentos/'.$arqName.".".$this->Upload->file_src_name_ext;
		}
			
		if ($this->Upload->processed) {			
			$this->Upload->clean();//libera a memoria
		} else {
			$this->erro = $this->Upload->error;
		}
		return $endereco;		
	}		
	
	
	
	private function varreDir($dir,$id)
	{				
		$qtdCaractere = strlen($id);		
		$diraberto = opendir($dir); // Abre o diretorio especificado
	    chdir($dir); // Muda o diretorio atual p/ o especificado
	    while($arq = readdir($diraberto)) { // Le o conteudo do arquivo
	        if($arq == ".." || $arq == ".")continue; // Desconsidera os diretorios	        
	            if(file_exists($arq)){// se existi arquivo no diretorio apaga arquivo
	            	$nomeArquivo = explode(".", $arq);
	            	if(substr($nomeArquivo[0], -$qtdCaractere) == $id)
	            		unlink($arq);	            		  
	            }          		    	        
	    }    
	    chdir("../../"); // Volta um diretorio
	    closedir($diraberto); // Fecha o diretorio atual
	}
	
	
	
	
	
	function index() {
				
	  $group = $this->Pf->User->Group;
      $group->id = $this->Session->read('Auth.User.group_id');
      $group = $group->read();

      if("USR" == $group['Group']['sigla']){
            $this->passedArgs['user_id'] = $this->Session->read('Auth.User.id');
       }
        
      $this->Prg->commonProcess();
	  $this->paginate['conditions'] = $this->Pf->parseCriteria($this->passedArgs);
	  $this->set('pfs', $this->paginate());				
		
		//$this->Pf->recursive = 0;
		//$this->set('pfs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}		
		$pf = $this->Pf->read(null, $id);
		$this->set(compact('pf'));
	}

	function add() {
		/*
 		$user = $this->obterUsuarioLogado();
        $pf = $this->Pf->findByUserId($user['User']['id']);
        if($pf!=null && 'USR'== $user['Group']['sigla']){
            $this->redirect(array('action' => 'edit', $pf['Pf']['id']));
        }				
		*/
		if (!empty($this->data)) {			
			$this->Pf->create();							
			//$this->data['Pf']['user_id'] = $this->Session->read('Auth.User.id');			
			$this->data['Pf']['user_id'] = 17;
			$curriculoAnexo = $this->data["Pf"]["curriculo_anexo"];//guardo o curriculo anexo 
			$documentoAnexo = $this->data["Pf"]["documento_anexo"];//guardo o curriculo anexo											
			$naturalizado = $this->data['Pf']['naturalizado'];

		
			unset($this->data["Pf"]["curriculo_anexo"]);	
			unset($this->data["Pf"]["documento_anexo"]);
			//$this->data["Pf"]["cidade_id"] = 1;
							
			if ($this->Pf->saveAll($this->data, array('validate'=>'true'))) {
			//if ($this->Pf->save($this->data)) {							
				$idPf = $this->Pf->id;
				// faz upload do arquivo do curriculo anexo																		
				if(!empty($curriculoAnexo["tmp_name"])){																
						$this->data["Pf"]["curriculo_anexo"] = $this->upload($curriculoAnexo,"",$idPf,2);
						//echo "aki"; exit;					
				}
				// faz upload do arquivo do CPF/RG																		
				if(!empty($documentoAnexo["tmp_name"])){																
						$this->data["Pf"]["documento_anexo"] = $this->upload($documentoAnexo,"",$idPf,3);
						//echo "aki"; exit;					
				}						
				$this->data["Pf"]["id"] = $idPf;						
				$this->Pf->save($this->data);																
				$this->Session->setFlash(sprintf(__('A %s foi cadastrado.', true), 'Pessoa Física'));
				$this->redirect(array('action' => 'index'));
			} else {
				//debug($this->Pf->validationErrors);
				//debug($this->Pf->ContatoPf->validationErrors);
				//debug($this->Pf->Graduacao->validationErrors);
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		$estados = $this->Estado->find('list', array('conditions' => array('pais_id' => 1)));		 	
		for($i = 1940; $i < date("Y")+1; $i++){
			$anos_graduacao[$i] = $i;
		}			
		$this->set(compact('nacionalidades', 'estados', 'anos_graduacao'));
	}

	function edit($id = null) {
		
        $user = $this->obterUsuarioLogado();
        $sigla = $user['Group']['sigla'];        
        $this->Pf->id = $id;
        
		if (!empty($this->data)) {
			$this->data['Pf']['id'] = $id;
			$curriculoAnexo = $this->data["Pf"]["curriculo_anexo"];//guardo o curriculo anexo 
			$documentoAnexo = $this->data["Pf"]["documento_anexo"];//guardo o curriculo anexo					
			unset($this->data["Pf"]["curriculo_anexo"]);	
			unset($this->data["Pf"]["documento_anexo"]);			
			$naturalizado = $this->data['Pf']['naturalizado'];
			
			// faz upload do arquivo do curriculo anexo																		
			if(!empty($curriculoAnexo["tmp_name"])){
					$this->varreDir("../".WEBROOT_DIR."/files/curriculos",$id);																			
					$this->data["Pf"]["curriculo_anexo"] = $this->upload($curriculoAnexo,"",$id,2);
			}
			// faz upload do arquivo do CPF/RG																		
			if(!empty($documentoAnexo["tmp_name"])){					
					$this->varreDir("../".WEBROOT_DIR."/files/documentos",$id);														
					$this->data["Pf"]["documento_anexo"] = $this->upload($documentoAnexo,"",$id,3);								
			}			
			if($this->Pf->saveAll($this->data, array('validate'=>'true'))){												
				$this->Session->setFlash(sprintf(__('O %s foi atualizado.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		if (empty($this->data)) {
			
			$this->data = $this->Pf->read();
			/*
			if(($this->data['Pf']['user_id']!=$user['User']['id'])  && ('USR'==$sigla)){
                $pf = $this->Pf->findByUserId($this->Session->read('Auth.User.id'));
                $this->redirect(array('action' => 'edit', $pf['Pf']['id']));
            }
			*/
			$this->data = $this->Pf->read(null, $id);
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');								
		$estados = $this->Estado->find('list', array('conditions' => array('pais_id' => 1)));		
		for($i = 1940; $i < date("Y")+1; $i++){
			$anos_graduacao[$i] = $i;
		}			
		$this->set(compact('nacionalidades', 'estados', 'anos_graduacao'));
	}

	function delete($id = null) {
		$this->Pf->id = $id;	
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pf'));
			$this->redirect(array('action'=>'index'));
		}		
		if($this->Pf->saveField('deletado', 'S')){
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pessoa Física'));
			$this->redirect(array('action'=>'index'));
		}		
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Pf'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	
	function combo_cidade($id = null) {		
		if ($id) {						
			$this->layout = 'ajax';			
			$cidades = $this->Pf->Cidade->find('list', array('conditions' => array('estado_id' => $id)));			
			$this->set(compact('cidades'));			
		}
	}
}
?>
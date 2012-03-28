<?php
class PfsController extends AppController {

	var $name = 'Pfs';
	var $uses = array('Pf','Curriculo','CurriculosProduto','TelefonePf','FuncaoExercida', 'PfsTipologia', 'Estado');

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
		$this->Pf->recursive = 2;
		$this->set('pfs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}		
		$pf = $this->Pf->read(null, $id);				
		$tipologia = $this->Pf->Tipologia->find('first',array('joins' => array(
																  array(
																  	    'table' => 'pfs', 
																	    'alias' => 'pf',                       
																	    'type' => 'INNER',
																	    'conditions' => array('Tipologia.id = pf.tipologia_id')
																	    ),
															      array(
																  	    'table' => 'cbos', 
																	    'alias' => 'cbo',                       
																	    'type' => 'INNER',
																	    'conditions' => array('cbo.id = Tipologia.cbo_id')
																	    ),
															     array(
																  	    'table' => 'segmentoculturais', 
																	    'alias' => 'segmento',                       
																	    'type' => 'INNER',
																	    'conditions' => array('segmento.id = Tipologia.segmentocultural_id')
																	    ),	     
																array(
																  	    'table' => 'elos', 
																	    'alias' => 'elo',                       
																	    'type' => 'INNER',
																	    'conditions' => array('elo.id = Tipologia.elo_id')
																	    )	     
                    											),        
                    											'conditions' => array('pf.id' => $id),            											
                    											'fields' => array('segmento.nome','cbo.nomcbo','elo.nomelo')	                      															  	  
                    							)                    														
                    				);		
		$funcao = $this->Curriculo->find('all', array('conditions' => array('pf_id' => $id)));		
		$this->set(compact('pf', 'funcao', 'tipologia'));
		//$this->set('funcao', $this->Curriculo->read(array('conditions' => array('pf_id' => '$id'))));
		//exit;		
	}

	function add() {
		if (!empty($this->data)) {			
			$this->Pf->create();						
			
			$curriculoAnexo = $this->data["Pf"]["curriculo_anexo"];//guardo o curriculo anexo 
			$documentoAnexo = $this->data["Pf"]["documento_anexo"];//guardo o curriculo anexo					
			unset($this->data["Pf"]["curriculo_anexo"]);	
			unset($this->data["Pf"]["documento_anexo"]);			
			$naturalizado = $this->data['Pf']['naturalizado'];
						
			if($naturalizado == "N"){
				unset($this->data['Pf']['data_naturalizacao']);
				unset($this->data['Pf']['visto']);
				unset($this->data['Pf']['data_validade_visto']);
			}
			
			/*
			 * monta os arrays
			 */
			$anosGraducao = array();
			$cursosGraducao = array();
			$telefones = array();
			$emails = array();
			$sites = array();
			
			foreach ($this->data['Pf']['ano_graduacao'] as $value) {
				$anosGraducao[] = $value;							
			}
			foreach ($this->data['Pf']['curso'] as $value) {
				$cursosGraducao[] = $value;							
			}
			foreach ($this->data['Pf']['telefone'] as $value) {
				$telefones[] = $value;							
			}
			foreach ($this->data['Pf']['email'] as $value) {
				$emails[] = $value;							
			}
			foreach ($this->data['Pf']['site'] as $value) {
				$sites[] = $value;							
			}			
			
			$this->data['Pf']['nacionalidade_id'] = 1;
			$this->data['Pf']['naturalidade_id'] = 1;
			$this->data['Pf']['expedidor_rg_id'] = 1;
			$this->data['Pf']['cidade_id'] = 1;
			$this->data['Pf']['escolaridade_id'] = 1;
			$this->data['Pf']['comprovante'] = "";
			$this->data['Pf']['curso'] = "";
			$this->data['Pf']['site'] = "";
			$this->data['Pf']['telefone'] = "";
			$this->data['Pf']['email'] = "";			
			$this->data['Pf']['ano_graduacao'] = "";
			
					
			if ($this->Pf->save($this->data)) {				
				$idPf = $this->Pf->id;
				
				
				// ordena em ordem decrescente
				$maiorArray = array();
				$maiorArray[] = count($emails);
				$maiorArray[] = count($sites);
				$maiorArray[] = count($telefones);
				rsort($maiorArray);
				
				//percorre os arrays com base no de maior indice
				for($i=0; $i<$maiorArray[0]; $i++){
					$telefone = array_key_exists($i,$telefones) ? $telefones[$i] : "";
					$email = array_key_exists($i,$emails) ? $emails[$i] : "";
					$site = array_key_exists($i,$sites) ? $sites[$i] : "";
					
					$this->data['ContatoPf']['telefone'] = $telefone;
					$this->data['ContatoPf']['email'] = $email;
					$this->data['ContatoPf']['site'] = $site;
					$this->data['ContatoPf']['pf_id'] = $idPf;
					$this->Pf->ContatoPf->save($this->data);
					$this->data['ContatoPf']['id'] = "";
				}				
				//ordena em ordem decrescente pra salvar graduações									
				$maiorArray = array();
				$maiorArray[] = count($anosGraducao);
				$maiorArray[] = count($cursosGraducao);			
				rsort($maiorArray);
			
				//percorre os arrays com base no de maior indice
				for($i=0; $i<$maiorArray[0]; $i++){
					//verifica se existe valor nos indices corrente
					$anoGraduacao = array_key_exists($i,$anosGraducao) ? $anosGraducao[$i] : "";
					$curso = array_key_exists($i,$cursosGraducao) ? $cursosGraducao[$i] : "";				
					
					$this->data['Graduacao']['ano_graduacao'] = $anoGraduacao;
					$this->data['Graduacao']['curso'] = $curso;
					$this->data['Graduacao']['pf_id'] = $idPf;
					$this->Pf->Graduacao->save($this->data);	
					$this->data['Graduacao']['id'] = "";			
				}												
				
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
				$this->Pf->save($this->data);																
				$this->Session->setFlash(sprintf(__('A %s foi cadastrado.', true), 'Pessoa Física'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		//$naturalidades = $this->Pf->Naturalidade->find('list');
		$expedidorRgs = $this->Pf->ExpedidorRg->find('list');
		//$cidades = $this->Pf->Cidade->find('list');
		$escolaridades = $this->Pf->Escolaridade->find('list');
		$tipologias = $this->Pf->Tipologia->find('list');
		$paises = $this->Pf->Pais->find('list');
		$segmentos = $this->Pf->Tipologia->Segmentocultural->find('list');
		//$vistos = $this->Pf->Visto->find('list');
		$estados = $this->Estado->find('list', array('conditions' => array('pais_id' => 1)));
		//$anoAtual = 		
		for($i = 1940; $i < date("Y")+1; $i++){
			$anos_graduacao[$i] = $i;
		}			
		$this->set(compact('nacionalidades', 'expedidorRgs', 'escolaridades', 'tipologias', 'paises', 'segmentos', 'estados', 'anos_graduacao'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			$this->data['Pf']['id'] = $id;
			$curriculoAnexo = $this->data["Pf"]["curriculo_anexo"];//guardo o curriculo anexo 
			$documentoAnexo = $this->data["Pf"]["documento_anexo"];//guardo o curriculo anexo					
			unset($this->data["Pf"]["curriculo_anexo"]);	
			unset($this->data["Pf"]["documento_anexo"]);			
			$naturalizado = $this->data['Pf']['naturalizado'];

						
			if($naturalizado == "N"){
				unset($this->data['Pf']['data_naturalizacao']);
				unset($this->data['Pf']['visto']);
				unset($this->data['Pf']['data_validade_visto']);
			}
			
			/*
			 * monta os arrays
			 */
			$anosGraducao = array();
			$cursosGraducao = array();
			$telefones = array();
			$emails = array();
			$sites = array();
			
			foreach ($this->data['Pf']['ano_graduacao'] as $value) {
				$anosGraducao[] = $value;							
			}
			foreach ($this->data['Pf']['curso'] as $value) {
				$cursosGraducao[] = $value;							
			}
			foreach ($this->data['Pf']['telefone'] as $value) {
				$telefones[] = $value;							
			}
			foreach ($this->data['Pf']['email'] as $value) {
				$emails[] = $value;							
			}
			foreach ($this->data['Pf']['site'] as $value) {
				$sites[] = $value;							
			}			
			
			$this->data['Pf']['nacionalidade_id'] = 1;
			$this->data['Pf']['naturalidade_id'] = 1;
			$this->data['Pf']['expedidor_rg_id'] = 1;
			$this->data['Pf']['cidade_id'] = 1;
			$this->data['Pf']['escolaridade_id'] = 1;
			$this->data['Pf']['comprovante'] = "";
			$this->data['Pf']['curso'] = "";
			$this->data['Pf']['site'] = "";
			$this->data['Pf']['telefone'] = "";
			$this->data['Pf']['email'] = "";			
			$this->data['Pf']['ano_graduacao'] = "";
				
			// ordena em ordem decrescente
			$maiorArray = array();
			$maiorArray[] = count($emails);
			$maiorArray[] = count($sites);
			$maiorArray[] = count($telefones);
			rsort($maiorArray);
			
			//percorre os arrays com base no de maior indice
			for($i=0; $i<$maiorArray[0]; $i++){
				$telefone = array_key_exists($i,$telefones) ? $telefones[$i] : "";
				$email = array_key_exists($i,$emails) ? $emails[$i] : "";
				$site = array_key_exists($i,$sites) ? $sites[$i] : "";
				
				$this->data['ContatoPf']['telefone'] = $telefone;
				$this->data['ContatoPf']['email'] = $email;
				$this->data['ContatoPf']['site'] = $site;
				$this->data['ContatoPf']['pf_id'] = $id;
				$this->Pf->ContatoPf->save($this->data);	
				$this->data['ContatoPf']['id'] = "";			
			}
			
			//ordena em ordem decrescente pra salvar graduações									
			$maiorArray = array();
			$maiorArray[] = count($anosGraducao);
			$maiorArray[] = count($cursosGraducao);			
			rsort($maiorArray);
		
			//percorre os arrays com base no de maior indice
			for($i=0; $i<$maiorArray[0]; $i++){
				//verifica se existe valor nos indices corrente
				$anoGraduacao = array_key_exists($i,$anosGraducao) ? $anosGraducao[$i] : "";
				$curso = array_key_exists($i,$cursosGraducao) ? $cursosGraducao[$i] : "";				
				
				$this->data['Graduacao']['ano_graduacao'] = $anoGraduacao;
				$this->data['Graduacao']['curso'] = $curso;
				$this->data['Graduacao']['pf_id'] = $id;
				$this->Pf->Graduacao->save($this->data);	
				$this->data['Graduacao']['id'] = "";			
			}												
			
			// faz upload do arquivo do curriculo anexo																		
			if(!empty($curriculoAnexo["tmp_name"])){																
					$this->data["Pf"]["curriculo_anexo"] = $this->upload($curriculoAnexo,"",$id,2);
			}
			// faz upload do arquivo do CPF/RG																		
			if(!empty($documentoAnexo["tmp_name"])){																
					$this->data["Pf"]["documento_anexo"] = $this->upload($documentoAnexo,"",$id,3);								
			}
			
			if($this->Pf->save($this->data)){												
				$this->Session->setFlash(sprintf(__('O %s foi atualizado.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pf->read(null, $id);
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');						
		$paises = $this->Pf->Pais->find('list');		
		$estados = $this->Estado->find('list', array('conditions' => array('pais_id' => 1)));		
		for($i = 1940; $i < date("Y")+1; $i++){
			$anos_graduacao[$i] = $i;
		}			
		$this->set(compact('nacionalidades', 'paises', 'estados', 'anos_graduacao'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pf'));
			$this->redirect(array('action'=>'index'));
		}				
		if ($this->Pf->delete($id, $cascade = true)) {
			
			$this->varreDir("../".WEBROOT_DIR."/files/curriculos",$id);
			$this->varreDir("../".WEBROOT_DIR."/files/documentos",$id);			
			
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pessoa Física'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s não pode ser excluído.', true), 'Pf'));
		$this->redirect(array('action' => 'index'));
	}
	
	
	function combo_cbo($id = null) {		
		if ($id) {						
			$this->layout = 'ajax';
			$atividades = $this->Pf->Tipologia->find('list',array('joins' => array(
																	                    array(
																	                        'table' => 'cbos', 
																	                    	'alias' => 'cbo',                       
																	                        'type' => 'INNER',
																	                        'conditions' => array('cbo.id = Tipologia.cbo_id')
																	                    )
                    																  ),
                    															   'conditions' => array('Tipologia.segmentocultural_id' => $id),
                    															   'fields' => array('cbo.id','cbo.nomcbo')	                      															  	  
                    														)                    														
                    												);
		    $this->set(compact('atividades'));			
		}
	}
	
	
	function combo_elos($id = null) {										
			$this->layout = 'ajax';			
			$grupoTipologia = $this->params['pass']['0'];
			//verifica se esta vindo do cadastro de PF ou do cadastro de elos
			$tipoForm = !empty($this->params['pass']['1']) ? $this->params['pass']['1'] : "";
			$cbo = $this->params['pass']['2'];
			
			if(!empty($tipoForm) && $tipoForm != "nd"){
				$elos = $this->Pf->Tipologia->Elo->find('list');
			}			
			else{ 
				if($grupoTipologia == 'PF'){						
					$elos = $this->Pf->Tipologia->find('list',array('joins' => array(
																	                    array(
																	                        'table' => 'grupotipologias', 
																	                    	'alias' => 'GP',                       
																	                        'type' => 'INNER',
																	                        'conditions' => array('GP.id = Tipologia.grupotipologia_id'),
																	                    ),
																	                    array(
																	                        'table' => 'elos', 
																	                    	'alias' => 'elo',                       
																	                        'type' => 'INNER',
																	                        'conditions' => array('elo.id = Tipologia.elo_id'),
																	                    )
                    																  ),
                    																  'conditions' => array('GP.nome' => 'PF', 
                    																  						'Tipologia.cbo_id' => $cbo),
                    																  'fields' => array('elo.id','elo.nomelo')	                    															                       															   	                      															  	  
                    														)                    														
                    												);		
				}				
			}			
		    $this->set(compact('elos'));					
	}			
}
?>
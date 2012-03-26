<?php
class PfsController extends AppController {

	var $name = 'Pfs';
	var $uses = array('Pf','Curriculo','CurriculosProduto','TelefonePf','FuncaoExercida', 'PfsTipologia');

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
		}
		if($tipo == 2){// se for curriculo anexo
			$this->Upload->process("../webroot/files/curriculos");
		}
			
		if ($this->Upload->processed) {			
			$this->Upload->clean();//libera a memoria
		} else {
			$this->erro = $this->Upload->error;
		}
		return 'files/comprovantes/'.$arqName.".".$this->Upload->file_src_name_ext;		
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
			
			$comprovante = $this->data["Pf"]["comprovante"];//guardo o comprovante
			$curriculoAnexo = $this->data["Pf"]["curriculo_anexo"];//guardo o curriculo anexo 
			$this->data["Pf"]["comprovante"] = "arquivo";			
			$this->data["Pf"]["curriculo_anexo"] = "";
			$elo = empty($this->data['Pf']['elo']) ? 0 : $this->data['Pf']['elo'];			
			$naturalizado = $this->data['Pf']['naturalizado'];
			$totalEloAtividade = $this->data['Pf']['contadorEloAtividade'];
						
			if($naturalizado == "N"){
				unset($this->data['Pf']['data_naturalizacao']);
				unset($this->data['Pf']['visto_id']);
				unset($this->data['Pf']['data_validade_visto']);
			}
			
				
			$existTipologia = false;
			//recupera id do grupotipologia	
			$idGrupoTipologia = $this->Pf->Tipologia->Grupotipologia->grupoTipologiaPf();			
			for($i=0; $i<$totalEloAtividade; $i++){
				$segmento = $_POST['inputSegmento'][$i];
				$cbo = $_POST['inputAtividade'][$i];				
				$ano = $_POST['inputAno'][$i];								
				$elos = explode(",", $_POST['inputElo'][$i]);
				$idGrupoTipologia = $idGrupoTipologia['Grupotipologia']['id'];
												
				foreach ($elos as $elo) {													
					// array com condições a serem percorridas no loop									
					$idTipologia['id'][] = $this->Pf->Tipologia->idTipologia($segmento,$cbo,$elo,$idGrupoTipologia);
					$idTipologia['ano'][] = $ano;					
				}
			}						
						
			if ($this->Pf->save($this->data)) {				
				$idPf = $this->Pf->id;			
				//print_r($idTipologia);	
				// atualiza a tabela pfs_tipologia com respectivos chaves estrangeiras
				for($i=0; $i<count($idTipologia['id']); $i++){
					$this->data['PfsTipologia']['pf_id'] = $idPf;
					$this->data['PfsTipologia']['tipologia_id'] = $idTipologia['id'][$i]['Tipologia']['id'];
					$this->data['PfsTipologia']['ano'] = $idTipologia['ano'][$i];
					$this->PfsTipologia->save($this->data);
					$this->data['PfsTipologia']['id'] = "";
					
				}
				/*
				foreach ($idTipologia['id'] as $tipologia){
					echo $tipologia['ano'];										
					$this->data['PfsTipologia']['pf_id'] = $idPf;
					$this->data['PfsTipologia']['tipologia_id'] = $tipologia['Tipologia']['id'];
					$this->data['PfsTipologia']['ano'] = $tipologia['ano'];
					$this->PfsTipologia->save($this->data);	
				}
				*/				
				
				
				$totalCurriculo = $this->data['Pf']['contadorCurriculo'];				
				
				//pega os dados dos curriculos e salva no model curriculo
				for($i = 0; $i<$totalCurriculo; $i++){						
					$this->data['Curriculo']['organizacao_responsavel'] = $_POST['or'][$i];
					$this->data['Curriculo']['data'] = $_POST['dt'][$i];
					$this->data['Curriculo']['descricao'] = $_POST['descricao'][$i];
					$this->data['Curriculo']['funcao_exercida_id'] = $_POST['funcaoId'][$i];
					$this->data['Curriculo']['pf_id'] = $idPf;
					$this->Curriculo->save($this->data);					

					
					//salva os produtos do curriculo					
					$produtoId = explode(",", $_POST['ProdutoId'][$i]);								
					foreach ($produtoId as $value) {						
						$this->data['CurriculosProduto']['produto_id'] = $value;
						$this->data['CurriculosProduto']['curriculo_id'] = $this->Curriculo->id;
						$this->CurriculosProduto->save($this->data);						
						$this->data['CurriculosProduto']['id'] = "";						
					}
					
					$this->data['Curriculo']['id'] = "";					
				}				
				
				//salva os telefones
				foreach ($this->data['Pf']['telefone'] as $value) {
					$this->data['TelefonePf']['telefone'] = $value;
					$this->data['TelefonePf']['pf_id'] = $idPf;					
					$this->TelefonePf->save($this->data);
					$this->data['TelefonePf']['id'] = "";				
				}				
				
				// faz upload do arquivo do comprovante														
				$this->data["Pf"]["id"] = $idPf;
				if(!empty($comprovante["tmp_name"])){
						//se largura da imagem maior que 300 é redimensionado para 300
						$larguraImg = getimagesize($comprovante["tmp_name"]);
						if($larguraImg[0] > 300)				
							$this->data["Pf"]["comprovante"] = $this->upload($comprovante,300,$idPf,1);
						else
							$this->data["Pf"]["comprovante"] = $this->upload($comprovante,$larguraImg[0],$idPf,1);					
				}

				// faz upload do arquivo do curriculo anexo																		
				if(!empty($curriculoAnexo["tmp_name"])){																
						$this->data["Pf"]["curriculo_anexo"] = $this->upload($curriculoAnexo,"",$idPf,2);
						//echo "aki"; exit;					
				}
				
				$this->Pf->save($this->data);																
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		$naturalidades = $this->Pf->Naturalidade->find('list');
		$expedidorRgs = $this->Pf->ExpedidorRg->find('list');
		$cidades = $this->Pf->Cidade->find('list');
		$escolaridades = $this->Pf->Escolaridade->find('list');
		$tipologias = $this->Pf->Tipologia->find('list');
		$paises = $this->Pf->Pais->find('list');
		$segmentos = $this->Pf->Tipologia->Segmentocultural->find('list');
		$vistos = $this->Pf->Visto->find('list');
		$this->set(compact('nacionalidades', 'naturalidades', 'expedidorRgs', 'cidades', 'escolaridades', 'tipologias', 'paises', 'segmentos', 'vistos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('%s inválido.', true), 'Pf'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pf->save($this->data)) {
				$this->Session->setFlash(sprintf(__('O %s foi salvo.', true), 'pf'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('O %s não pode ser salvo. Por favor, tente novamente.', true), 'pf'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pf->read(null, $id);
		}
		$nacionalidades = $this->Pf->Nacionalidade->find('list');
		$naturalidades = $this->Pf->Naturalidade->find('list');
		$expedidorRgs = $this->Pf->ExpedidorRg->find('list');
		$cidades = $this->Pf->Cidade->find('list');
		$escolaridades = $this->Pf->Escolaridade->find('list');
		$tipologias = $this->Pf->Tipologia->find('list');
		$paises = $this->Pf->Pai->find('list');
		$this->set(compact('nacionalidades', 'naturalidades', 'expedidorRgs', 'cidades', 'escolaridades', 'tipologias', 'paises'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('ID inválido para %s.', true), 'pf'));
			$this->redirect(array('action'=>'index'));
		}				
		if ($this->Pf->delete($id, $cascade = true)) {
			
			$this->varreDir("../".WEBROOT_DIR."/files/curriculos",$id);
			$this->varreDir("../".WEBROOT_DIR."/files/comprovantes",$id);			
			
			$this->Session->setFlash(sprintf(__('%s excluído.', true), 'Pf'));
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
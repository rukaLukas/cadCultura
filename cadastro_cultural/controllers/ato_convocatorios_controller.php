<?php
	class AtoConvocatoriosController extends Controller {
		public $helpers = array('Form', 'Html', 'Javascript', 'Ajax','Session');
		public $name = 'AtoConvocatorios';
		public $components = array('Session','RequestHandler');

		public function index()
		{
			$this->set('atos_convocatorios', $this->AtoConvocatorio->find('all', array('conditions' => array('AtoConvocatorio.estado !=' => 'Inativo'))));
		}
		
		public function add()
		{
			$this->popularListas();
			
			if (!empty($this->data)) {
					$this->AtoConvocatorio->set('estado','Ativo');
		            if ($this->AtoConvocatorio->save($this->data)) {
		                $this->Session->setFlash('Ato Convacatorio salvo com sucesso.');
		                $this->redirect(array('action' => 'index'));
		            }else{
						$this->popularListasEstadosCidades();
						$this->informacoesUnidadeExecutora();
					} 
			}
		}
		
		function edit($id = null) {
		    $this->AtoConvocatorio->id = $id;
			
		    if (empty($this->data)) {
		        $this->data = $this->AtoConvocatorio->read();
				if(!empty($this->data['AtoConvocatorio']['pais_id'])){
					$this->popularListasEstadosCidades();
				}
				$this->popularListas();
				$this->informacoesUnidadeExecutora();
				if($this->AtoConvocatorio->publicado()){
					$this->render('editar_novos_prazos');
				}
		    } else {
		        if ($this->AtoConvocatorio->save($this->data)) {
		            $this->Session->setFlash('Ato Convocatório editado com sucesso.');
					$this->redirect(array('action' => 'index'));
		        }
				if(!empty($this->data['AtoConvocatorio']['pais_id'])){
					$this->popularListasEstadosCidades();
				}
				$this->popularListas();
				$this->informacoesUnidadeExecutora();
		    }
		}
		
		public function publicar($id = null)
		{
			$this->AtoConvocatorio->id = $id;
			$this->AtoConvocatorio->read();
			
			if(!$this->AtoConvocatorio->publicado()){
				if (empty($this->data)) {
					$this->data = $this->AtoConvocatorio->read();
					$this->popularListas();
				}else{
					if($this->AtoConvocatorio->publicar($id)){
						$this->Session->setFlash('Ato Convocatório publicado com sucesso.');
						$this->redirect(array('action' => 'index'));
					}
				}
			}else{
				$this->Session->setFlash('Ato Convocatório já publicado.');
				$this->redirect(array('action' => 'index'));
			}

		}
		
		public function excluir($id)
		{
			$this->AtoConvocatorio->read();
			
			if(!$this->AtoConvocatorio->publicado()){
				
				if($this->AtoConvocatorio->inativar($id)){
					$this->Session->setFlash('Ato Convocatório excluído.');
				}
				
			}else{
				$this->Session->setFlash('Ato Convocatório já publicado. Não pode ser excluído.');
			}
			
				$this->redirect(array('action' => 'index'));

		}
		
		public function informacoesUnidadeExecutora()
		{
			$unidade_executora = $this->AtoConvocatorio->UnidadeExecutora->findById($this->data['AtoConvocatorio']['unidade_executora_id']);
			$this->set('unidade_executora',$unidade_executora);
		}
		
		private function popularListas()
		{
			$this->set('tipoAtoConvocatorios', $this->AtoConvocatorio->TipoAtoConvocatorio->find('list'));
			$this->set('tipoRegiaos', $this->AtoConvocatorio->TipoRegiao->find('list'));
			$this->set('regiaos', $this->AtoConvocatorio->Regiao->find('list'));
			$this->set('localidades', $this->AtoConvocatorio->Localidade->find('list'));
			$this->set('unidadeExecutoras', $this->AtoConvocatorio->UnidadeExecutora->find('list'));
			$this->set('categorias', $this->AtoConvocatorio->Categoria->find('list'));
			$this->set('pais', $this->AtoConvocatorio->Pais->find('list', array(
				 'fields' => array(
					'id', 'nome'
				  ),
				))
			);		
		}
		
		private function popularListasEstadosCidades()
		{
			$this->loadModel('Pais');
			$estados = $this->Pais->Estado->find('list',
				array(
					'conditions' => array('Estado.pais_id' => $this->data['AtoConvocatorio']['pais_id']),
	                'fields' => array('Estado.id', 'Estado.nome'),
	                'order' => array('Estado.nome ASC')
				)
			);
			$this->set('estados',$estados);

			$this->loadModel('Estado');
			$cidades = $this->Estado->Cidade->find('list',
				array(
					'conditions' => array('Cidade.estado_id' => $this->data['AtoConvocatorio']['estado_id']),
	                'fields' => array('Cidade.id', 'Cidade.nome'),
	                'order' => array('Cidade.nome ASC')
				)
			);
			$this->set('cidades',$cidades);
		}
		
		function upload($file_id, $folder="", $types="") {
			echo print_r($_FILES);
		    if(!$_FILES[$file_id]['name']) return array('','No file specified');

		    $file_title = $_FILES[$file_id]['name'];
		    //Get file extension
		    $ext_arr = split("\.",basename($file_title));
		    $ext = strtolower($ext_arr[count($ext_arr)-1]); //Get the last extension

		    //Not really uniqe - but for all practical reasons, it is
		    $uniqer = substr(md5(uniqid(rand(),1)),0,5);
		    $file_name = $uniqer . '_' . $file_title;//Get Unique Name

		    $all_types = explode(",",strtolower($types));
		    if($types) {
		        if(in_array($ext,$all_types));
		        else {
		            $result = "'".$_FILES[$file_id]['name']."' is not a valid file."; //Show error if any.
		            return array('',$result);
		        }
		    }

		    //Where the file must be uploaded to
		    if($folder) $folder .= '/';//Add a '/' at the end of the folder
		    $uploadfile = $folder . $file_name;

		    $result = '';
		    //Move the file from the stored location to the new location
		    if (!move_uploaded_file($_FILES[$file_id]['tmp_name'], $uploadfile)) {
		        $result = "Cannot upload the file '".$_FILES[$file_id]['name']."'"; //Show error if any.
		        if(!file_exists($folder)) {
		            $result .= " : Folder don't exist.";
		        } elseif(!is_writable($folder)) {
		            $result .= " : Folder not writable.";
		        } elseif(!is_writable($uploadfile)) {
		            $result .= " : File not writable.";
		        }
		        $file_name = '';

		    } else {
		        if(!$_FILES[$file_id]['size']) { //Check if the file is made
		            @unlink($uploadfile);//Delete the Empty file
		            $file_name = '';
		            $result = "Empty file found - please use a valid file."; //Show the error message
		        } else {
		            chmod($uploadfile,0777);//Make it universally writable.
		        }
		    }

		    return array($file_name,$result);
		}

		
	}
	

?>
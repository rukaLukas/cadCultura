<h2>Ato Convocatório - Publicar</h2>

<?php
	echo $this->Form->create('AtoConvocatorio',array('action' => 'publicar','onSubmit' => 'return confirm("Confirma a Publicação?");'));
	echo $this->Form->input('publicar', array('type' => 'hidden', 'value' => 'true'));
?>

<p>Tipo de Mecanismo:<?php echo $this->data['AtoConvocatorio']['tipo_mecanismo'] ?></p>
<p>Tipo de Ato:<?php echo $this->data['AtoConvocatorio']['tipo_ato'] ?></p>
<p>Título:<?php echo $this->data['AtoConvocatorio']['titulo'] ?></p>

<p>Tipo: <?php echo $this->data['TipoAtoConvocatorio']['title'] ?></p> 

<p>Numero: <?php echo $this->data['AtoConvocatorio']['numero'] ?></p>
<p>Ano: <?php echo $this->data['AtoConvocatorio']['ano'] ?></p>
<p>Título: <?php echo $this->data['AtoConvocatorio']['titulo'] ?></p>

<p>Categorias:</p>
<?php foreach ($this->data['Categoria'] as $categoria): ?>
	<p><?php print_r($categoria['title']) ?></p>
<?php endforeach; ?>

<p>Pais: <?php echo $this->data['Pais']['nome'] ?></p>
<p>Estado: <?php echo $this->data['Estado']['nome'] ?></p>
<p>Cidade: <?php echo $this->data['Cidade']['nome'] ?></p>

<p>Tipo de Região: <?php echo $this->data['TipoRegiao']['title'] ?></p>
<p>Localidade: <?php echo $this->data['Regiao']['title'] ?></p>
<p>Unidade Executora: <?php echo $this->data['UnidadeExecutora']['title'] ?></p>

<p>&nbsp;</p>
<h3>Prazo de Apresentação da Proposta</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_apresentacao'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_apresentacao'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_fim_apresentacao'] ?></p>

<p>&nbsp;</p>
<h3>Data da Análise</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_analise'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_analise'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_fim_analise'] ?></p>

<p>&nbsp;</p>
<h3>Prazo de Recursos para Análise Prévia</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_recurso_analise'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_recurso_analise'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_fim_recurso_analise'] ?></p>

<p>&nbsp;</p>
<h3>Data das Diligengias da Análise</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_diligencias_analise'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_diligencias_analise'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_fim_diligencias_analise'] ?></p>

<p>&nbsp;</p>
<h3>Data Publicação Escritas</h3>
<p>Data Prevista: <?php echo $this->data['AtoConvocatorio']['data_prevista_publicao_inscritas'] ?></p>
<p>Data Real: <?php echo $this->data['AtoConvocatorio']['data_real_publicacao_inscritas'] ?></p>

<p>&nbsp;</p>
<h3>Data da Seleção</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_selecao'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_selecao'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_fim_selecao'] ?></p>

<p>&nbsp;</p>
<h3>Data de Início Diligencias Seleção</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_diligencias_selecao'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_diligencias_selecao'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_fim_diligencias_selecao'] ?></p>

<p>&nbsp;</p>
<h3>Data Publicação Selecionadas</h3>
<p>Data Prevista: <?php echo $this->data['AtoConvocatorio']['data_prevista_publicacao_selecionadas'] ?></p>
<p>Data Real: <?php echo $this->data['AtoConvocatorio']['data_real_publicacao_selecionadas'] ?></p>

<p>&nbsp;</p>
<h3>Data Recurso</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_recurso'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_recurso'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_fim_recurso'] ?></p>

<p>&nbsp;</p>
<h3>Data Publicação Resultados</h3>
<p>Data Prevista: <?php echo $this->data['AtoConvocatorio']['data_prevista_publicacao_resultados'] ?></p>
<p>Data Real: <?php echo $this->data['AtoConvocatorio']['data_real_publicacao_resultados'] ?></p>

<p>&nbsp;</p>
<h3>Data Entrega dos Documentos</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_entrega_documentos'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_entrega_documentos'] ?></p>
<p>Novo Prazo: <?php echo $this->data['AtoConvocatorio']['novo_prazo_entrega_documentos'] ?></p>

<p>&nbsp;</p>
<h3>Data Celebração</h3>
<p>Data Prevista: <?php echo $this->data['AtoConvocatorio']['data_prevista_celebracao'] ?></p>
<p>Data Real: <?php echo $this->data['AtoConvocatorio']['data_real_publicacao'] ?></p>

<p>&nbsp;</p>
<h3>Data Publicação</h3>
<p>Data Prevista: <?php echo $this->data['AtoConvocatorio']['data_prevista_publicacao'] ?></p>
<p>Data Real: <?php echo $this->data['AtoConvocatorio']['data_real_publicacao'] ?></p>

<p>&nbsp;</p>
<h3>Data Limite TCE</h3>
<p>Data Prevista: <?php echo $this->data['AtoConvocatorio']['data_prevista_limite_tce'] ?></p>
<p>Data Real: <?php echo $this->data['AtoConvocatorio']['data_real_limite_tce'] ?></p>

<p>&nbsp;</p>
<h3>Data Prazo Seleção</h3>
<p>Data Início: <?php echo $this->data['AtoConvocatorio']['data_inicio_prazo_selecao'] ?></p>
<p>Data Fim: <?php echo $this->data['AtoConvocatorio']['data_fim_prazo_selecao'] ?></p>

<p>Data Prevista: <?php echo $this->data['AtoConvocatorio']['data_real_inicio_prazo_selecao'] ?></p>
<p>Data Real: <?php echo $this->data['AtoConvocatorio']['data_real_fim_prazo_selecao'] ?></p>

<?php
	echo $this->Form->end('Publicar');
?>






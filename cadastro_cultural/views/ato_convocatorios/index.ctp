<h2>Ato Convocatório</h2>
<p><?php echo $html->link('Adicionar Ato Convocatório', array('action' => 'add')); ?></p>
<table cellspacing="5" cellpadding="5" class="table table-striped table-bordered table-condensed">
	<tr>
		<th>Título</th>
		<th>Tipo de Ato Convocatório</th>
		<th>Número</th>
		<th>Ano</th>
		<th>Ato Convocatório</th>
		<th>Editar</th>
		<th>Publicar</th>
		<th>Excluir</th>
	</tr>
	<?php foreach ($atos_convocatorios as $ato_convocatorio): ?>
		<tr>
			<td><?php echo $ato_convocatorio['AtoConvocatorio']['titulo']; ?></td>
			<td><?php echo $ato_convocatorio['TipoAtoConvocatorio']['title']; ?></td>
			<td><?php echo $ato_convocatorio['AtoConvocatorio']['numero']; ?></td>
			<td><?php echo $ato_convocatorio['AtoConvocatorio']['ano']; ?></td>
			<td><?php echo $ato_convocatorio['AtoConvocatorio']['ato_convocatorio_url']; ?></td>
			<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $ato_convocatorio['AtoConvocatorio']['id']));?></td>
			<td><?php if($ato_convocatorio['AtoConvocatorio']['estado'] != 'Publicado'){ echo $this->Html->link('Publicar', array('action' => 'publicar', $ato_convocatorio['AtoConvocatorio']['id']));} else{ echo 'Publicado'; }  ?></td>
			<td><?php if($ato_convocatorio['AtoConvocatorio']['estado'] != 'Publicado'){ echo $html->link('Excluir', array('action' => 'excluir', $ato_convocatorio['AtoConvocatorio']['id']), null, 'Deseja realmente excluir?' ); } else { echo "-"; } ?></td>
			
		</tr>
	<?php endforeach; ?>
	
</table>
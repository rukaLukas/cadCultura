<h1>Pessoas Juridicas </h1>
<?php echo $html->script('jquery.js'); ?>
<?php echo $html->script('jquery.maskedinput-1.3.js'); ?>

<script type="text/javascript">
 $(document).ready(function(){
    $("#PessoaJuridicaCnpj").mask("99.999.999/9999-99");
 });
</script>

<?php echo $html->link('Criar Pessoa Juridica',array('controller' => 'pessoas_juridicas', 'action' => 'add'))?>

<?php
    echo $form->create('PessoaJuridica', array(
		'url' => array_merge(array('action' => 'index'), $this->params['pass'])
		));
	echo $form->input('nome_fantasia', array('div' => false));
	echo $form->input('cnpj', array('div' => false));
	
	echo $form->submit(__('Search', true), array('div' => false));
	echo $form->end();
?>
<table cellspacing="5" cellpadding="5" class="table table-striped table-bordered table-condensed">

    <tr>
        
        <th>Razao Social</th>
        <th>Nome Fantasia</th>
        <th>Cnpj</th>
        <th>Fundação</th>
        <th>Opções</th>
        </tr>


        <?php foreach ($pessoasJuridicas as $pessoaJuridica): ?>
            <tr>
        
                <td>
                    <?php echo $html->link($pessoaJuridica['PessoaJuridica']['razao_social'], "/pessoas_juridicas/view/".$pessoaJuridica['PessoaJuridica']['id']); ?>
                </td>
                <td>
                    <?php echo $html->link($pessoaJuridica['PessoaJuridica']['nome_fantasia'], "/pessoas_juridicas/view/".$pessoaJuridica['PessoaJuridica']['id']); ?>
                </td>
                <td>
                    <?php echo $html->link($pessoaJuridica['PessoaJuridica']['cnpj'], "/pessoas_juridicas/view/".$pessoaJuridica['PessoaJuridica']['id']); ?>
                </td>
                <td>
                    <?php echo $pessoaJuridica['PessoaJuridica']['data_fundacao']; ?>
                </td>
                <td>
                    <?php echo $html->link('Excluir', array('action' => 'delete', $pessoaJuridica['PessoaJuridica']['id']), null, 'Deseja realmente excluir?' )?>
                    <?php echo $html->link('Editar', array('action'=>'edit', $pessoaJuridica['PessoaJuridica']['id']));?>
                </td>
            </tr>
        <?php endforeach; ?>
  </table>
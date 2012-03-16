<?php if(!empty($cidades))
{
	echo '<option value="">.:Selecione a cidade:.</option>';
    foreach ($cidades as $id => $cidade)
    {
        echo '<option value="'.$id.'">'.$cidade.'</option>';
    }
}

?>
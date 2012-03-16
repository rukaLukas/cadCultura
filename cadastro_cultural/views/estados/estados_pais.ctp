<?php if(!empty($estados))
{
	echo '<option value="">.:Selecione o estado:.</option>';
    foreach ($estados as $id => $estado)
    {
        echo '<option value="'.$id.'">'.$estado.'</option>';
    }
}

?>
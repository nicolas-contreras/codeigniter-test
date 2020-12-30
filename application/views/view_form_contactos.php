<!doctype html>
<html lang="en" style="height: 100%">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<title>Hello, world!</title>
</head>
<div class="container form-group" style="padding-top:20px;">
<h1>Nuevo contacto</h1>
</br>
<?php
$input_con_email=array(
		'name'		=> 'con_email',
		'id'		=> 'con_email',
		'maxlength' => '120',
		'size'		=> '100',
	//	'type'		=> 'email',
		'value'		=>  set_value('con_email',@$datos_contacto[0]->con_email)
);
$input_con_nombre=array(
		'name'		=> 'con_nombre',
		'id'		=> 'con_nombre',
		'maxlength' => '60',
		'size'		=> '50',
	//	'type'		=> 'name',
		'value'		=>  set_value('con_nombre',@$datos_contacto[0]->con_nombre)
);
$input_con_telefono=array(
		'name'		=> 'con_telefono',
		'id'		=> 'con_telefono',
		'maxlength' => '20',
		'size'		=> '18',
	//	'type'		=> 'tel',
		'value'		=>  set_value('con_telefono',@$datos_contacto[0]->con_telefono)
);
$input_con_edad=array(
		'name'		=> 'con_edad',
		'id'		=> 'con_edad',
		'maxlength' => '3',
		'size'		=> '4',
	//	'type'		=> 'number',
		'value'		=>  set_value('con_edad',@$datos_contacto[0]->con_edad)
);
$opciones=array(
		'0'		=> 'Inactivo',
		'1'		=> 'Activo'
);
?>
<div class="row">
	<div class="col-2"></div>
	<div class="col-8">
<?php //echo validation_errors(); ?>
	<?php echo form_open();?>

	<?php echo form_label('Email');?> <br/>
	<?php echo form_input($input_con_email);?><?php echo form_error('con_email');?><br/>

	<?php echo form_label('Nombre');?> <br/>
	<?php echo form_input($input_con_nombre);?><?php echo form_error('con_name');?><br/>

	<?php echo form_label('Telefono');?> <br/>
	<?php echo form_input($input_con_telefono);?><?php echo form_error('con_telefono');?><br/>

	<?php echo form_label('Edad');?> <br/>
	<?php echo form_input($input_con_edad);?><?php echo form_error('con_edad');?><br/>

	<?php echo form_label('Estado');?> <br/>
	<?php echo form_dropdown('con_status',$opciones,set_value('con_status',@$datos_contacto[0]->con_status));?><br/>

	<?php echo form_submit('btn_enviar','Guardar', "class='btn btn-success'");?> <br/>

<?php echo form_close();?>
	</div>
	<div class="col-2"></div>
</div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
-->
</body>
</html>

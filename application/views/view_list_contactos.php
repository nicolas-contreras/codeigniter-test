<!doctype html>
<html lang="en" style="height: 100%">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<title>Hello, world!</title>
</head>
<div class="container" style="background-color:SlateGrey;margin-top:20px;padding-bottom: 20px;">
	<h1>Contactos</h1>

	</br>
	<?php if (empty($listado)){ ?>
		<h1><b>Sin contactos</b></h1>
	<?php } else { //bucle?>
		<p> Tienes <?php echo count($listado) ?> contacto(s)</p>
		</br></br>

		<table class="table">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Opciones</th>
				</tr>
			</thead>

		<?php foreach($listado as $contacto){?>
			<tr>
				<td><?php echo $contacto->con_nombre;?></td>
				<td><a href="<?php echo base_url() ?>index.php/contactos/modificar/<?php echo $contacto->con_id;?>" class="btn btn-warning">Editar</a>
					<a href="<?php echo base_url() ?>index.php/contactos/eliminar/<?php echo $contacto->con_id;?>" class="btn btn-danger">Eliminar</a>
				</td>
			</tr>


		<?php } ?>
		</table>

<?php } ?>


<a href="<?php echo base_url() ?>index.php/contactos/agregar" class="btn btn-primary">Nuevo Contacto</a>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

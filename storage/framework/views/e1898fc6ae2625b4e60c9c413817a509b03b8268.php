<?php $__env->startSection('body'); ?>
	<h1 align="center">Tipos de Juicios en el Despacho Velazquez</h1>
	<table border="1" align="center" class="table table-dark table-hover">
		<tr><th scope="col">Clave</th><th scope="col">Tipo Juicio</th><th scope="col">Operaciones</th>	
		</tr>
		<?php foreach($TipJui as $tj): ?>
			<tr><th scope="row"><?php echo e($tj->id_TipoJuicio); ?></th><td><?php echo e($tj->NomTipoJuicio); ?></td>
			<td><a href="#">Eliminar </a>
				<a href="#">Modificar</a>
			</td></tr>
		<?php endforeach; ?>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sistema.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
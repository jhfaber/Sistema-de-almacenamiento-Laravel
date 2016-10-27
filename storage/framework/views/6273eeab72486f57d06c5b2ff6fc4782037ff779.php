<?php $__env->startSection('contenido'); ?>
	<div>
		<h3>Listado de categorias</h3>
	</div>
	<div>
		<table class="table table-striped table-bordered table-condensed table-hover">
			<thead>
				<th>Id</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Activacion</th>
			</thead>
			
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<tr>
					<td><?php echo e($cat->idcategoria); ?></td>
					<td><?php echo e($cat->nombre); ?></td>
					<td><?php echo e($cat->descripcion); ?></td>
					<td><?php echo e($cat->condicion); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			
		</table>
		<?php echo e($users->render()); ?>

	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
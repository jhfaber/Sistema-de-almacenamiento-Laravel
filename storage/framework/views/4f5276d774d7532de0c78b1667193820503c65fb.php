<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Clientes <a href="<?php echo e(URL::action('ClienteController@create')); ?>"><button class="btn btn-success">Nuevo</button></a></h3>
			<?php echo $__env->make('ventas/cliente/search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
		</div>
	</div>
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<div class= "table-responsive">
					<table class="table table-striped table-bordered table-condensed table-hover">
						<thead>
							<th>Id</th>
							<th>Nombre</th>
							<th>Tipo Doc</th>
							<th>Num Doc</th>
							<th>Telefono</th>
							<th>Email</th>							
							<th>Opciones</th>													
						</thead>						
						<?php $__currentLoopData = $personas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $per): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
							<tr>
								<td><?php echo e($per->idpersona); ?></td>
								<td><?php echo e($per->nombre); ?></td>
								<td><?php echo e($per->tipo_documento); ?></td>
								<td><?php echo e($per->num_documento); ?></td>
								<td><?php echo e($per->telefono); ?></td>								
								<td><?php echo e($per->email); ?></td>
								<td>
									<a href="<?php echo e(URL::action('ClienteController@edit',$per->idpersona)); ?>"><button class="btn btn-info">Editar</button></a>
									<a href="" data-target="#modal-delete-<?php echo e($per->idpersona); ?>" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
								</td>
							</tr>
						<?php echo $__env->make('ventas/cliente/eliminar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
					</table>
				</div>
					<?php echo e($personas->render()); ?>

			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>